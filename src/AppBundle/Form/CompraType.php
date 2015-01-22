<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

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
                'label' => 'Numreo de factura',
            ))
            ->add('cuit', null, array(
                'label' => 'CUIT',
            ))
            ->add('fechaCompra', 'app_datetime', array(
                'label' => 'Fecha de compra',
            ));

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
