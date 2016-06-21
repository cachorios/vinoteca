<?php

namespace RBSoft\CartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Factura
 *
 * @ORM\Table(name="factura")
 * @ORM\Entity(repositoryClass="RBSoft\CartBundle\Repository\FacturaRepository")
 */
class Factura
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
     * @var string
     *
     * @ORM\Column(name="letra", type="string", length=1)
     */
    private $letra;

    /**
     * @var int
     *
     * @ORM\Column(name="sucursal", type="integer")
     */
    private $sucursal;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=255)
     */
    private $numero;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="importe", type="decimal", precision=10, scale=2)
     */
    private $importe;

    /**
     * @var string
     *
     * @ORM\Column(name="iva", type="decimal", precision=10, scale=2)
     */
    private $iva;

    /**
     * @var string
     *
     * @ORM\Column(name="bonificacion", type="decimal", precision=10, scale=2)
     */
    private $bonificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="felete", type="decimal", precision=10, scale=2)
     */
    private $felete;


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
     * Set letra
     *
     * @param string $letra
     *
     * @return Factura
     */
    public function setLetra($letra)
    {
        $this->letra = $letra;

        return $this;
    }

    /**
     * Get letra
     *
     * @return string
     */
    public function getLetra()
    {
        return $this->letra;
    }

    /**
     * Set sucursal
     *
     * @param integer $sucursal
     *
     * @return Factura
     */
    public function setSucursal($sucursal)
    {
        $this->sucursal = $sucursal;

        return $this;
    }

    /**
     * Get sucursal
     *
     * @return int
     */
    public function getSucursal()
    {
        return $this->sucursal;
    }

    /**
     * Set numero
     *
     * @param string $numero
     *
     * @return Factura
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Factura
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
     * Set importe
     *
     * @param string $importe
     *
     * @return Factura
     */
    public function setImporte($importe)
    {
        $this->importe = $importe;

        return $this;
    }

    /**
     * Get importe
     *
     * @return string
     */
    public function getImporte()
    {
        return $this->importe;
    }

    /**
     * Set iva
     *
     * @param string $iva
     *
     * @return Factura
     */
    public function setIva($iva)
    {
        $this->iva = $iva;

        return $this;
    }

    /**
     * Get iva
     *
     * @return string
     */
    public function getIva()
    {
        return $this->iva;
    }

    /**
     * Set bonificacion
     *
     * @param string $bonificacion
     *
     * @return Factura
     */
    public function setBonificacion($bonificacion)
    {
        $this->bonificacion = $bonificacion;

        return $this;
    }

    /**
     * Get bonificacion
     *
     * @return string
     */
    public function getBonificacion()
    {
        return $this->bonificacion;
    }

    /**
     * Set felete
     *
     * @param string $felete
     *
     * @return Factura
     */
    public function setFelete($felete)
    {
        $this->felete = $felete;

        return $this;
    }

    /**
     * Get felete
     *
     * @return string
     */
    public function getFelete()
    {
        return $this->felete;
    }
}

