<?php
namespace AppBundle\EventListener;


use Doctrine\ORM\Event\LifecycleEventArgs;
use Symfony\Component\DependencyInjection\ContainerInterface;
use AppBundle\Entity\Categoria;

class CategoriaListener
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

        if ($entity instanceof Categoria) {
            //se agrega esta comprobacion para no perder el nombre de la imagen
            $old = $em->getUnitOfWork()->getEntityChangeSet($entity);
            if (null == $entity->getImagen() ) {
                $entity->setImagen($old['imagen'][0]);
            }

            $entity->setLevel($this->getLevel($entity));
            $entity->setRoot($this->getRoot($entity));
            $entity->setUpdatedAt( new \DateTime());
            if(is_null($entity->getOrden())){
                $entity->setOrden(0);
            }

            $em->getUnitOfWork()->recomputeSingleEntityChangeSet($em->getClassMetadata(get_class($entity)), $entity);
        }
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        if ($entity instanceof Categoria) {
            $entity->setUpdatedAt( new \DateTime());
            $entity->setLevel($this->getLevel($entity));
            $entity->setRoot(0);
            if(is_null($entity->getOrden())){
                $entity->setOrden(0);
            }
        }
    }

    public function postPersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        $entityManager = $args->getEntityManager();

        // tal vez sólo quieres actuar en alguna entidad "Categoria"
        if ($entity instanceof Categoria) {
            if ($entity->getRoot() == 0 ){
                $entity->setRoot($this->getRoot($entity));
                $entityManager->persist($entity);
                $entityManager->flush();
            }

            $this->resetCacheMenu();
        }
    }

    public function postUpdate(LifecycleEventArgs $args){
        $entity = $args->getEntity();
        if ($entity instanceof Categoria) {
            $this->resetCacheMenu();
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

    private function resetCacheMenu()
    {
        $dir = $this->container->get('kernel')->getCacheDir();
        $file = $dir . DIRECTORY_SEPARATOR . 'RBSoft'.DIRECTORY_SEPARATOR.  'menu.html';

         if (file_exists($file)) {
            unlink($file);
        }
    }
}