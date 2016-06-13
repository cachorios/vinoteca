<?php
/**
 * Created by PhpStorm.
 * User: beto
 * Date: 06/04/2015
 * Time: 5:25
 */

namespace RBSoft\UsuarioBundle\Form\Type;

use FOS\UserBundle\Util\LegacyFormHelper;
use RBSoft\UtilidadBundle\Form\DataTransformer\FileToStringTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
//        parent::buildForm($builder, $options);

        $builder
            ->add('username', null, array('label' => 'form.username', 'translation_domain' => 'FOSUserBundle'))
            ->add('email', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\EmailType'), array('label' => 'form.email', 'translation_domain' => 'FOSUserBundle'))
            ->add("nombre")
            ->add("telefono")
            ->add("movil", null, array("label" => "Teléfono Móvil"))
            ->add('foto', FileType::class, array(
                'attr' =>array("class" => "fileimg"),
                'required' => false,
                'multiple' => false
            ));

        $builder->get("foto")->addModelTransformer(new FileToStringTransformer());

    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }


    public function getBlockPrefix()
    {
        return 'usuario_registration';
    }

    public function getName()
    {
        return $this->getBlockPrefix();
    }

}