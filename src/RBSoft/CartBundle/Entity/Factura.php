<?php

namespace RBSoft\CartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Factura
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="RBSoft\CartBundle\Entity\FacturaRepository")
 */
class Factura
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
     * @ORM\Column(name="referencia", type="string", length=15, nullable=true)
     */
    private $referencia;

    /**
     * @var string
     *
     * @ORM\Column(name="contenidoHtml", type="string", length=16000)
     */
    private $contenidoHtml;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     * @Gedmo\Timestampable(on="create")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedAt", type="datetime")
     * @Gedmo\Timestampable(on="update")
     */
    private $updatedAt;

    /**
     * @ORM\OneToOne(targetEntity="Orden", mappedBy="factura")
     */
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
     * Set referencia
     *
     * @param string $referencia
     * @return Factura
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;

        return $this;
    }

    /**
     * Get referencia
     *
     * @return string 
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * Set contenidoHtml
     *
     * @param string $contenidoHtml
     * @return Factura
     */
    public function setContenidoHtml($contenidoHtml)
    {
        $this->contenidoHtml = $contenidoHtml;

        return $this;
    }

    /**
     * Get contenidoHtml
     *
     * @return string 
     */
    public function getContenidoHtml()
    {
        return $this->contenidoHtml;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Factura
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
     * @return Factura
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
     * @return Factura
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
