<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * CompraItem
 *
 * @ORM\Table(name="compra_item")
 * @ORM\Entity
 */
class CompraItem
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
     * @ORM\ManyToOne(targetEntity="Compra", inversedBy="items")
     * @ORM\JoinColumn(name="compra_id", referencedColumnName="id")
     */
    private $compra;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad", type="integer")
     */
    private $cantidad = 0;

    /**
     *
     * @ORM\Column(name="precio_unitario", type="decimal", scale=2)
     */
    private $precioUnitario;

    /**
     * @var Producto
     * @ORM\ManyToOne(targetEntity="Producto")
     */
    private $producto;

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
     * Get PrecioUnitario
     *
     * @return integer
     */
    public function getPrecioUnitario()
    {
        return $this->precioUnitario;
    }

    /**
     * Set PrecioUnitario
     *
     * @param integer
     * @return PrecioUnitario
     */
    public function setPrecioUnitario($precio_unitario)
    {
        $this->precioUnitario = $precio_unitario;
        return $this;
    }


    /**
     * Set cantidad
     *
     * @param integer $cantidad
     * @return CompraItem
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set compra
     *
     * @param \AppBundle\Entity\Compra $compra
     * @return CompraItem
     */
    public function setCompra(\AppBundle\Entity\Compra $compra = null)
    {
        $this->compra = $compra;

        return $this;
    }

    /**
     * Get compra
     *
     * @return \AppBundle\Entity\Compra
     */
    public function getCompra()
    {
        return $this->compra;
    }

    /**
     * Set producto
     *
     * @param \AppBundle\Entity\Producto $producto
     * @return CompraItem
     */
    public function setProducto(\AppBundle\Entity\Producto $producto = null)
    {
        $this->producto = $producto;

        return $this;
    }

    /**
     * Get producto
     *
     * @return \AppBundle\Entity\Producto
     */
    public function getProducto()
    {
        return $this->producto;
    }
}
