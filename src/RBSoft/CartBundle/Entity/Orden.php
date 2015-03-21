<?php

namespace RBSoft\CartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
/**
 * Orden
 *
 * 
 * @ORM\Entity(repositoryClass="RBSoft\CartBundle\Entity\OrdenRepository")
 */
class Orden
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
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, name="estado")
     */
    private $estado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=true, name="estadoFecha")
     * @Gedmo\Timestampable(on="change", field={"estado"})
     */
    private $estadoFecha;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="importeSinIva")
     */
    private $importeSinIva;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="importeConIva")
     */
    private $importeConIva;

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
     * @ORM\Column(type="datetime", nullable=true, name="upatedAt")
     * @Gedmo\Timestampable
     */
    private $upatedAt;

    /**
     * @ORM\OneToOne(targetEntity="RBSoft\CartBundle\Entity\Factura", inversedBy="orden")
     * @ORM\JoinColumn(name="factura_id", referencedColumnName="id", unique=true, onDelete="SET NULL")
     */
    private $factura;


//    private $usuario;

    /**
     * 
     */
    private $item;


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
     * Set estado
     *
     * @param string $estado
     * @return Orden
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set estadoFecha
     *
     * @param \DateTime $estadoFecha
     * @return Orden
     */
    public function setEstadoFecha($estadoFecha)
    {
        $this->estadoFecha = $estadoFecha;

        return $this;
    }

    /**
     * Get estadoFecha
     *
     * @return \DateTime 
     */
    public function getEstadoFecha()
    {
        return $this->estadoFecha;
    }

    /**
     * Set importeSinIva
     *
     * @param string $importeSinIva
     * @return Orden
     */
    public function setImporteSinIva($importeSinIva)
    {
        $this->importeSinIva = $importeSinIva;

        return $this;
    }

    /**
     * Get importeSinIva
     *
     * @return string 
     */
    public function getImporteSinIva()
    {
        return $this->importeSinIva;
    }

    /**
     * Set importeConIva
     *
     * @param string $importeConIva
     * @return Orden
     */
    public function setImporteConIva($importeConIva)
    {
        $this->importeConIva = $importeConIva;

        return $this;
    }

    /**
     * Get importeConIva
     *
     * @return string 
     */
    public function getImporteConIva()
    {
        return $this->importeConIva;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Orden
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
     * Set upatedAt
     *
     * @param \DateTime $upatedAt
     * @return Orden
     */
    public function setUpatedAt($upatedAt)
    {
        $this->upatedAt = $upatedAt;

        return $this;
    }

    /**
     * Get upatedAt
     *
     * @return \DateTime 
     */
    public function getUpatedAt()
    {
        return $this->upatedAt;
    }

    /**
     * Set factura
     *
     * @param string $factura
     * @return Orden
     */
    public function setFactura($factura)
    {
        $this->factura = $factura;

        return $this;
    }

    /**
     * Get factura
     *
     * @return string 
     */
    public function getFactura()
    {
        return $this->factura;
    }

    /**
     * Set usuario
     *
     * @param integer $usuario
     * @return Orden
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return integer 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set item
     *
     * @param integer $item
     * @return Orden
     */
    public function setItem($item)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Get item
     *
     * @return integer 
     */
    public function getItem()
    {
        return $this->item;
    }
}
