<?php

namespace AppBundle\Form;

use AppBundle\Form\EventListener\AddProductoExtencionListener;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Entity\CategoriaRepository;
use RBSoft\UtilidadBundle\Form\DataTransformer\FileToStringTransformer;

class ProductoType extends AbstractType
{
    protected $em;

    function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('codigo', null, array(
                'required' => false,
            ))
            ->add('nombre', null, array())
            ->add('descripcion', null, array())
            ->add('precio', 'number', array(
                'required' => true,
            ))
            ->add('iva', 'number', array(
                'required' => false,
            ))
            ->add('activo', null, array(
                'required' => false,
            ))
            ->add('images', 'file', array(
                "mapped" => false,
                'required' => false,
                'multiple' => true
            ));

        $builder->get("images")->addModelTransformer(new FileToStringTransformer());
        $builder->addEventSubscriber(new AddProductoExtencionListener($builder->getFormFactory(), $this->em));

        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) {
                $form = $event->getForm();
                $data = $event->getData();

                $id = $data->getId();
                if (is_null($id)) {
                    $form->add('categoria', 'entity', array(
                        'label' => 'Categoria',
                        'class' => 'AppBundle:Categoria',
                        'empty_value' => '',
                        'property' => 'getNodeNombre',
                        'required' => false,
                        'multiple' => false,
                        'query_builder' => function (CategoriaRepository $repository) {
                            return $repository
                                ->selectOrdenTreeAll();
                        },));
                }
            }
        );
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver
            ->setDefaults(array(
                'data_class' => 'AppBundle\Entity\Producto'
//            'csrf_protection' => true,
            ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_producto';
    }
}
