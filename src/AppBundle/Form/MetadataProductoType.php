<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\OptionsResolver\OptionsResolver;

class MetadataProductoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('orden',null , array(
            ))
            ->add('listaValores', 'textarea', array(
                'required' => false,
                'attr' => array('class' => 'lista-textarea')

            ))
            ->add('predeterminado', 'textarea', array(
                'required' => false
            ))
            ->add('requerido',null , array(
                'required' => false
            ))

            ->add('filtrable', 'metadato_filter', array(
            ))

            ->add('widget', 'widget_filter', array(
                'attr' => array('class' => 'select-customwidget'),
                'required' => true
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class' => 'AppBundle\Entity\MetadatoProducto',
            )
        );
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'appbundle_metadato_producto';
    }
}
