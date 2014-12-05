<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Entity\CategoriaRepository;

class CategoriaType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('imagen', 'file')
            ->add('nombre')
            ->add('descripcion',null, array(
                'label' => 'Descripción',
            ))
            ->add('orden')
            ->add('parent', 'entity', array(
                'label' => 'Nodo padre',
                'class' => 'AppBundle:Categoria',
                'empty_value' => '',
                'property' => 'getNodeNombre',
                'required' => false,
                'multiple' => false,
                'query_builder' => function (CategoriaRepository $repository) {
                    return $repository
                        ->selectOrdenTree();
                },))

            ->add('visible', 'checkbox', array(
                'label' => 'Es Visible?',
                'required'  => false))
            ->add('activo', 'checkbox', array(
                'label'     => 'Es Activo?',
                'required'  => false))

            ->add('metadatos', 'collection', array(
                    'type' => new MetadataProductoType(),
                    'allow_add' => true,
                    'allow_delete' => true,
                    'prototype' => true,
                    'by_reference' => false,
                    ))

//            ->add('metadatos', 'collection', array('type' => new MetadataProductoType()));
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function configureOptions(OptionsResolver  $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Categoria'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_categoria';
    }
}
