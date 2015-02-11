<?php
/**
 * Created by PhpStorm.
 * User: beto
 * Date: 12/01/2015
 * Time: 10:35
 */
namespace AppBundle\Twig\Extension;


use AppBundle\Entity\Categoria;

class CategoriaExtension  extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('categoria_breadcrumd', array($this, 'breadcrumdFilter')),
        );
    }
    public function breadcrumdFilter($categoria)
    {
        if ($categoria instanceof Categoria) {
//            return $this->em->getRepository("AppBundle:Categoria")->getStrAscentendeCategoria($categoria, ' / ');
            return $categoria->getStrAscentendeCategoria();
        }
        return null;
    }

    public function getName()
    {
        return 'categoria_extension';
    }
} 