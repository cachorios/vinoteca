<?php

namespace AppBundle\Form;

use AppBundle\Form\Type\MetadatoFilterType;
use AppBundle\Form\Type\MetadatoWidgetType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
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
            ->add('listaValores', TextareaType::class, array(
                'required' => false,
                'attr' => array('class' => 'lista-textarea')

            ))
            ->add('predeterminado', TextareaType::class, array(
                'required' => false
            ))
            ->add('requerido',null , array(
                'required' => false
            ))

            ->add('filtrable', MetadatoFilterType::class, array(
            ))

            ->add('widget', MetadatoWidgetType::class, array(
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
