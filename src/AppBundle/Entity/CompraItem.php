<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use Symfony\Component\Validator\Constraints as Assert;
use RBSoft\UtilidadBundle\Validator\Constraints as UtilidadAssert;

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
     * @UtilidadAssert\NumericoMinimo(
     *      min = 1,
     *      minMessage = "Debe especificar al menos un item",
     * )
     */
    private $cantidad;

    /**
     * @ORM\Column(name="precio_unitario", type="decimal", scale=2)
     * @Assert\Regex(
     *   pattern="/^\d+$/",
     *   match=true,
     *   message="no es numero"
     * )
     *
     */
    private $precioUnitario;

    /**
     * @var Producto
     * @ORM\ManyToOne(targetEntity="Producto")
     */
    private $producto;
    
    /**
     * solo para el formulario sin persistir
     */
    private $productoNombre;
    /**
     * solo para el formulario sin persistir
     */
    private $productoCodigo;

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

    /**
     * @return $this
     */
    public function setProductoCodigo($p)
    {
        $this->productoCodigo = $p;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductoCodigo()
    {
        return $this->productoCodigo;
    }
    /**
     * @return $this
     */
    public function setProductoNombre($p)
    {
        $this->productoNombre = $p;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductoNombre()
    {
        return $this->productoNombre;
    }
}
