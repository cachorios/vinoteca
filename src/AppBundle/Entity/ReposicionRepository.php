<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ReposicionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ReposicionRepository extends EntityRepository
{
    public function ListAll()
    {
        $qb = $this->createQueryBuilder("c");
        return $qb;

    }
}