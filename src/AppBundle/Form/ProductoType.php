<?php

namespace AppBundle\Form;

use AppBundle\Form\EventListener\AddProductoExtencionListener;
use AppBundle\Form\Type\ProductoImagenCollectionType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PercentType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Entity\CategoriaRepository;
use RBSoft\UtilidadBundle\Form\DataTransformer\FileToStringTransformer;
use AppBundle\Form\DataTransformer\ManyToEntityTransformer;

class ProductoType extends AbstractType
{

    private $manager;

    public function __construct(ObjectManager $manager)
    {
        $this->manager = $manager;
    }


    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('codigo', null, array(
                'required' => true,
                'attr' => array('style' => 'width: auto')
            ))
            ->add('nombre', null, array(
                'required' => true,
            ))
            ->add('descripcion', null, array(
                'required' => true,
            ))
            ->add('precio', NumberType::class, array(
                'required' => true,
            ))
            ->add('iva', PercentType::class, array(
                'required' => false,

            ))
            ->add('limiteStock', null, array(
                'label' => 'Limite minimo de stock',
                'required' => true,
//                'help' => 'Ingrese el minimo de productos disponibles en stock.',
                'attr' => array('style' => 'width: auto')
            ))
            ->add('activo', null, array(
                'required' => false,
            ))
            ->add('imagenes', ProductoImagenCollectionType::class, array(
                'entry_type' => ProductoImagenType::class,
                'allow_add' => true,
                'allow_delete' => false,
                'delete_empty' => true,
                'prototype' => true,
                'by_reference' => false,
//                'mapped' => false,
            ));

        $builder->get("imagenes")->addModelTransformer(new ManyToEntityTransformer($this->manager, 'AppBundle\Entity\ProductoImagen'));
        $builder->addEventSubscriber(new AddProductoExtencionListener($builder->getFormFactory(), $this->manager));

        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) {
                $form = $event->getForm();
                $data = $event->getData();

                $id = $data->getId();
                if (is_null($id)) {

                    $form->add('categoria', EntityType::class, array(
                        'label' => 'Categoria',
                        'class' => 'AppBundle:Categoria',
//                        'property' => 'getStrAscentendeCategoria',
                        'required' => true,
                        'multiple' => false,
                        'query_builder' => function (CategoriaRepository $repository) {
                            return $repository
                                ->getCategoriasAsignables();
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
    public function getBlockPrefix()
    {
        return 'appbundle_producto';
    }
}
