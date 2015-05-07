<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProductoImagenType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('delete', null, array(
                'attr' => array('class' => 'input-delete')
            ))
            ->add('orden', 'hidden', array(
                'property_path' => 'orden',
                'attr' => array('class' => 'input-position')
            ))
            ->add('id', 'hidden', array(
                'property_path' => 'id',
                'attr' => array('class' => 'input-temp-id')
            ))
        ;

    }


    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class' => 'AppBundle\Entity\ProductoImagen',
                'cascade_validation' => true
            )
        );
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_productoimagen';
    }
}
