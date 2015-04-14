<?php

namespace AppBundle\Form;

use AppBundle\Entity\ReposicionItem;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


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
                'empty_value' => 'Seleccionar',
//                'mapped' => false,
            ))
            ->add('fechaReposicion', 'app_datetime', array(
                'label' => 'Fecha de reposicion',
                'constraints' => new Assert\NotBlank(),
            ))
            ->add('items', 'reposicion_items_collection', array(
                'type' => new ReposicionItemType(),
                'by_reference'   => false,
                'allow_add' => true,
                'allow_delete' => true,
                'delete_empty' => true,
                'prototype' => true,

            ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
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
    public function getName()
    {
        return 'appbundle_reposicion';
    }
}
