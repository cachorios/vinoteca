<?php
namespace RBSoft\UsuarioBundle\EventListener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use RBSoft\UsuarioBundle\Entity\SecureControl;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Validator\Constraints\DateTime;

class UsuarioListener
{
    private $encoder_fact;

    public function __construct($arg_enc)
    {
        $this->encoder_fact = $arg_enc;
    }

    public function preUpdate(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        $em = $args->getEntityManager();

        if ($entity instanceof \RBSoft\UsuarioBundle\Entity\Usuario) {

            $old = $em->getUnitOfWork()->getEntityChangeSet($entity);
            if (array_key_exists("password", $old)) {
                if ($old["password"][1] == null){
                    $entity->setPassword($old["password"][0]);
                }else{
                    $entity->setPassword($this->encoder_fact->getEncoder($entity)->encodePassword($entity->getPassword(), $entity->getSalt()));
                }
            }
            $em->getUnitOfWork()->recomputeSingleEntityChangeSet($em->getClassMetadata(get_class($entity)), $entity);
        }
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        if ($entity instanceof \RBSoft\UsuarioBundle\Entity\Usuario) {
            $salt = md5(time());
            $entity->setSalt($salt);
            $entity->setPassword(
                $this->encoder_fact->getEncoder($entity)
                    ->encodePassword($entity->getPassword(), $entity->getSalt()
                    )
            );
        }
    }
}