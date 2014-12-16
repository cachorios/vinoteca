<?php
namespace AppBundle\EventListener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Symfony\Component\DependencyInjection\ContainerInterface;
use AppBundle\Entity\Producto;
use RBSoft\UtilidadBundle\Libs\Util;

class ProductoListener
{
    private $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function preUpdate(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        $em = $args->getEntityManager();

        if ($entity instanceof Producto) {
            $entity->setUpdatedAt( new \DateTime());

            $em->getUnitOfWork()->recomputeSingleEntityChangeSet($em->getClassMetadata(get_class($entity)), $entity);
        }
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        if ($entity instanceof Producto) {
            $entity->setUpdatedAt( new \DateTime());
            $entity->setCreatedAt( new \DateTime());
            $entity->setSlug(Util::getSlug($entity->getNombre()));
            $entity->setCodigo(111);
        }
    }

}