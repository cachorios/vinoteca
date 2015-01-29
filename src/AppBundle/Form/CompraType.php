<?php

namespace AppBundle\Form;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class CompraType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('facturaNumero', null, array(
                'required' => true,
                'label' => 'Numero de factura',
            ))
            ->add('cuit', null, array(
                'label' => 'CUIT',
                'attr' => array(
                    'prepend_input' => '@'
                )
            ))
            ->add('fechaCompra', 'app_datetime', array(
                'label' => 'Fecha de compra',
//                'help' => '! dia/mes/año',
                'constraints' => new Assert\NotBlank(),
            ))
        ;

        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) {
                $form = $event->getForm();
                $data = $event->getData();

                $id = $data->getId();
                if (is_null($id)) {
                    $form
                        ->add('items', 'compra_items_collection', array(
                            'type' => new CompraItemType(),
                            'allow_add' => true,
                            'allow_delete' => true,
                            'delete_empty' => true,
                            'prototype' => true,
                            'by_reference' => false,
                        ))
                    ;

                }
            }
        );

    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Compra',
            'cascade_validation' => true
        ));
    }


    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_compra';
    }
}
