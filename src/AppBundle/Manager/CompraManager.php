<?php

namespace AppBundle\Manager;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class CompraManager
{
    /** @var EntityManager */
    protected $em;

    protected $tokenStorage;

    protected $requestStack;

    public function __construct(
        EntityManager $em,
        TokenStorageInterface $tokenStorage,
        RequestStack $requestStack
    ) {
        $this->em   = $em;
        $this->tokenStorage = $tokenStorage;
        $this->requestStack = $requestStack;
    }

    public function getList()
    {
        $queryBuilder = $this->em->getRepository('AppBundle:Compra')->ListAll();
        return $queryBuilder;
    }

}
