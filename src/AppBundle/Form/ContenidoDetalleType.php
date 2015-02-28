<?php

namespace AppBundle\Form;

use AppBundle\Entity\Contenido;
use RBSoft\UtilidadBundle\Form\DataTransformer\FileToStringTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Form\Type\MyCollectionType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Translation\Catalogue\OperationInterface;


class ContenidoDetalleType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add("orden","hidden",array("attr" => array('class'=>'orden')))
            ->add('imagen', 'file', array(
                'attr' =>array("class" => "fileimg"),
                'required' => false,
                'multiple' => false
            ))
            ->add('link', 'text', array(
                'required' => false,
            ))
        ;
        $builder->get("imagen")->addModelTransformer(new FileToStringTransformer());
    }
    
    /**
     * @ param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\ContenidoDetalle',
        ));
    }

    /**
     * @param OptionsResolverInterface $resolver
     */

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_contenidoDetalle';
    }
}
