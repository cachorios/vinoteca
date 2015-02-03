<?php
/**
 * Created by PhpStorm.
 * User: beto
 * Date: 29/01/2015
 * Time: 13:13
 */

namespace RBSoft\UsuarioBundle\Doctrine;

use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Events;

class UsuarioSubscriber {

    protected $userCallable;

    public function __construct(callable $userCallable)
    {
        $this->userCallable = $userCallable;
    }

    /**
     * @param LifecycleEventArgs $args
     */
    public function prePersist(LifecycleEventArgs $args)
    {
        $object = $args->getEntity();
        if ($object instanceof UserAware) {
            $user = $this->getLoggedUser();
            $object->setUser($user);
        }
    }

    private function getLoggedUser()
    {
        $callable = $this->userCallable;
        $user = $callable();

        return $user;
    }

    public function getSubscribedEvents()
    {
        return array(
            Events::prePersist,
        );
    }
}