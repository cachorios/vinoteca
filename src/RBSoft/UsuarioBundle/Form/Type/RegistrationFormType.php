<?php
/**
 * Created by PhpStorm.
 * User: beto
 * Date: 06/04/2015
 * Time: 5:25
 */

namespace RBSoft\UsuarioBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        // add your custom field
        $builder
//            ->remove('username')
//            ->add('nombre', null, array('label' => 'Nombre y Apellido'))
        ;
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'usuario_registration';
    }
}