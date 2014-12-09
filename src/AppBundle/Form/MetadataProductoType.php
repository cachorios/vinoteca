<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;
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
                'required' => false
            ))
            ->add('predeterminado', 'textarea', array(
                'required' => false
            ))
            ->add('filtrable', 'checkbox', array(
                'label'     => ' ',
                'block_name' => 'metadato_filtrable',
                'required'  => false))
        ;
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
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
    public function getName()
    {
        return 'appbundle_metadato_producto';
    }
}
