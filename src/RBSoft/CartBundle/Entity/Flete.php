<?php

namespace RBSoft\CartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Flete
 *
 * @ORM\Table(name="flete")
 * @ORM\Entity(repositoryClass="RBSoft\CartBundle\Repository\FleteRepository")
 */
class Flete
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_estimada", type="date")
     */
    private $fechaEstimada;

    /**
     * @var string
     *
     * @ORM\Column(name="trasporte", type="string", length=64)
     */
    private $trasporte;


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
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Flete
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
     * @return Flete
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
     * Set fechaEstimada
     *
     * @param \DateTime $fechaEstimada
     *
     * @return Flete
     */
    public function setFechaEstimada($fechaEstimada)
    {
        $this->fechaEstimada = $fechaEstimada;

        return $this;
    }

    /**
     * Get fechaEstimada
     *
     * @return \DateTime
     */
    public function getFechaEstimada()
    {
        return $this->fechaEstimada;
    }

    /**
     * Set trasporte
     *
     * @param string $trasporte
     *
     * @return Flete
     */
    public function setTrasporte($trasporte)
    {
        $this->trasporte = $trasporte;

        return $this;
    }

    /**
     * Get trasporte
     *
     * @return string
     */
    public function getTrasporte()
    {
        return $this->trasporte;
    }
}

