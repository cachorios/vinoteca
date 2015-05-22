<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 21/05/2015
 * Time: 22:26
 */

namespace AppBundle\EventListener;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class AddDefaultRoleListener implements EventSubscriberInterface
{

    public static function getSubscribedEvents()
    {
        return array(
            FOSUserEvents::REGISTRATION_SUCCESS => 'onRegistrationSuccess',
        );
    }


    public function onRegistrationSuccess(FormEvent $event)
    {
        $rolesArr = array('ROLE_USER', 'ROLE_CLIENTE');

        /** @var $user \FOS\UserBundle\Model\UserInterface */
        $user = $event->getForm()->getData();
        $user->setRoles($rolesArr);
    }
}