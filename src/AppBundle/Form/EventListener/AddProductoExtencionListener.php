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
//            FormEvents::PRE_SUBMIT => 'preBind',
            FormEvents::PRE_SET_DATA => 'preSetData',
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
            return;
        }


//        ld($data);
//        ld($data->getCategoria()->getMetadatos()->count());

    }

    public function preBind(FormEvent $event)
    {

    }
}