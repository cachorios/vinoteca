<?php

namespace AppBundle\Manager;

use AppBundle\Entity\Reposicion;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class ReposicionManager
{
    /** @var EntityManager */
    protected $em;

    protected $tokenStorage;

    protected $requestStack;

    public function __construct(
        EntityManager $em,
        TokenStorageInterface $tokenStorage,
        RequestStack $requestStack
    )
    {
        $this->em = $em;
        $this->tokenStorage = $tokenStorage;
        $this->requestStack = $requestStack;
    }

    public function getList()
    {
        $queryBuilder = $this->em->getRepository('AppBundle:Reposicion')->ListAll();
        return $queryBuilder;
    }

    public function procesarStock(Reposicion $reposicion)
    {
        foreach ($reposicion->getItems() as $item) {
            $producto = $item->getProducto();
            $stock = $producto->getStock();
            $producto->setStock($stock + $item->getCantidad());
            $producto->setCosto($item->getPrecioUnitario());
            $this->em->persist($producto);
        }
        $this->em->flush();
        return;
    }

}
