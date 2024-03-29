<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * CategoriaRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategoriaRepository extends EntityRepository
{
    public function ListAll()
    {
        $qb = $this->createQueryBuilder("q")
            ->orderBy('q.root, q.level', 'ASC');
        return $qb;

    }

    public function selectOrdenTree()
    {
        $qb = $this->createQueryBuilder("q")
            ->where('q.level < :level')
            ->orderBy('q.root, q.level', 'ASC')
            ->setParameter('level', 2);
        return $qb;

    }

    public function selectOrdenTreeAll()
    {
        $qb = $this->createQueryBuilder("q")
            ->orderBy('q.root, q.level', 'ASC');
        return $qb;

    }

    public function getBarraMenu()
    {

        return $this->_em->createQuery(
            'SELECT c, ( SELECT max(d.level) FROM AppBundle:Categoria d WHERE d.root = c.id )
             FROM  AppBundle:Categoria c
             WHERE c.level = 0 AND c.activo = 1 AND c.visible = 1
             ORDER BY c.orden'
        )
            ->getResult();
    }

    public function getCategoriaItem($padre)
    {
        return $this->_em->createQuery(
            'SELECT c
             FROM  AppBundle:Categoria c
             WHERE c.parent = :padre AND c.activo = 1 AND c.visible = 1
             ORDER BY c.orden'
        )
            ->setParameter("padre", $padre)
            ->getResult();
    }

    public function tieneHijo($id)
    {
        return $this->_em->createQuery(
            'SELECT count(c.id)
             FROM  AppBundle:Categoria c
             WHERE c.parent = :id
             ORDER BY c.orden'
        )
            ->setParameter("id", $id)
            ->getSingleScalarResult() > 0;
    }


    public function getDescendientes(Categoria $cat)
    {
        $hijos = array();
        if ($cat->getChildren()->count() > 0) {
            foreach ($cat->getChildren() as $childCat) {
                $hijos = array_merge($hijos, $this->getDescendientes($childCat));
            }
        } else {
            $hijos[] = $cat->getId();
        }

        return $hijos;
    }

//    public function getCategoriasAsignables()
//    {
//
//        return $this->_em->createQuery(
//            'SELECT c
//             FROM  AppBundle:Categoria c
//
//             WHERE c.activo = 1 AND c.visible = 1
//             and not EXISTS(SELECT r.id
//              FROM  AppBundle:Categoria r
//              WHERE r.parent = c.id
//
//             )
//             ORDER BY c.orden'
//        )->getQuery()->getDQL();
////            ->getResult();
//
//   }

    public function getCategoriasAsignables()
    {
        $qb = $this->_em->createQueryBuilder();
        $qb2 = $this->_em->createQueryBuilder();

        return $qb->add('select', 'c')
            ->add('from', 'AppBundle:Categoria c')
            ->add('where',
                $qb2->expr()->andx(
                    $qb2->expr()->eq('c.activo', '1'),
                    $qb2->expr()->eq('c.visible ','1'),
                    $qb->expr()->not($qb->expr()->exists(
                        $qb2->add('select', 'r')
                            ->add('from', 'AppBundle:Categoria r')
                            ->add('where', $qb2->expr()->eq('r.parent', ' c.id'))
                    )
                    )
                ));

    }


}
