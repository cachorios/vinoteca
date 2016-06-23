<?php

namespace AppBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use RBSoft\CartBundle\Entity\Cupon;

class CuponType extends AbstractType
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
                'attr' => array('style' => 'width: auto')
            ))
            ->add('inicio', 'AppBundle\Form\Type\DateTimePickerType', array(
                'label' => 'label.inicio',
            ))
            ->add('vencimiento', 'AppBundle\Form\Type\DateTimePickerType', array(
                'label' => 'label.vencimiento',
            ))
            ->add('tipo',ChoiceType::class, array(
                'choices' => array(
                    'Importe' => 1,
                    'Porcentaje' => 2,
                    'Rango Importe' => 3,
                    'Rango Porc' => 4,
                )))
        ;

    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'RBSoft\CartBundle\Entity\Cupon'
        ));
    }


    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'appbundle_cupon';
    }
}
