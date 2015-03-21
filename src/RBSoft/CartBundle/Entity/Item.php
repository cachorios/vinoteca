<?php

namespace RBSoft\CartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Item
 *
 * 
 * @ORM\Entity(repositoryClass="RBSoft\CartBundle\Entity\ItemRepository")
 */
class Item
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
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="cantidad")
     */
    private $cantidad;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="nroLinea")
     */
    private $nroLinea;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="producto")
     */
    private $producto;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="precioSinIva")
     */
    private $precioSinIva;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="precioConIva")
     */
    private $precioConIva;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=true, name="createdAt")
     * @Gedmo\Timestampable(on="create")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=true, name="updatedAt")
     * @Gedmo\Timestampable
     */
    private $updatedAt;

    /** 
     * @ORM\ManyToOne(targetEntity="RBSoft\CartBundle\Entity\Orden")
     * @ORM\JoinColumn(name="orden_id", referencedColumnName="id") */
    private $orden;


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
     * Set cantidad
     *
     * @param integer $cantidad
     * @return Item
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
     * Set nroLinea
     *
     * @param integer $nroLinea
     * @return Item
     */
    public function setNroLinea($nroLinea)
    {
        $this->nroLinea = $nroLinea;

        return $this;
    }

    /**
     * Get nroLinea
     *
     * @return integer 
     */
    public function getNroLinea()
    {
        return $this->nroLinea;
    }

    /**
     * Set producto
     *
     * @param integer $producto
     * @return Item
     */
    public function setProducto($producto)
    {
        $this->producto = $producto;

        return $this;
    }

    /**
     * Get producto
     *
     * @return integer 
     */
    public function getProducto()
    {
        return $this->producto;
    }

    /**
     * Set precioSinIva
     *
     * @param string $precioSinIva
     * @return Item
     */
    public function setPrecioSinIva($precioSinIva)
    {
        $this->precioSinIva = $precioSinIva;

        return $this;
    }

    /**
     * Get precioSinIva
     *
     * @return string 
     */
    public function getPrecioSinIva()
    {
        return $this->precioSinIva;
    }

    /**
     * Set precioConIva
     *
     * @param string $precioConIva
     * @return Item
     */
    public function setPrecioConIva($precioConIva)
    {
        $this->precioConIva = $precioConIva;

        return $this;
    }

    /**
     * Get precioConIva
     *
     * @return string 
     */
    public function getPrecioConIva()
    {
        return $this->precioConIva;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Item
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Item
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     * @return Item
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return integer 
     */
    public function getOrden()
    {
        return $this->orden;
    }
}
