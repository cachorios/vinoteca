<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use Symfony\Component\Validator\Constraints as Assert;
use RBSoft\UtilidadBundle\Validator\Constraints as UtilidadAssert;

/**
 * Proveedor
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ProveedorRepository")
 */
class Proveedor
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
     * @var integer
     *
     * @ORM\Column(name="codigo", type="integer", nullable=false)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="razon_social", type="string", length=150, nullable=false)
     * @Assert\NotBlank()
     */
    private $razonSocial;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_fantasia", type="string", length=200)
     */
    private $nombreFantasia;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_postal", type="string", length=8)
     * @Assert\NotBlank()
     */
    private $codigoPostal;

    /**
     * @var string
     *
     * @ORM\Column(name="cuit", type="string", length=11, nullable=false)
     * @Assert\Regex("/^[0-9_]+$/")
     * @UtilidadAssert\ContainsCuitValido()
     */
    private $cuit;

    /**
     * @var string
     *
     * @ORM\Column(name="letra_comprobante", type="string", length=1, nullable=false)
     */
    private $letraComprobante;

    /**
     * @var string
     *
     * @ORM\Column(name="correo_compra", type="string", length=100)
     */
    private $correoCompra;

    /**
     * @var string
     *
     * @ORM\Column(name="correo_pago", type="string", length=100)
     */
    private $correoPago;

    /**
     * @var string
     *
     * @ORM\Column(name="domicilio", type="string", length=255, nullable=false)
     * @Assert\NotBlank()
     */
    private $domicilio;

    /**
     * @var string
     *
     * @ORM\Column(name="moneda", type="string", length=1, nullable=false)
     */
    private $moneda;

    /**
     * @var string
     *
     * @ORM\Column(name="limite_credito", type="float", nullable=false)
     */
    private $limiteCredito;

    /**
     * @var string
     *
     * @ORM\Column(name="pagina_web", type="string", length=150)
     */
    private $paginaWeb;

    /**
     * @var string
     *
     * @ORM\Column(name="telefonos", type="string", length=20)
     * @Assert\NotBlank()
     */
    private $telefonos;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=20)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="cond_iva", type="string", length=255)
     */
    private $condIVA;


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
     * Set codigo
     *
     * @param integer $codigo
     * @return Proveedor
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return integer 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set razonSocial
     *
     * @param string $razonSocial
     * @return Proveedor
     */
    public function setRazonSocial($razonSocial)
    {
        $this->razonSocial = $razonSocial;

        return $this;
    }

    /**
     * Get razonSocial
     *
     * @return string 
     */
    public function getRazonSocial()
    {
        return $this->razonSocial;
    }

    /**
     * Set nombreFantasia
     *
     * @param string $nombreFantasia
     * @return Proveedor
     */
    public function setNombreFantasia($nombreFantasia)
    {
        $this->nombreFantasia = $nombreFantasia;

        return $this;
    }

    /**
     * Get nombreFantasia
     *
     * @return string 
     */
    public function getNombreFantasia()
    {
        return $this->nombreFantasia;
    }

    /**
     * Set codigoPostal
     *
     * @param string $codigoPostal
     * @return Proveedor
     */
    public function setCodigoPostal($codigoPostal)
    {
        $this->codigoPostal = $codigoPostal;

        return $this;
    }

    /**
     * Get codigoPostal
     *
     * @return string 
     */
    public function getCodigoPostal()
    {
        return $this->codigoPostal;
    }

    /**
     * Set cuit
     *
     * @param string $cuit
     * @return Proveedor
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
     * Set letraComprobante
     *
     * @param string $letraComprobante
     * @return Proveedor
     */
    public function setLetraComprobante($letraComprobante)
    {
        $this->letraComprobante = $letraComprobante;

        return $this;
    }

    /**
     * Get letraComprobante
     *
     * @return string 
     */
    public function getLetraComprobante()
    {
        return $this->letraComprobante;
    }

    /**
     * Set correoCompra
     *
     * @param string $correoCompra
     * @return Proveedor
     */
    public function setCorreoCompra($correoCompra)
    {
        $this->correoCompra = $correoCompra;

        return $this;
    }

    /**
     * Get correoCompra
     *
     * @return string 
     */
    public function getCorreoCompra()
    {
        return $this->correoCompra;
    }

    /**
     * Set correoPago
     *
     * @param string $correoPago
     * @return Proveedor
     */
    public function setCorreoPago($correoPago)
    {
        $this->correoPago = $correoPago;

        return $this;
    }

    /**
     * Get correoPago
     *
     * @return string 
     */
    public function getCorreoPago()
    {
        return $this->correoPago;
    }

    /**
     * Set domicilio
     *
     * @param string $domicilio
     * @return Proveedor
     */
    public function setDomicilio($domicilio)
    {
        $this->domicilio = $domicilio;

        return $this;
    }

    /**
     * Get domicilio
     *
     * @return string 
     */
    public function getDomicilio()
    {
        return $this->domicilio;
    }

    /**
     * Set moneda
     *
     * @param string $moneda
     * @return Proveedor
     */
    public function setMoneda($moneda)
    {
        $this->moneda = $moneda;

        return $this;
    }

    /**
     * Get moneda
     *
     * @return string 
     */
    public function getMoneda()
    {
        return $this->moneda;
    }

    /**
     * Set limiteCredito
     *
     * @param string $limiteCredito
     * @return Proveedor
     */
    public function setLimiteCredito($limiteCredito)
    {
        $this->limiteCredito = $limiteCredito;

        return $this;
    }

    /**
     * Get limiteCredito
     *
     * @return string 
     */
    public function getLimiteCredito()
    {
        return $this->limiteCredito;
    }

    /**
     * Set paginaWeb
     *
     * @param string $paginaWeb
     * @return Proveedor
     */
    public function setPaginaWeb($paginaWeb)
    {
        $this->paginaWeb = $paginaWeb;

        return $this;
    }

    /**
     * Get paginaWeb
     *
     * @return string 
     */
    public function getPaginaWeb()
    {
        return $this->paginaWeb;
    }

    /**
     * Set telefonos
     *
     * @param string $telefonos
     * @return Proveedor
     */
    public function setTelefonos($telefonos)
    {
        $this->telefonos = $telefonos;

        return $this;
    }

    /**
     * Get telefonos
     *
     * @return string 
     */
    public function getTelefonos()
    {
        return $this->telefonos;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return Proveedor
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set condIVA
     *
     * @param string $condIVA
     * @return Proveedor
     */
    public function setCondIVA($condIVA)
    {
        $this->condIVA = $condIVA;

        return $this;
    }

    /**
     * Get condIVA
     *
     * @return string 
     */
    public function getCondIVA()
    {
        return $this->condIVA;
    }
}
