<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping\UniqueConstraint;

/**
 * Compra
 *
 * @ORM\Table(name="compra",
 *      uniqueConstraints = {
 *          @ORM\UniqueConstraint(name="_factura_numero_cuit", columns={"factura_numero", "cuit"})
 *      })
 *
 * @ORM\Entity(repositoryClass="AppBundle\Entity\CompraRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Compra
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
     * @var string
     *
     * @ORM\Column(name="factura_numero", type="string", length=50)
     */
    private $facturaNumero;

    /**
     * @var string
     *
     * @ORM\Column(name="cuit", type="string", length=11)
     */
    private $cuit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_compra", type="datetime")
     */
    private $fechaCompra;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_alta", type="datetime")
     */
    private $fechaAlta;

    /**
     * @ORM\OneToMany(targetEntity="CompraItem", mappedBy="compra", cascade={"persist", "remove"}, orphanRemoval=true)
     */
    private $items;

    public function __toString()
    {
        return $this->getFacturaNumero();
    }

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
     * Set facturaNumero
     *
     * @param string $facturaNumero
     * @return Compra
     */
    public function setFacturaNumero($facturaNumero)
    {
        $this->facturaNumero = $facturaNumero;

        return $this;
    }

    /**
     * Get facturaNumero
     *
     * @return string 
     */
    public function getFacturaNumero()
    {
        return $this->facturaNumero;
    }

    /**
     * Set fechaCompra
     *
     * @param \DateTime $fechaCompra
     * @return Compra
     */
    public function setFechaCompra($fechaCompra)
    {
        $this->fechaCompra = $fechaCompra;

        return $this;
    }

    /**
     * Get fechaCompra
     *
     * @return \DateTime 
     */
    public function getFechaCompra()
    {
        return $this->fechaCompra;
    }

    /**
     * Set fechaAlta
     *
     * @param \DateTime $fechaAlta
     * @return Compra
     */
    public function setFechaAlta($fechaAlta)
    {
        $this->fechaAlta = $fechaAlta;

        return $this;
    }

    /**
     * Get fechaAlta
     *
     * @return \DateTime 
     */
    public function getFechaAlta()
    {
        return $this->fechaAlta;
    }

    /**
     * Set cuit
     *
     * @param string $cuit
     * @return Compra
     */
    public function setCuit($cuit)
    {
        $this->cuit = $cuit;

        return $this;
    }

    /**
     * Get cuit
     *
     * @return string 
     */
    public function getCuit()
    {
        return $this->cuit;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->items = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add items
     *
     * @param \AppBundle\Entity\CompraItem $items
     * @return Compra
     */
    public function addItem(\AppBundle\Entity\CompraItem $items)
    {
        $this->items[] = $items;

        return $this;
    }

    /**
     * Remove items
     *
     * @param \AppBundle\Entity\CompraItem $items
     */
    public function removeItem(\AppBundle\Entity\CompraItem $items)
    {
        $this->items->removeElement($items);
    }

    /**
     * Get items
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @ORM\PrePersist()
     */
    public function PrePersist()
    {
        $this->setFechaAlta( new \DateTime('now', new \DateTimeZone('UTC')));
    }
}