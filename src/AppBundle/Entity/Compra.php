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
 * Compra
 *
 * @ORM\Table(
 *     name="compra",
 *     uniqueConstraints={@ORM\UniqueConstraint(name="uniq_idx", columns={"factura_numero","cuit"})}
 * )
 *
 * @ORM\Entity(repositoryClass="AppBundle\Entity\CompraRepository")
 * @DoctrineAssert\UniqueEntity(fields={"factura_numero", "cuit"},
 *      errorPath="facturaNumero",
 *      message="Este periodo ya existe.")
 *
 * 
 */
class Compra implements SecureControl
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
     * @ORM\Column(type="datetime", nullable=true, name="fecha_compra")
     */
    private $fechaCompra;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=true, name="fecha_alta")
     */
    private $fechaAlta;

    /**
     * @ORM\Column(name="factura_numero", type="string", nullable=true)
     */
    private $factura_numero;

    /**
     * @ORM\ManyToOne(targetEntity="RBSoft\UsuarioBundle\Entity\Usuario")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="login")
     */
    private $usuario;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\CompraItem", mappedBy="compra", cascade={"persist","remove"})
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
//        ld($items);
        $items->setCompra($this);
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
     * 
     */
    public function PrePersist()
    {
        $this->setFechaAlta(new \DateTime('now', new \DateTimeZone('UTC')));
    }
}
