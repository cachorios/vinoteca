<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * CompraRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CompraRepository extends EntityRepository
{
    public function ListAll()
    {
        $qb = $this->createQueryBuilder("c");
        return $qb;

    }
}