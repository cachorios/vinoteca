<?php

namespace AppBundle\Form;


use AppBundle\Form\Type\MetadatoCollectionType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
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
            ->add('imagen', FileType::class , array(
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
  //              'help' => 'Modifica el orden dentro de su categoria',
            ))
            ->add('parent', EntityType::class, array(
//                'help' => 'Nivel primario, nodo padre principal',
                'label' => 'Nodo padre',
                'class' => 'AppBundle:Categoria',
                'choice_label' => 'nombre',
                'placeholder' => "Nivel Primario",
//                'property' => 'getNodeNombre',
                'required' => false,
                'multiple' => false,
                'query_builder' => function (CategoriaRepository $repository) {
                    return $repository
                        ->selectOrdenTree();
                },
            ))
            ->add('visible', CheckboxType::class, array(
                'label' => 'Es Visible?',
                'required' => false,
              //  'help' => 'Al desactivar no sera visible en el menu principal, incluye a los hijos',
            ))
            ->add('activo', CheckboxType::class, array(
                'label' => 'Es Activo?',
                'required' => false))
            ->add('metadatos', MetadatoCollectionType::class, array(
                'entry_type' => MetadataProductoType::class,
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
    public function getBlockPrefix()
    {
        return 'appbundle_categoria';
    }
}
