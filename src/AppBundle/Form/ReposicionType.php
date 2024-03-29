<?php

namespace AppBundle\Form;

use AppBundle\Entity\ReposicionItem;
use AppBundle\Form\Type\AppDateTimeType;
use AppBundle\Form\Type\ReposicionItemsCollectionType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class ReposicionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codigo', null, array(
                'required' => true,
                'label' => 'Codigo',
            ))
            ->add('proveedor', null, array(
                'label' => 'Proveedor',
                'placeholder' => 'Seleccionar',
//                'mapped' => false,
            ))
            ->add('fechaReposicion', AppDateTimeType::class, array(
                'label' => 'Fecha de reposicion',
                'constraints' => new Assert\NotBlank(),
            ))
            ->add('items', ReposicionItemsCollectionType::class, array(
                'entry_type' => ReposicionItemType::class,

                'by_reference'   => false,
                'allow_add' => true,
                'allow_delete' => true,
                'delete_empty' => true,
                'prototype' => true,

            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class' => 'AppBundle\Entity\Reposicion',
                'cascade_validation' => true
            )
        );
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'appbundle_reposicion';
    }
}
