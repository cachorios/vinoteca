<?php

namespace RBSoft\CartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use RBSoft\UsuarioBundle\Entity\Usuario;


/**
 * Cliente
 *
 * @ORM\Table(name="cliente")
 * @ORM\Entity(repositoryClass="RBSoft\CartBundle\Repository\ClienteRepository")
 */
class Cliente
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
     * @var Usuario
     *
     * @ORM\OneToOne(targetEntity="\RBSoft\UsuarioBundle\Entity\Usuario")
     */
    private $usuario;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="localidad", type="string", length=64)
     */
    private $localidad;

    /**
     * @var string
     *
     * @ORM\Column(name="Provincia", type="string", length=64)
     */
    private $provincia;

    /**
     * @var string
     *
     * @ORM\Column(name="pais", type="string", length=64)
     */
    private $pais;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_postal", type="string", length=15)
     */
    private $codigoPostal;

    /**
     * @var string
     *
     * @ORM\Column(name="deliery_nombre", type="string", length=255, nullable=true)
     */
    private $delieryNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_telefono", type="string", length=255, nullable=true)
     */
    private $deliveryTelefono;

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_mail", type="string", length=255, nullable=true)
     */
    private $deliveryMail;

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_direccion", type="string", length=255, nullable=true)
     */
    private $deliveryDireccion;

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_localidad", type="string", length=64, nullable=true)
     */
    private $deliveryLocalidad;

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_codigo_postal", type="string", length=32, nullable=true)
     */
    private $deliveryCodigoPostal;

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_provincia", type="string", length=64, nullable=true)
     */
    private $deliveryProvincia;

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_pais", type="string", length=64, nullable=true)
     */
    private $deliveryPais;


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
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Cliente
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set localidad
     *
     * @param string $localidad
     *
     * @return Cliente
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad
     *
     * @return string
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set provincia
     *
     * @param string $provincia
     *
     * @return Cliente
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return string
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set pais
     *
     * @param string $pais
     *
     * @return Cliente
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return string
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set codigoPostal
     *
     * @param string $codigoPostal
     *
     * @return Cliente
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
     * Set delieryNombre
     *
     * @param string $delieryNombre
     *
     * @return Cliente
     */
    public function setDelieryNombre($delieryNombre)
    {
        $this->delieryNombre = $delieryNombre;

        return $this;
    }

    /**
     * Get delieryNombre
     *
     * @return string
     */
    public function getDelieryNombre()
    {
        return $this->delieryNombre;
    }

    /**
     * Set deliveryTelefono
     *
     * @param string $deliveryTelefono
     *
     * @return Cliente
     */
    public function setDeliveryTelefono($deliveryTelefono)
    {
        $this->deliveryTelefono = $deliveryTelefono;

        return $this;
    }

    /**
     * Get deliveryTelefono
     *
     * @return string
     */
    public function getDeliveryTelefono()
    {
        return $this->deliveryTelefono;
    }

    /**
     * Set deliveryMail
     *
     * @param string $deliveryMail
     *
     * @return Cliente
     */
    public function setDeliveryMail($deliveryMail)
    {
        $this->deliveryMail = $deliveryMail;

        return $this;
    }

    /**
     * Get deliveryMail
     *
     * @return string
     */
    public function getDeliveryMail()
    {
        return $this->deliveryMail;
    }

    /**
     * Set deliveryDireccion
     *
     * @param string $deliveryDireccion
     *
     * @return Cliente
     */
    public function setDeliveryDireccion($deliveryDireccion)
    {
        $this->deliveryDireccion = $deliveryDireccion;

        return $this;
    }

    /**
     * Get deliveryDireccion
     *
     * @return string
     */
    public function getDeliveryDireccion()
    {
        return $this->deliveryDireccion;
    }

    /**
     * Set deliveryLocalidad
     *
     * @param string $deliveryLocalidad
     *
     * @return Cliente
     */
    public function setDeliveryLocalidad($deliveryLocalidad)
    {
        $this->deliveryLocalidad = $deliveryLocalidad;

        return $this;
    }

    /**
     * Get deliveryLocalidad
     *
     * @return string
     */
    public function getDeliveryLocalidad()
    {
        return $this->deliveryLocalidad;
    }

    /**
     * Set deliveryCodigoPostal
     *
     * @param string $deliveryCodigoPostal
     *
     * @return Cliente
     */
    public function setDeliveryCodigoPostal($deliveryCodigoPostal)
    {
        $this->deliveryCodigoPostal = $deliveryCodigoPostal;

        return $this;
    }

    /**
     * Get deliveryCodigoPostal
     *
     * @return string
     */
    public function getDeliveryCodigoPostal()
    {
        return $this->deliveryCodigoPostal;
    }

    /**
     * Set deliveryProvincia
     *
     * @param string $deliveryProvincia
     *
     * @return Cliente
     */
    public function setDeliveryProvincia($deliveryProvincia)
    {
        $this->deliveryProvincia = $deliveryProvincia;

        return $this;
    }

    /**
     * Get deliveryProvincia
     *
     * @return string
     */
    public function getDeliveryProvincia()
    {
        return $this->deliveryProvincia;
    }

    /**
     * Set deliveryPais
     *
     * @param string $deliveryPais
     *
     * @return Cliente
     */
    public function setDeliveryPais($deliveryPais)
    {
        $this->deliveryPais = $deliveryPais;

        return $this;
    }

    /**
     * Get deliveryPais
     *
     * @return string
     */
    public function getDeliveryPais()
    {
        return $this->deliveryPais;
    }

    /**
     * Set usuario
     *
     * @param \RBSoft\CartBundle\Entity\Usuario $usuario
     *
     * @return Cliente
     */
    public function setUsuario(\RBSoft\CartBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \RBSoft\CartBundle\Entity\Usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}
