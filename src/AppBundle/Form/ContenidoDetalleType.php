<?php

namespace AppBundle\Form;

use AppBundle\Entity\Contenido;
use RBSoft\UtilidadBundle\Form\DataTransformer\FileToStringTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;




class ContenidoDetalleType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add("orden", HiddenType::class ,array("attr" => array('class'=>'orden')))
            ->add('imagen', FileType::class, array(
                'attr' =>array("class" => "fileimg"),
                'required' => false,
                'multiple' => false
            ))
            ->add('link', TextType::class, array(
                'required' => false,
            ))
        ;
        $builder->get("imagen")->addModelTransformer(new FileToStringTransformer());
    }
    

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
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


    public function getBlockPrefix()
    {
        return 'appbundle_contenidoDetalle';
    }
}
