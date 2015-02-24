<?php

namespace AppBundle\Form;

use AppBundle\Entity\Contenido;
use RBSoft\UtilidadBundle\Form\DataTransformer\FileToStringTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Form\Type\MyCollectionType;

class ContenidoCarruselType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('imagen', 'file', array(
                "mapped" => false,
                'required' => false,
                'multiple' => false
            ))
            ->add('link', 'text', array(
                "mapped" => false,
                'required' => false,
            ))
        ;
        $builder->get("imagen")->addModelTransformer(new FileToStringTransformer());
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
//        $resolver->setDefaults(array(
//            'data_class' => 'AppBundle\Entity\Contenido'
//        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_contenidos';
    }
}
