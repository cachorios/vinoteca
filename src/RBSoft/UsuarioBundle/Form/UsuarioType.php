<?php

namespace RBSoft\UsuarioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class UsuarioType extends AbstractType
{

    private $profile;

    public function __construct($profile = false)
    {
        $this->profile = $profile;
    }

        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('imagen',null, array(
                    'label' => 'Foto',
                    'required' => false,

                ))
            ->add('login')
            ->add('activo')
            ->add('email','email')
            ->add('nombre')
            ->add('telefono')
            ->add('celular')
            ->add('facebook')
            ->add('twitter')

        ;
        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) {
                $form = $event->getForm();
                $data = $event->getData();

                $id = $data->getId();
                if (is_null($id)) {
                    $form
                        ->add('password', 'repeated', array(
                            'type' => 'password',
                            'invalid_message' => 'Los campos de contraseña deben coincidir.',
                            'options' => array('attr' => array('class' => 'password-field')),
                            'required' => true,
                            'first_options'  => array('label' => 'Contraseña'),
                            'second_options' => array('label' => 'Confirma la Contraseña'),
                        ));
                }else{
                    $form
                        ->add('password', 'repeated', array(
                            'type' => 'password',
                            'invalid_message' => 'Los campos de contraseña deben coincidir.',
                            'options' => array('attr' => array('class' => 'password-field')),
                            'required' => false,
                            'first_options'  => array('label' => 'Contraseña', 'help' => 'Dejar en blanco este campo para no resetear la contraseña',),
                            'second_options' => array('label' => 'Confirma la Contraseña','help' => 'Repita la contraseña ingresada'),
                        ))
                    ->remove('login');
                    if ($this->profile == true){
                        $form->remove('activo');
                    }
                }
            }
        );

    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'RBSoft\UsuarioBundle\Entity\Usuario'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'rbsoft_usuariobundle_usuario';
    }
}
