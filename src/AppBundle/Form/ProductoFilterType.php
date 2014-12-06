<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormError;

class ProductoFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id', 'filter_number_range')
            ->add('codigo', 'filter_number_range')
            ->add('nombre', 'filter_text')
            ->add('slug', 'filter_text')
            ->add('marca', 'filter_text')
            ->add('descripcion', 'filter_text')
            ->add('precio', 'filter_number_range')
            ->add('iva', 'filter_number_range')
            ->add('activo', 'filter_choice')
            ->add('createdAt', 'filter_date_range')
            ->add('updatedAt', 'filter_date_range')
        ;

        $listener = function(FormEvent $event)
        {
            // Is data empty?
            foreach ($event->getData() as $data) {
                if(is_array($data)) {
                    foreach ($data as $subData) {
                        if(!empty($subData)) return;
                    }
                }
                else {
                    if(!empty($data)) return;
                }
            }

            $event->getForm()->addError(new FormError('Filtro limpio'));
        };
        $builder->addEventListener(FormEvents::POST_SUBMIT, $listener);
    }

    public function getName()
    {
        return 'appbundle_productofiltertype';
    }
}