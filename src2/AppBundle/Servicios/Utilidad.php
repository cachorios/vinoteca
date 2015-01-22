<?php
namespace AppBundle\Servicios;


use AppBundle\Entity\Categoria;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\DependencyInjection\Container;

class Utilidad
{

    private $container;


    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function getCategoriaForBreadCrum(Categoria $categoria)
    {
        $this->catBreadCrum = array();

        if($categoria){
            $this->catBreadCrum[] = $categoria;
            while ($categoria->getParent()) {
                $categoria = $categoria->getParent();
                $this->catBreadCrum[] = $categoria;
            }
        }

        return $this->catBreadCrum;
    }

}