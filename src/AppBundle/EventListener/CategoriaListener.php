<?php
namespace AppBundle\EventListener;


use Doctrine\ORM\Event\LifecycleEventArgs;
use Symfony\Component\DependencyInjection\ContainerInterface;
use AppBundle\Entity\Categoria;

class CategoriaListener
{
    public function __construct()
    {
    }

    public function preUpdate(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        $em = $args->getEntityManager();

        if ($entity instanceof Category) {
            $entity->setLevel($this->getLevel($entity));
            $entity->setRoot($this->getRoot($entity));
            $em->getUnitOfWork()->recomputeSingleEntityChangeSet($em->getClassMetadata(get_class($entity)), $entity);
        }
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        if ($entity instanceof Categoria) {
            $entity->setLevel($this->getLevel($entity));
            $entity->setRoot($this->getRoot($entity));
        }
    }

    private function getLevel(Categoria $entity)
    {
        return $entity->getParent() == null ? 0 : $entity->getParent()->getLevel() + 1;
    }

    private function getRoot(Categoria $entity)
    {
        return $entity->getParent() == null ? $entity->getId() : $entity->getParent()->getRoot();
    }

}