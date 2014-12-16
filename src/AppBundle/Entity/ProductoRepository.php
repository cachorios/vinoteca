<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ProductoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductoRepository extends EntityRepository
{
    public function getUltimos()
    {
        $em = $this->getEntityManager();

        $consulta = $em->createQuery('
            SELECT p, c
            FROM AppBundle:Producto p JOIN  p.categoria c
            ORDER BY p.createdAt DESC
        ');

        $consulta->setMaxResults(4);
        $consulta->useResultCache(true, 600);

        return $consulta->getResult();
    }
}
