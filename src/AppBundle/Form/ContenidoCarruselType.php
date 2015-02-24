<?php

namespace AppBundle\Form;

use AppBundle\Entity\Contenido;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContenidoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('ubicacion','choice',array('choices' => Contenido::$UBICACIONES))
            ->add('orden')
            ->add('tipo','choice',array('choices' => Contenido::$TIPO_CONTENIDOS))
            ->add('activo',null,array('required' => false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Contenido'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_contenido';
    }
}
