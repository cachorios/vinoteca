<?php

namespace RBSoft\CartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use RBSoft\UsuarioBundle\Entity\Usuario;

/**
 * Orden
 *
 * @ORM\Table(name="orden")
 * @ORM\Entity(repositoryClass="RBSoft\CartBundle\Repository\OrdenRepository")
 */
class Orden
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
     * @var Usuario
     *
     * @ORM\ManyToOne(targetEntity="\RBSoft\UsuarioBundle\Entity\Usuario")
     */
    private $cliente;

    /**
     * @var OrdenEstado
     *
     * @ORM\ManyToOne(targetEntity="OrdenEstado")
     */
    private $estado;

    /**
     * @var Cupon
     *
     * @ORM\OneToOne(targetEntity="Cupon" , cascade={"persist"} )
     */
    private $cupon;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;

    /**
     * @var Flete
     *
     * @ORM\OneToOne(targetEntity="Flete")
     */
    private $flete;

    /**
     * @var Factura
     *
     * @ORM\OneToOne(targetEntity="Factura")
     */
    private $factura;


    /**
     * @ORM\OneToMany(
     *      targetEntity="OrdenDetalle",
     *      mappedBy="orden",
     *      cascade={"persist", "remove"}
     *  )
     * @ORM\OrderBy({"orden"="ASC"})
     */
    private $detalle;


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
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Orden
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }


    /**
     * Set estado
     *
     * @param \RBSoft\CartBundle\Entity\OrdenEstado $estado
     *
     * @return Orden
     */
    public function setEstado(\RBSoft\CartBundle\Entity\OrdenEstado $estado = null)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return \RBSoft\CartBundle\Entity\OrdenEstado
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set cupon
     *
     * @param \RBSoft\CartBundle\Entity\Cupon $cupon
     *
     * @return Orden
     */
    public function setCupon(\RBSoft\CartBundle\Entity\Cupon $cupon = null)
    {
        $this->cupon = $cupon;

        return $this;
    }

    /**
     * Get cupon
     *
     * @return \RBSoft\CartBundle\Entity\Cupon
     */
    public function getCupon()
    {
        return $this->cupon;
    }

    /**
     * Set flete
     *
     * @param \RBSoft\CartBundle\Entity\Flete $flete
     *
     * @return Orden
     */
    public function setFlete(\RBSoft\CartBundle\Entity\Flete $flete = null)
    {
        $this->flete = $flete;

        return $this;
    }

    /**
     * Get flete
     *
     * @return \RBSoft\CartBundle\Entity\Flete
     */
    public function getFlete()
    {
        return $this->flete;
    }

    /**
     * Set factura
     *
     * @param \RBSoft\CartBundle\Entity\Factura $factura
     *
     * @return Orden
     */
    public function setFactura(\RBSoft\CartBundle\Entity\Factura $factura = null)
    {
        $this->factura = $factura;

        return $this;
    }

    /**
     * Get factura
     *
     * @return \RBSoft\CartBundle\Entity\Factura
     */
    public function getFactura()
    {
        return $this->factura;
    }

    /**
     * Set cliente
     *
     * @param \RBSoft\UsuarioBundle\Entity\Usuario $cliente
     *
     * @return Orden
     */
    public function setCliente(\RBSoft\UsuarioBundle\Entity\Usuario $cliente = null)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return \RBSoft\UsuarioBundle\Entity\Usuario
     */
    public function getCliente()
    {
        return $this->cliente;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->detalle = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add detalle
     *
     * @param \RBSoft\CartBundle\Entity\OrdenDetalle $detalle
     *
     * @return Orden
     */
    public function addDetalle(\RBSoft\CartBundle\Entity\OrdenDetalle $detalle)
    {
        $this->detalle[] = $detalle;
        return $this;
    }

    /**
     * Remove detalle
     *
     * @param \RBSoft\CartBundle\Entity\OrdenDetalle $detalle
     */
    public function removeDetalle(\RBSoft\CartBundle\Entity\OrdenDetalle $detalle)
    {
        $this->detalle->removeElement($detalle);
    }

    /**
     * Get detalle
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDetalle()
    {
        return $this->detalle;
    }
}
