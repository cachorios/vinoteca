<?php

namespace AppBundle\Form;

use AppBundle\Form\EventListener\AddProductoExtencionListener;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductoType extends AbstractType
{
    /**
     * @var ObjectManager
     */
    private $em;

    /**
     * @param ObjectManager $om
     */
    public function __construct(EntityManager $em)
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
            ->add('categoria', null, array())
            ->add('nombre', null, array())
            ->add('descripcion', null, array())
            ->add('precio', null, array())
            ->add('iva', null, array())
            ->add('activo', null, array())
            ->add('images', 'file', array(
                "mapped" => false,
                'required' => false,
                "attr" => array(
                    "accept" => "image/*",
                    "multiple" => "multiple",
                )
            ))
//            ->add('extencion', 'extencion_collection', array(
//                'type' => new ExtencionProductoType(),
//                'allow_add' => false,
//                'allow_delete' => false,
//                'by_reference' => false,
//
//            ))
        ;

        $builder->addEventSubscriber(new AddProductoExtencionListener($builder->getFormFactory(),$this->em ));
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
