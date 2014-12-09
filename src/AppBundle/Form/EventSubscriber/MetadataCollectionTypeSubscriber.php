<?php

namespace AppBundle\Form\EventSubscriber\EventListener;

use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

use Doctrine\Common\Collections\Collection;

class MetadataCollectionTypeSubscriber implements EventSubscriberInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return array(
            FormEvents::POST_SUBMIT => 'postSubmit',
            FormEvents::PRE_SUBMIT  => 'preSubmit'
        );
    }

    /**
     * Removes empty collection elements.
     *
     * @param FormEvent $event
     */
    public function postSubmit(FormEvent $event)
    {
        /** @var Collection $items */
        $items = $event->getData();

        if (!$items || !$items instanceof Collection) {
            return;
        }


//        ld($items);

    }

    /**
     * Remove empty items to prevent validation.
     *
     * @param FormEvent $event
     */
    public function preSubmit(FormEvent $event)
    {
        $items = $event->getData();

        if (!$items || !is_array($items)) {
            return;
        }


        $event->setData($items);
    }


    /**
     * Check if array is empty
     *
     * @param array $array
     * @return bool
     */
    protected function isArrayEmpty($array)
    {
        foreach ($array as $val) {
            if (is_array($val)) {
                if (!$this->isArrayEmpty($val)) {
                    return false;
                }
            } elseif (!empty($val)) {
                return false;
            }
        }
        return true;
    }
}
