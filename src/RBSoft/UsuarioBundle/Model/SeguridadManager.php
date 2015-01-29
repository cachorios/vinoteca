<?php

namespace MP\SeguridadBundle\Model;

use Doctrine\ORM\EntityManager;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;



class SeguridadManager extends BaseUserManager {

    /**
     *
     * @var EntityManager 
     */
    protected $objectManager;
    protected $class;
    protected $repository;

    public function __construct(EncoderFactoryInterface $encoderFactory, CanonicalizerInterface $usernameCanonicalizer, CanonicalizerInterface $emailCanonicalizer, ObjectManager $om, $class) {
        parent::__construct($encoderFactory, $usernameCanonicalizer, $emailCanonicalizer, $om, $class);
    }

    public function findInternalUserByUserName($username) {
        return $this->objectManager->getRepository("SeguridadBundle:User")->findInternalUser($username);
    }

}