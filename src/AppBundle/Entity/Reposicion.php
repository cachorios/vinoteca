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
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ReposicionRepository")
 * @DoctrineAssert\UniqueEntity(fields={"codigo"},
 *      message="El codigo ingresado ya existe.")
 *
 * @ORM\HasLifecycleCallbacks()
 */
class Reposicion  implements SecureControl
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
     * @ORM\Column(name="codigo", type="string", length=150, nullable=false)
     */
    private $codigo;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Proveedor")
     * @ORM\JoinColumn(name="proveedor_id", referencedColumnName="id")
     * @Assert\Type("AppBundle\Entity\Proveedor")
     * @Assert\NotNull()
     */
    private $proveedor;

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
        return $this->getCodigo();
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
     * @ORM\PrePersist
     */
    public function PrePersist()
    {
        $this->setFechaAlta(new \DateTime('now', new \DateTimeZone('UTC')));
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->items = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set fechaReposicion
     *
     * @param \DateTime $fechaReposicion
     *
     * @return Reposicion
     */
    public function setFechaReposicion($fechaReposicion)
    {
        $this->fechaReposicion = $fechaReposicion;

        return $this;
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
     *
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
     * Set facturaNumero
     *
     * @param string $facturaNumero
     *
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
     * Set codigo
     *
     * @param string $codigo
     *
     * @return Reposicion
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set proveedor
     *
     * @param \AppBundle\Entity\Proveedor $proveedor
     *
     * @return Reposicion
     */
    public function setProveedor(\AppBundle\Entity\Proveedor $proveedor = null)
    {
        $this->proveedor = $proveedor;
        return $this;
    }

    /**
     * Get proveedor
     *
     * @return \AppBundle\Entity\Proveedor
     */
    public function getProveedor()
    {
        return $this->proveedor;
    }

    /**
     * Set usuario
     *
     * @param \RBSoft\UsuarioBundle\Entity\Usuario $usuario
     *
     * @return Reposicion
     */
    public function setUsuario(\RBSoft\UsuarioBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \RBSoft\UsuarioBundle\Entity\Usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Add item
     *
     * @param \AppBundle\Entity\ReposicionItem $item
     *
     * @return Reposicion
     */
    public function addItem(\AppBundle\Entity\ReposicionItem $item)
    {
        $item->setReposicion($this);
        $this->items[] = $item;
        return $this;
    }

    /**
     * Remove item
     *
     * @param \AppBundle\Entity\ReposicionItem $item
     */
    public function removeItem(\AppBundle\Entity\ReposicionItem $item)
    {
        $this->items->removeElement($item);
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
}
