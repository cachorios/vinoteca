<?php

namespace AppBundle\Form;

use RBSoft\UtilidadBundle\Form\Type\EntityIdType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReposicionItemType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cantidad', null, array(
                'required' => true
            ))
            ->add('precioUnitario', MoneyType::class, array(
                    'currency' => 'ARS'
            ))
            ->add('producto_codigo', null, array(
            ))
            ->add('producto_nombre', null, array(
            ))
        ;

           $builder->add('producto', EntityIdType::class, array(
                'class' => 'AppBundle:Producto',
           ));
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class' => 'AppBundle\Entity\ReposicionItem',
                'cascade_validation' => true
            )
        );
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'appbundle_reposicionitem';
    }
}
