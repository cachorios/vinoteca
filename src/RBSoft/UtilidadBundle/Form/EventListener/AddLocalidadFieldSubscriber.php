<?php
/**
 * Created by PhpStorm.
 * User: beto
 * Date: 05/03/2015
 * Time: 11:37
 */

namespace RBSoft\UtilidadBundle\Form\EventListener;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Doctrine\ORM\EntityRepository;
use RBSoft\UtilidadBundle\Entity\Provincia;
use RBSoft\UtilidadBundle\Entity\Localidad;

class AddLocalidadFieldSubscriber implements EventSubscriberInterface{

    private $propertyPathToLocalidad;
    public function __construct($propertyPathToLocalidad)
    {
        $this->propertyPathToLocalidad = $propertyPathToLocalidad;
    }
    public static function getSubscribedEvents()
    {
        return array(
            FormEvents::POST_SET_DATA => 'preSetData',
            FormEvents::PRE_SUBMIT => 'preSubmit'
        );
    }
    private function addPaisForm($form, $localidad_id)
    {
        $formOptions = array(
            'class' => 'UtilidadBundle:Localidad',
            'placeholder' => 'Selecciona una Localidad',
            'label' => 'Localidad',
            'attr' => array(
                'class' => 'localidad_selector',
            ),
            'query_builder' => function (EntityRepository $repository) use ($localidad_id) {
                $qb = $repository->createQueryBuilder('localidad')
                    ->innerJoin('localidad.provincia', 'provincia')
                    ->where('provincia.id = :provincia')
                    ->setParameter('provincia', $localidad_id)
                ;
                return $qb;
            }
        );
        $form->add($this->propertyPathToLocalidad, EntityType::class, $formOptions);
    }
    public function preSetData(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();
        if (null === $data) {
            return;
        }
        $accessor = PropertyAccess::createPropertyAccessor();
        $localidad = $accessor->getValue($data, $this->propertyPathToLocalidad);
        $provincia_id = ($localidad) ? $localidad->getProvincia()->getId() : null;
        $this->addPaisForm($form, $provincia_id);
    }
    public function preSubmit(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();
        $provincia_id = array_key_exists('provincia', $data) ? $data['provincia'] : null;
        $this->addPaisForm($form, $provincia_id);
    }
}