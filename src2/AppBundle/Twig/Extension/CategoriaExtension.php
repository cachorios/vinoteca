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
    private $em;

    public function __construct($em){
        $this->em = $em;
    }

    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('categoria_breadcrumd', array($this, 'breadcrumdFilter')),
        );
    }
    public function breadcrumdFilter($categoria)
    {
        if ($categoria instanceof Categoria) {
            return $this->em->getRepository("AppBundle:Categoria")->getStrAscentendeCategoria($categoria, ' / ');

        }
        return null;
    }

    public function getName()
    {
        return 'categoria_extension';
    }
} 