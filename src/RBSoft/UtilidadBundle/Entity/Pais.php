<?php

namespace RBSoft\UtilidadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pais
 *
 * @ORM\Table(name="parametro_pais")
 * @ORM\Entity(repositoryClass="RBSoft\UtilidadBundle\Entity\PaisRepository")
 */
class Pais
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
     * @ORM\Column(name="nombre", type="string", length=150)
     */
    private $nombre;

    /**
     * @ORM\OneToMany(targetEntity="Provincia", mappedBy="pais")
     */
    protected $provincias;

    public function __toString()
    {
        return $this->getNombre();
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->provincias = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombre
     *
     * @param string $nombre
     * @return Pais
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Add provincias
     *
     * @param \RBSoft\UtilidadBundle\Entity\Provincia $provincias
     * @return Pais
     */
    public function addProvincia(\RBSoft\UtilidadBundle\Entity\Provincia $provincias)
    {
        $this->provincias[] = $provincias;

        return $this;
    }

    /**
     * Remove provincias
     *
     * @param \RBSoft\UtilidadBundle\Entity\Provincia $provincias
     */
    public function removeProvincia(\RBSoft\UtilidadBundle\Entity\Provincia $provincias)
    {
        $this->provincias->removeElement($provincias);
    }

    /**
     * Get provincias
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProvincias()
    {
        return $this->provincias;
    }
}
