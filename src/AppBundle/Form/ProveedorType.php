<?php

namespace AppBundle\Form;

use RBSoft\UtilidadBundle\Form\EventListener\AddLocalidadFieldSubscriber;
use RBSoft\UtilidadBundle\Form\EventListener\AddPaisFieldSubscriber;
use RBSoft\UtilidadBundle\Form\EventListener\AddProvinciaFieldSubscriber;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProveedorType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $propertyPathToCity = 'localidad';
        $builder
            ->addEventSubscriber(new AddPaisFieldSubscriber($propertyPathToCity))
            ->addEventSubscriber(new AddProvinciaFieldSubscriber($propertyPathToCity))
            ->addEventSubscriber(new AddLocalidadFieldSubscriber($propertyPathToCity))
        ;

        $builder
//            datos generales
//            ->add('codigo',null, array(
//                'attr' => array('style' => 'width: auto')
//
//            ))
            ->add('razon_social',null, array(
                'help' => 'Escriba el nombre del proveedor.',
            ))
            ->add('nombre_fantasia',null, array(
                'help' => 'Escriba el nombre de fantacia.',
            ))
            ->add('cuit',null, array(
                'attr' => array('style' => 'width: auto'),
                'help' => 'Escriba el Cuit del proveedor.',
            ))
//            Direccion
            ->add('domicilio',null, array(
                'help' => 'Escriba su dirección',
            ))
            ->add('codigo_postal',null, array(
                'attr' => array('style' => 'width: auto')
            ))

            ->add('telefono',null, array())
            ->add('email',null, array(
                'label' => 'Correo Electronico',
            ))
//            Datos del Contacto
            ->add('contacto',null, array(
                'help' => 'Nombres de personas de contacto (personal de ventas).',
            ))
            ->add('contacto_telefono',null, array(
                'label' => 'Telefono',
            ))
            ->add('contacto_int',null, array(
                'attr' => array('style' => 'width: auto'),
                'label' => 'Interno',
                'help' => 'Numero interno.',

            ))
            ->add('contacto_fax',null, array(
                'label' => 'Fax',
            ))
            ->add('contacto_movil',null, array(
                'label' => 'Móvil',
                'help' => 'Escriba su teléfono móvil.',
            ))
            ->add('contacto_email',null, array(
                'label' => 'Correo electronico',
                'help' => 'Correo electronico del contacto',
            ))
//            Datos economicos
            ->add('moneda',null, array(
                'attr' => array('style' => 'width: auto')
            ))
            ->add('limite_credito',null, array(
                'attr' => array('style' => 'width: auto')
            ))
            ->add('tipo_pago','forma_pago', array(
                'label' => 'Forma de pago habitual',
                'attr' => array('style' => 'width: auto'),
                'help' => 'Seleccione la forma de pago habitual para el proveedor.',
            ))
            ->add('descuento',null, array(
                'attr' => array('style' => 'width: auto'),
                'help' => 'Indique un descuento en porcentaje sin el símbolo %.',
            ))
            ->add('cond_iva','condicion_iva', array(
                'attr' => array('style' => 'width: auto')
            ))
            ->add('n_cuenta',null, array(
                'label' => 'Nº de Cuenta',
                'help' => 'Escriba el número de cuenta bancaria del proveedor.',
                'attr' => array('style' => 'width: auto')
            ))
//            Otros datos
            ->add('pagina_web',null, array(
                'label' => 'Sitio web',

            ))
            ->add('observacion',null, array())
        ;
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Proveedor'
        ));
    }
    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_proveedor';
    }
}
