<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Entity\CategoriaRepository;
use RBSoft\UtilidadBundle\Form\DataTransformer\FileToStringTransformer;

class CategoriaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $transformer = new FileToStringTransformer();


        $builder
            ->add('imagen', 'file',array(
                'required' => false,
            ))
            ->add('nombre', null, array(
                'label' => 'Nombre',
            ))
            ->add('descripcion', null, array(
                'label' => 'Descripción',
            ))
            ->add('orden', null, array(
                'label' => 'Orden',
            ))
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
                'required' => false))
            ->add('activo', 'checkbox', array(
                'label' => 'Es Activo?',
                'required' => false))
            ->add('metadatos', 'metadato_collection', array(
                'type' => new MetadataProductoType(),
                'allow_add' => true,
                'allow_delete' => true,
                'delete_empty' => true,
                'prototype' => true,
                'by_reference' => false,


            ))
        ;

        $builder->get("imagen")->addModelTransformer(new FileToStringTransformer());

    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Categoria',
            'cascade_validation' => true
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
