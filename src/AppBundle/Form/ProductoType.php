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
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use AppBundle\Form\DataTransformer\ManyToEntityTransformer;

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
                'required' => true,
                'attr' => array('style' => 'width: auto')
            ))
            ->add('nombre', null, array(
                'required' => true,
            ))
            ->add('descripcion', null, array(
                'required' => true,
            ))
            ->add('precio', 'number', array(
                'required' => true,
            ))
            ->add('iva', 'percent', array(
                'required' => false,

            ))
            ->add('limiteStock', null, array(
                'label' => 'Limite minimo de stock',
                'required' => true,
                'help' => 'Ingrese el minimo de productos disponibles en stock.',
                'attr' => array('style' => 'width: auto')
            ))
            ->add('activo', null, array(
                'required' => false,
            ))
            ->add('imagenes', 'producto_imagen_collection', array(
                'type' => new ProductoImagenType(),
                'allow_add' => true,
                'allow_delete' => false,
                'delete_empty' => true,
                'prototype' => true,
                'by_reference' => false,
//                'mapped' => false,
            ))
//            ->add('images', 'file', array(
//                "mapped" => false,
//                'required' => false,
//                'multiple' => true
//            ))
        ;

        $builder->get("imagenes")->addModelTransformer(new ManyToEntityTransformer($this->em,'AppBundle\Entity\ProductoImagen'));
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
                        'property' => 'getStrAscentendeCategoria',
                        'required' => true,
                        'multiple' => false,
                        'query_builder' => function (CategoriaRepository $repository) {
                            return $repository
                                ->getCategoriasAsignables();
                        },))
                    ;
                }
            }
        );
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
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
