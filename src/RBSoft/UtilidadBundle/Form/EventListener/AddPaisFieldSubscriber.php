<?php
/**
 * Created by PhpStorm.
 * User: beto
 * Date: 05/03/2015
 * Time: 11:13
 */

namespace RBSoft\UtilidadBundle\Form\EventListener;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Doctrine\ORM\EntityRepository;

class AddPaisFieldSubscriber implements EventSubscriberInterface
{

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

    private function addPaisForm($form, $pais = null)
    {
        $formOptions = array(
            'class' => 'UtilidadBundle:Pais',
            'mapped' => false,
            'label' => 'País',
            'placeholder' => 'Selecciona un País',
            'attr' => array(
                'class' => 'pais_selector',
            ),
            'query_builder' => function (EntityRepository $repository) {
                $qb = $repository->createQueryBuilder('pais')
                ;
                return $qb;
            }
        );
        if ($pais) {
            $formOptions['data'] = $pais;
        }
        $form->add('pais', EntityType::class, $formOptions);
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
        $pais = ($localidad) ? $localidad->getProvincia()->getPais() : null;
        $this->addPaisForm($form, $pais);
    }

    public function preSubmit(FormEvent $event)
    {
        $form = $event->getForm();
        $this->addPaisForm($form);
    }
}