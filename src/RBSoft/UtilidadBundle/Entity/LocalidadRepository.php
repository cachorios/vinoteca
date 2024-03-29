<?php

namespace RBSoft\UtilidadBundle\Entity;

use Doctrine\ORM\EntityRepository;

class LocalidadRepository extends EntityRepository
{
    public function findByTerm($term)
    {
        $query = $this->getEntityManager()->createQuery("
            SELECT pais.id as id, pais.name as label
            FROM UtilidadBundle:Pais pais
            WHERE pais.nombre LIKE :term
            ")->setParameter('term', '%' . $term . '%');
        return $query->getArrayResult();
    }

    public function findByProvinciaId($provincia_id)
    {
        $query = $this->getEntityManager()->createQuery("
            SELECT localidad
            FROM UtilidadBundle:Localidad localidad
            LEFT JOIN localidad.provincia provincia
            WHERE provincia.id = :provincia_id
            ")->setParameter('provincia_id', $provincia_id);
        return $query->getArrayResult();
    }
}
