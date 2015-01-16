<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Configuracion: Esta tabla tendra un solo registro.
 *
 * @ORM\Table()
 * @ORM\Entity
 */

class Configuracion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var double
     * El valor 0 (cero) indica que no hay descuento
     *
     * @ORM\Column(name="descuento_global", type="decimal")
     */
    private $descuentoGlobal;

    /**
     * @var string
     * lista separada con coma (",") de las cantidades de paginas para el select, ej 2,3,4
     *
     * @ORM\Column(name="productos_por_pagina", type="string")
     */
    private $productosPorPagina;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }



    /**
     * Set descuentoGlobal
     *
     * @param string $descuentoGlobal
     * @return Configuracion
     */
    public function setDescuentoGlobal($descuentoGlobal)
    {
        $this->descuentoGlobal = $descuentoGlobal;

        return $this;
    }

    /**
     * Get descuentoGlobal
     *
     * @return string 
     */
    public function getDescuentoGlobal()
    {
        return $this->descuentoGlobal;
    }

    /**
     * Set productosPorPagina
     *
     * @param string $productosPorPagina
     * @return Configuracion
     */
    public function setProductosPorPagina($productosPorPagina)
    {
        $this->productosPorPagina = $productosPorPagina;

        return $this;
    }

    /**
     * Get productosPorPagina
     *
     * @return string 
     */
    public function getProductosPorPagina()
    {
        return $this->productosPorPagina;
    }
}
