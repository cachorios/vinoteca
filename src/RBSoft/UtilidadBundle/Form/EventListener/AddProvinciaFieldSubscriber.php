<?php
/**
 * Created by PhpStorm.
 * User: beto
 * Date: 05/03/2015
 * Time: 11:29
 */

namespace RBSoft\UtilidadBundle\Form\EventListener;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Doctrine\ORM\EntityRepository;
use RBSoft\UtilidadBundle\Entity\Pais;

class AddProvinciaFieldSubscriber implements EventSubscriberInterface{

    private $propertyPathToLocalidad;
    public function __construct($propertyPathToLocalidad)
    {
        $this->propertyPathToLocalidad = $propertyPathToLocalidad;
    }
    public static function getSubscribedEvents()
    {
        return array(
            FormEvents::PRE_SET_DATA => 'preSetData',
            FormEvents::PRE_SUBMIT => 'preSubmit'
        );
    }
    private function addProvinciaForm($form, $pais_id, $provincia = null)
    {
        $formOptions = array(
            'class' => 'UtilidadBundle:Provincia',
            'empty_value' => 'Seleccionar una provincia',
            'label' => 'Provincia',
            'mapped' => false,
            'attr' => array(
                'class' => 'Provincia_selector',
            ),
            'query_builder' => function (EntityRepository $repository) use ($pais_id) {
                $qb = $repository->createQueryBuilder('provincia')
                    ->innerJoin('provincia.pais', 'pais')
                    ->where('pais.id = :pais')
                    ->setParameter('pais', $pais_id)
                ;
                return $qb;
            }
        );
        if ($provincia) {
            $formOptions['data'] = $provincia;
        }
        $form->add('provincia','entity', $formOptions);
    }
    public function preSetData(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();
        if (null === $data) {
            return;
        }
        $accessor = PropertyAccess::getPropertyAccessor();
        $localidad = $accessor->getValue($data, $this->propertyPathToLocalidad);
        $provincia = ($localidad) ? $localidad->getProvincia() : null;
        $pais_id = ($provincia) ? $provincia->getPais()->getId() : null;
        $this->addProvinciaForm($form, $pais_id, $provincia);
    }
    public function preSubmit(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();
        $pais_id = array_key_exists('pais', $data) ? $data['pais'] : null;
        $this->addProvinciaForm($form, $pais_id);
    }
}