<?php

namespace AppBundle\Form;

use AppBundle\Entity\Contenido;
use AppBundle\Entity\ContenidoDetalle;
use AppBundle\Form\Type\MyCollectionType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContenidoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('ubicacion', ChoiceType::class ,array('choices' => Contenido::$UBICACIONES))
            ->add('orden', NumberType::class)
            ->add('tipo',ChoiceType::class,array('choices' => Contenido::$TIPO_CONTENIDOS))

            ->add('contenidoDetalle',MyCollectionType::class,array(
                'entry_type' => ContenidoDetalleType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'delete_empty' => true,
                'prototype' => true,
//                'prototype_data' => new ContenidoDetalle(),
                'by_reference' => false,
                ))

//            ->add('contenidoDetalle', CollectionType::class,array(
//                    'entry_type' => ContenidoDetalleType::class,
//                    'by_reference' => false,
//                    'allow_add' => true,
//                    'allow_delete' => true,
//                    'delete_empty' => true,
//                ))

            ->add('activo',null,array('required' => false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Contenido',
           // 'cascade_validation' => true
        ));
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'appbundle_contenido';
    }
}
