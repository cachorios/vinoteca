<?php

namespace AppBundle\Manager;

use AppBundle\Entity\Compra;
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
    )
    {
        $this->em = $em;
        $this->tokenStorage = $tokenStorage;
        $this->requestStack = $requestStack;
    }

    public function getList()
    {
        $queryBuilder = $this->em->getRepository('AppBundle:Compra')->ListAll();
        return $queryBuilder;
    }

    public function procesarStock(Compra $compra)
    {
        foreach ($compra->getItems() as $item) {
            $producto = $item->getProducto();
            $stock = $producto->getStock();
            $producto->setStock($stock + $item->getCantidad());

            if ($item->getPrecio() > 0) {
                $producto->setPrecio($item->getPrecio());
            }
            $this->em->persist($producto);
        }
        $this->em->flush();
        return;
    }

}
