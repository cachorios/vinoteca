<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use Symfony\Component\Validator\Constraints as Assert;
use RBSoft\UtilidadBundle\Validator\Constraints as UtilidadAssert;

/**
 * ReposicionItem
 *
 * @ORM\Table(name="reposicion_item")
 * @ORM\Entity
 */
class ReposicionItem
{
    /**
     * @var integer
     *
     * @ORM\Column(type="integer", name="id")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Reposicion", inversedBy="items")
     * @ORM\JoinColumn(name="reposicion_id", referencedColumnName="id")
     */
    private $reposicion;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="cantidad")
     * @UtilidadAssert\NumericoMinimo(
     *      min = 1,
     *      minMessage = "Debe especificar al menos un item",
     * )
     */
    private $cantidad;

    /**
     * @ORM\Column(type="decimal", nullable=true, name="precio_unitario", scale=2)
     * @Assert\Type(type="decimal")
     */
    private $precioUnitario;

    /**
     * @var Producto
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Producto")
     * @ORM\JoinColumn(name="producto_id", referencedColumnName="id")
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
     * @return ReposicionItem
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
     * Set reposicion
     *
     * @param \AppBundle\Entity\Reposicion $reposicion
     * @return ReposicionItem
     */
    public function setReposicion(\AppBundle\Entity\Reposicion $reposicion = null)
    {
        $this->reposicion = $reposicion;

        return $this;
    }

    /**
     * Get reposicion
     *
     * @return \AppBundle\Entity\Reposicion
     */
    public function getReposicion()
    {
        return $this->reposicion;
    }

    /**
     * Set producto
     *
     * @param \AppBundle\Entity\Producto $producto
     * @return ReposicionItem
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
