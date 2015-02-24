<?php

namespace AppBundle\Form;

use AppBundle\Entity\Contenido;
use Symfony\Component\Form\AbstractType;
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
            ->add('ubicacion','choice',array('choices' => Contenido::$UBICACIONES))
            ->add('orden')
            ->add('tipo','choice',array('choices' => Contenido::$TIPO_CONTENIDOS))
//            ->add('imagens', 'file', array(
//                'attr' =>array("class" => ".imgage_carrusel"),
//                "mapped" => false,
//                'required' => false,
//                'multiple' => false
//            ))
            ->add('contenido','my_collection',array(
                'type' => new ContenidoCarruselType(),
                'allow_add' => true,
                'allow_delete' => true,
                'delete_empty' => true,
                'prototype' => true,
                'by_reference' => false,))
//            ->add('contenido')
//            ->add('links')
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
            'cascade_validation' => true
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_contenido';
    }
}
