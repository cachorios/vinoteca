<?php

namespace RBSoft\CartBundle\Repository;

/**
 * CuponRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CuponRepository extends \Doctrine\ORM\EntityRepository
{
    public function ListAll()
    {
        $qb = $this->createQueryBuilder("q")->orderBy('q.createdAt', 'ASC');
        return $qb;

    }
}
