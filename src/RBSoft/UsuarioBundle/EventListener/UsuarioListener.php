<?php
namespace RBSoft\UsuarioBundle\EventListener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use RBSoft\UsuarioBundle\Entity\SecureControl;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class UsuarioListener
{
    protected $tokenStorage;

    public function __construct(TokenStorageInterface $tokenStorage)
    {
        $this->tokenStorage = $tokenStorage;
    }

    public function preUpdate(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        $em = $args->getEntityManager();

        if ($entity instanceof SecureControl) {
            $entity->setUsuario($this->tokenStorage->getToken()->getUser());
            $em->getUnitOfWork()->recomputeSingleEntityChangeSet($em->getClassMetadata(get_class($entity)), $entity);
        }
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        if ($entity instanceof SecureControl) {
            $entity->setUsuario($this->tokenStorage->getToken()->getUser());
        }
    }
}