<?php
/**
 * Created by PhpStorm.
 * User: beto
 * Date: 10/12/2014
 * Time: 23:16
 */

namespace AppBundle\Form\EventListener;

use Symfony\Component\Form\FormFactoryInterface;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use RBSoft\UtilidadBundle\Libs\Util;
use AppBundle\Model\DefinicionMetadatoWidget;
use Symfony\Component\Validator\Constraints\NotBlank;

class AddProductoExtencionListener implements EventSubscriberInterface
{
    /**
     * @var FormFactoryInterface
     */
    private $factory;

    /**
     * @var EntityManager
     */
    private $em;

    /**
     * @param factory FormFactoryInterface
     */
    public function __construct(FormFactoryInterface $factory, EntityManager $em)
    {
        $this->factory = $factory;
        $this->em = $em;
    }

    public static function getSubscribedEvents()
    {
        return array(
            FormEvents::POST_SUBMIT => 'postSubmit',
            FormEvents::PRE_SET_DATA => 'preSetData',
//            FormEvents::SUBMIT => 'submit',

        );
    }


    public function preSetData(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();

        // check if the product object is "new"
        // If you didn't pass any data to the form, the data is "null".
        // This should be considered a new "Product"
        if (null === $data) {
            return;
        }

        if (null == $data->getCategoria()) {
            $categoria = $this->em->getRepository('AppBundle:Categoria')->find(93);

//            return;
        }else{
            $categoria = $data->getCategoria();
        }

        $metadatos = $categoria->getMetadatos();
        foreach ($metadatos as $metadato) {
            $requerido = is_bool($metadato->getRequerido()) ? $metadato->getRequerido() : false;

            $form->add($this->factory->createNamed(Util::getSlug($metadato->getNombre()), DefinicionMetadatoWidget::getTipo($metadato->getWidget()), null, array(
                'label' => $metadato->getNombre(),
                'mapped' => false,
                'auto_initialize' => false,
                'required' => $requerido,
                'constraints' => $requerido ? array(new NotBlank()): array()
            )));
        }

        $extencions = $data->getExtencion();
//        foreach ($extencions as $extencion) {
//            foreach ($metadatos as $metadato) {
//
//            }
//
////            ld($extencion->getValor());
//        }

    }

    public function postSubmit(FormEvent $event)
    {
        $form        = $event->getForm();
        $data        = $event->getData();

        if (!$form->isValid()) {
            return;
        }

        $categoria = $data->getCategoria();

        $metadatos = $categoria->getMetadatos();
        foreach ($metadatos as $metadato) {
            $data->addExtencionValue($metadato, $form->get(Util::getSlug($metadato->getNombre()))->getData());
        }

    }
}