<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Lexik\Bundle\FormFilterBundle\Filter\Form\Type as Filters;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormError;

class ProductoFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codigo', Filters\TextFilterType::class)
            ->add('nombre', Filters\TextFilterType::class)
            ->add('precio', Filters\NumberRangeFilterType::class)
            ->add('iva',    Filters\NumberFilterType::class)
            ->add('activo', Filters\BooleanFilterType::class)
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

    public function getBlockPrefix()
    {
        return 'appbundle_productofiltertype';
    }
}
