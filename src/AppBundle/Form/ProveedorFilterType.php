<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormError;

class ProveedorFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id', 'filter_number_range')
            ->add('codigo', 'filter_number_range')
            ->add('razon_social', 'filter_text')
            ->add('nombre_fantasia', 'filter_text')
            ->add('cuit', 'filter_text')
//            ->add('domicilio', 'filter_text')
//            ->add('codigo_postal', 'filter_text')
//            ->add('provincia', 'filter_text')
//            ->add('ciudad', 'filter_text')
//            ->add('pais', 'filter_text')
//            ->add('pagina_web', 'filter_text')
//            ->add('telefono', 'filter_text')
//            ->add('fax', 'filter_text')
//            ->add('mail', 'filter_text')
//            ->add('contacto', 'filter_text')
//            ->add('contacto_telefono', 'filter_text')
//            ->add('contacto_int', 'filter_text')
//            ->add('contacto_fax', 'filter_text')
//            ->add('contacto_movil', 'filter_text')
//            ->add('contacto_mail', 'filter_text')
//            ->add('moneda', 'filter_text')
//            ->add('limite_credito', 'filter_number_range')
//            ->add('tipo_pago', 'filter_number_range')
//            ->add('descuento', 'filter_number_range')
//            ->add('cond_iva', 'filter_text')
//            ->add('n_cuenta', 'filter_text')
//            ->add('comentario', 'filter_text')
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
        return 'appbundle_proveedorfiltertype';
    }
}
