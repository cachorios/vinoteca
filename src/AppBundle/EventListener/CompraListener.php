<?php
namespace AppBundle\EventListener;

use AppBundle\Entity\Compra;
use Doctrine\ORM\Event\LifecycleEventArgs;
use AppBundle\Entity\Categoria;
use AppBundle\Manager\CompraManager;

class CompraListener
{
    private $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function postPersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        if ($entity instanceof Compra) {
        $this->container->get('compra.manager')->procesarStock($entity);
        }

    }
}