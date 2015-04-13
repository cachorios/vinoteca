<?php
namespace AppBundle\EventListener;

use AppBundle\Entity\Reposicion;
use Doctrine\ORM\Event\LifecycleEventArgs;
use AppBundle\Entity\Categoria;
use AppBundle\Manager\ReposicionManager;

class ReposicionListener
{
    private $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function postPersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        if ($entity instanceof Reposicion) {
            $this->container->get('reposicion.manager')->procesarStock($entity);
        }

    }
}