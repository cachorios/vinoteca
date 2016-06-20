<?php

namespace RBSoft\CartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrdenDetalle
 *
 * @ORM\Table(name="orden_detalle")
 * @ORM\Entity(repositoryClass="RBSoft\CartBundle\Repository\OrdenDetalleRepository")
 */
class OrdenDetalle
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var Orden
     *
     * @ORM\ManyToOne(targetEntity="Orden",inversedBy="detalle")
     */
    private $orden;

    /**
     * @var int
     *
     * @ORM\Column(name="producto", type="integer")
     */
    private $producto;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidad", type="integer")
     */
    private $cantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="precio", type="decimal", precision=12, scale=2)
     */
    private $precio;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    

    /**
     * Set producto
     *
     * @param integer $producto
     *
     * @return OrdenDetalle
     */
    public function setProducto($producto)
    {
        $this->producto = $producto;

        return $this;
    }

    /**
     * Get producto
     *
     * @return int
     */
    public function getProducto()
    {
        return $this->producto;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return OrdenDetalle
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return int
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set precio
     *
     * @param string $precio
     *
     * @return OrdenDetalle
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return string
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set orden
     *
     * @param \RBSoft\CartBundle\Entity\Orden $orden
     *
     * @return OrdenDetalle
     */
    public function setOrden(\RBSoft\CartBundle\Entity\Orden $orden = null)
    {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return \RBSoft\CartBundle\Entity\Orden
     */
    public function getOrden()
    {
        return $this->orden;
    }
}
