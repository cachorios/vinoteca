<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use Symfony\Component\Validator\Constraints as Assert;
use RBSoft\UtilidadBundle\Validator\Constraints as UtilidadAssert;
use RBSoft\UsuarioBundle\Entity\SecureControl;
use RBSoft\UsuarioBundle\Entity\Usuario;

/**
 * Proveedor
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ProveedorRepository")
 */
class Proveedor implements SecureControl
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
     * @ORM\Column(name="codigo", type="integer", nullable=true)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="razon_social", type="string", length=150, nullable=false)
     * @Assert\NotBlank()
     */
    private $razon_social;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_fantasia", type="string", length=200, nullable=false)
     */
    private $nombre_fantasia;

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
     * @ORM\Column(name="domicilio", type="string", length=255, nullable=false)
     * @Assert\NotBlank()
     */
    private $domicilio;

    /**
     * @ORM\ManyToOne(targetEntity="RBSoft\UtilidadBundle\Entity\Pais")
     * @ORM\JoinColumn(name="pais_id", referencedColumnName="id")
     * @Assert\Type("RBSoft\UtilidadBundle\Entity\Pais")
     * @Assert\NotNull()
     */
    private $pais;

    /**
     * @ORM\ManyToOne(targetEntity="RBSoft\UtilidadBundle\Entity\Provincia")
     * @ORM\JoinColumn(name="provincia_id", referencedColumnName="id")
     * @Assert\Type("RBSoft\UtilidadBundle\Entity\provincia")
     * @Assert\NotNull()
     */
    private $provincia;

    /**
     * @ORM\ManyToOne(targetEntity="RBSoft\UtilidadBundle\Entity\Localidad")
     * @ORM\JoinColumn(name="localidad_id", referencedColumnName="id")
     * @Assert\Type("RBSoft\UtilidadBundle\Entity\Localidad")
     * @Assert\NotNull()
     */
    private $localidad;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_postal", type="string", length=8)
     * @Assert\NotBlank()
     */
    private $codigo_postal;

    /**
     * @var string
     *
     * @ORM\Column(name="pagina_web", type="string", length=150, nullable=true)
     */
    private $pagina_web;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=150)
     * @Assert\NotBlank()
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=20, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=true)
     * @Assert\Email(
     *     message = "El email '{{ value }}' no es valido.",
     *     checkMX = false
     * )
     */
    private $email;


    /**
     * @var string
     *
     * @ORM\Column(name="contacto", type="string", length=150)
     * @Assert\NotBlank()
     */
    private $contacto;

    /**
     * @var string
     *
     * @ORM\Column(name="contacto_telefono", type="string", length=150, nullable=true)
     */
    private $contacto_telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="contacto_int", type="string", length=5, nullable=true)
     */
    private $contacto_int;

    /**
     * @var string
     *
     * @ORM\Column(name="contacto_fax", type="string", length=20, nullable=true)
     */
    private $contacto_fax;

    /**
     * @var string
     *
     * @ORM\Column(name="contacto_movil", type="string", length=20 , nullable=true)
     */
    private $contacto_movil;

    /**
     * @var string
     *
     * @ORM\Column(name="contacto_email", type="string", length=100, nullable=true)
     * @Assert\Email(
     *     message = "El email '{{ value }}' no es valido.",
     *     checkMX = false
     * )
     */
    private $contacto_email;

    /**
     * @var string
     *
     * @ORM\Column(name="moneda", type="string", length=1, nullable=true)
     */
    private $moneda;

    /**
     * @var string
     *
     * @ORM\Column(name="limite_credito", type="float", nullable=false)
     */
    private $limite_credito = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_pago", type="integer")
     */
    private $tipo_pago;

    /**
     * @var float
     *
     * @ORM\Column(type="decimal", scale=2)
     */
    private $descuento = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="cond_iva", type="string", length=255)
     */
    private $cond_iva;

    /**
     * @var string
     *
     * @ORM\Column(name="n_cuenta", type="string", length=80, nullable=true)
     */
    private $n_cuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="comentario", type="text", nullable=true)
     */
    private $comentario;

    /**
     * @ORM\ManyToOne(targetEntity="RBSoft\UsuarioBundle\Entity\Usuario")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="login")
     */
    private $usuario;

    public function __toString()
    {
        return $this->getNombreFantasia();
    }


    /**
     * Set usuario
     *
     * @param \RBSoft\UsuarioBundle\Entity\Usuario $usuario
     * @return Proveedor
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
     * Set razon_social
     *
     * @param string $razonSocial
     * @return Proveedor
     */
    public function setRazonSocial($razonSocial)
    {
        $this->razon_social = $razonSocial;

        return $this;
    }

    /**
     * Get razon_social
     *
     * @return string 
     */
    public function getRazonSocial()
    {
        return $this->razon_social;
    }

    /**
     * Set nombre_fantasia
     *
     * @param string $nombreFantasia
     * @return Proveedor
     */
    public function setNombreFantasia($nombreFantasia)
    {
        $this->nombre_fantasia = $nombreFantasia;

        return $this;
    }

    /**
     * Get nombre_fantasia
     *
     * @return string 
     */
    public function getNombreFantasia()
    {
        return $this->nombre_fantasia;
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
     * Set codigo_postal
     *
     * @param string $codigoPostal
     * @return Proveedor
     */
    public function setCodigoPostal($codigoPostal)
    {
        $this->codigo_postal = $codigoPostal;

        return $this;
    }

    /**
     * Get codigo_postal
     *
     * @return string 
     */
    public function getCodigoPostal()
    {
        return $this->codigo_postal;
    }

    /**
     * Set pagina_web
     *
     * @param string $paginaWeb
     * @return Proveedor
     */
    public function setPaginaWeb($paginaWeb)
    {
        $this->pagina_web = $paginaWeb;

        return $this;
    }

    /**
     * Get pagina_web
     *
     * @return string 
     */
    public function getPaginaWeb()
    {
        return $this->pagina_web;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Proveedor
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
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
     * Set email
     *
     * @param string $email
     * @return Proveedor
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set contacto
     *
     * @param string $contacto
     * @return Proveedor
     */
    public function setContacto($contacto)
    {
        $this->contacto = $contacto;

        return $this;
    }

    /**
     * Get contacto
     *
     * @return string 
     */
    public function getContacto()
    {
        return $this->contacto;
    }

    /**
     * Set contacto_telefono
     *
     * @param string $contactoTelefono
     * @return Proveedor
     */
    public function setContactoTelefono($contactoTelefono)
    {
        $this->contacto_telefono = $contactoTelefono;

        return $this;
    }

    /**
     * Get contacto_telefono
     *
     * @return string 
     */
    public function getContactoTelefono()
    {
        return $this->contacto_telefono;
    }

    /**
     * Set contacto_int
     *
     * @param string $contactoInt
     * @return Proveedor
     */
    public function setContactoInt($contactoInt)
    {
        $this->contacto_int = $contactoInt;

        return $this;
    }

    /**
     * Get contacto_int
     *
     * @return string 
     */
    public function getContactoInt()
    {
        return $this->contacto_int;
    }

    /**
     * Set contacto_fax
     *
     * @param string $contactoFax
     * @return Proveedor
     */
    public function setContactoFax($contactoFax)
    {
        $this->contacto_fax = $contactoFax;

        return $this;
    }

    /**
     * Get contacto_fax
     *
     * @return string 
     */
    public function getContactoFax()
    {
        return $this->contacto_fax;
    }

    /**
     * Set contacto_movil
     *
     * @param string $contactoMovil
     * @return Proveedor
     */
    public function setContactoMovil($contactoMovil)
    {
        $this->contacto_movil = $contactoMovil;

        return $this;
    }

    /**
     * Get contacto_movil
     *
     * @return string 
     */
    public function getContactoMovil()
    {
        return $this->contacto_movil;
    }

    /**
     * Set contacto_email
     *
     * @param string $contactoEmail
     * @return Proveedor
     */
    public function setContactoEmail($contactoEmail)
    {
        $this->contacto_email = $contactoEmail;

        return $this;
    }

    /**
     * Get contacto_email
     *
     * @return string 
     */
    public function getContactoEmail()
    {
        return $this->contacto_email;
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
     * Set limite_credito
     *
     * @param float $limiteCredito
     * @return Proveedor
     */
    public function setLimiteCredito($limiteCredito)
    {
        $this->limite_credito = $limiteCredito;

        return $this;
    }

    /**
     * Get limite_credito
     *
     * @return float 
     */
    public function getLimiteCredito()
    {
        return $this->limite_credito;
    }

    /**
     * Set tipo_pago
     *
     * @param integer $tipoPago
     * @return Proveedor
     */
    public function setTipoPago($tipoPago)
    {
        $this->tipo_pago = $tipoPago;

        return $this;
    }

    /**
     * Get tipo_pago
     *
     * @return integer 
     */
    public function getTipoPago()
    {
        return $this->tipo_pago;
    }

    /**
     * Set descuento
     *
     * @param string $descuento
     * @return Proveedor
     */
    public function setDescuento($descuento)
    {
        $this->descuento = $descuento;

        return $this;
    }

    /**
     * Get descuento
     *
     * @return string 
     */
    public function getDescuento()
    {
        return $this->descuento;
    }

    /**
     * Set cond_iva
     *
     * @param string $condIva
     * @return Proveedor
     */
    public function setCondIva($condIva)
    {
        $this->cond_iva = $condIva;

        return $this;
    }

    /**
     * Get cond_iva
     *
     * @return string 
     */
    public function getCondIva()
    {
        return $this->cond_iva;
    }

    /**
     * Set n_cuenta
     *
     * @param string $nCuenta
     * @return Proveedor
     */
    public function setNCuenta($nCuenta)
    {
        $this->n_cuenta = $nCuenta;

        return $this;
    }

    /**
     * Get n_cuenta
     *
     * @return string 
     */
    public function getNCuenta()
    {
        return $this->n_cuenta;
    }

    /**
     * Set comentario
     *
     * @param string $comentario
     * @return Proveedor
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * Get comentario
     *
     * @return string 
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set pais
     *
     * @param \RBSoft\UtilidadBundle\Entity\Pais $pais
     * @return Proveedor
     */
    public function setPais(\RBSoft\UtilidadBundle\Entity\Pais $pais = null)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return \RBSoft\UtilidadBundle\Entity\Pais 
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set provincia
     *
     * @param \RBSoft\UtilidadBundle\Entity\Provincia $provincia
     * @return Proveedor
     */
    public function setProvincia(\RBSoft\UtilidadBundle\Entity\Provincia $provincia = null)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return \RBSoft\UtilidadBundle\Entity\Provincia 
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set localidad
     *
     * @param \RBSoft\UtilidadBundle\Entity\Localidad $localidad
     * @return Proveedor
     */
    public function setLocalidad(\RBSoft\UtilidadBundle\Entity\Localidad $localidad = null)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad
     *
     * @return \RBSoft\UtilidadBundle\Entity\Localidad 
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }
}
