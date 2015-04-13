<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use RBSoft\UsuarioBundle\Entity\SecureControl;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping\UniqueConstraint;
use RBSoft\UtilidadBundle\Validator\Constraints as UtilidadAssert;
use RBSoft\UsuarioBundle\Entity\Usuario;

/**
 * Reposicion
 *
 * @ORM\Table(
 *     name="reposicion",
 *     uniqueConstraints={@ORM\UniqueConstraint(name="uniq_idx", columns={"factura_numero","cuit"})}
 * )
 *
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ReposicionRepository")
 * @DoctrineAssert\UniqueEntity(fields={"facturaNumero", "cuit"},
 *      errorPath="facturaNumero",
 *      message="Este periodo ya existe.")
 *
 * @ORM\HasLifecycleCallbacks()
 */
class Reposicion implements SecureControl
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
     * @ORM\Column(type="string", length=11, nullable=true, name="cuit")
     * @Assert\Regex("/^[0-9_]+$/")
     * @UtilidadAssert\ContainsCuitValido()
     */
    private $cuit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=true, name="fecha_reposicion")
     */
    private $fechaReposicion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=true, name="fecha_alta")
     */
    private $fechaAlta;

    /**
     * @ORM\Column(name="factura_numero", type="string", nullable=true)
     */
    private $facturaNumero;

    /**
     * @ORM\ManyToOne(targetEntity="RBSoft\UsuarioBundle\Entity\Usuario")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     */
    private $usuario;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\ReposicionItem", mappedBy="reposicion", cascade={"persist","remove"})
     * @Assert\Count(
     *      min = "1",
     *      max = "50",
     *      minMessage = "Debe especificar al menos un item",
     *      maxMessage = "No se puede especificar más de {{ limit }} items"
     * )
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
     * @return Reposicion
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
     * Set fechaReposicion
     *
     * @param \DateTime $fechaReposicion
     * @return Reposicion
     */
    public function setFechaReposicion($fechaReposicion)
    {
        $this->fechaReposicion = $fechaReposicion;

        return $this;
    }

    /**
     * Set Usuario
     *
     * @param Usuario $usuario
     * @return Producto
     */
    public function setUsuario(Usuario $usuario)
    {
        $this->usuario = $usuario;
        return $this;
    }

    /**
     * Get usuario
     *
     * @return usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Get fechaReposicion
     *
     * @return \DateTime
     */
    public function getFechaReposicion()
    {
        return $this->fechaReposicion;
    }

    /**
     * Set fechaAlta
     *
     * @param \DateTime $fechaAlta
     * @return Reposicion
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
     * @return Reposicion
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
     * @param \AppBundle\Entity\ReposicionItem $items
     * @return Reposicion
     */
    public function addItem(\AppBundle\Entity\ReposicionItem $items)
    {
//        ld($items);
        $items->setReposicion($this);
        $this->items[] = $items;
        return $this;
    }

    /**
     * Remove items
     *
     * @param \AppBundle\Entity\ReposicionItem $items
     */
    public function removeItem(\AppBundle\Entity\ReposicionItem $items)
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
     * @ORM\PrePersist
     */
    public function PrePersist()
    {
        $this->setFechaAlta(new \DateTime('now', new \DateTimeZone('UTC')));
    }
}
