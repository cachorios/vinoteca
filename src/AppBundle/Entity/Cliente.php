<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cliente
 *
 * @ORM\Table(name="cliente")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ClienteRepository")
 */
class Cliente
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
     * @ORM\Column(name="del_nombre", type="string", length=255)
     */
    private $delNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="del_dir1", type="string", length=255)
     */
    private $delDir1;

    /**
     * @var string
     *
     * @ORM\Column(name="del_dir2", type="string", length=255)
     */
    private $delDir2;

    /**
     * @var string
     *
     * @ORM\Column(name="del_ciudad", type="string", length=64)
     */
    private $delCiudad;

    /**
     * @var string
     *
     * @ORM\Column(name="del_codPostal", type="string", length=15)
     */
    private $delCodPostal;

    /**
     * @var string
     *
     * @ORM\Column(name="del_pais", type="string", length=64)
     */
    private $delPais;

    /**
     * @var string
     *
     * @ORM\Column(name="del_pcia", type="string", length=64)
     */
    private $delPcia;

    /**
     * @ORM\ManyToOne(targetEntity="RBSoft\UsuarioBundle\Entity\Usuario")
     */
    private $usuario;
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
     * Set apellido
     *
     * @param string $apellido
     *
     * @return Cliente
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Cliente
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
     * Set email
     *
     * @param string $email
     *
     * @return Cliente
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
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Cliente
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
     * Set movil
     *
     * @param string $movil
     *
     * @return Cliente
     */
    public function setMovil($movil)
    {
        $this->movil = $movil;

        return $this;
    }

    /**
     * Get movil
     *
     * @return string
     */
    public function getMovil()
    {
        return $this->movil;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return Cliente
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
     * Set delNombre
     *
     * @param string $delNombre
     *
     * @return Cliente
     */
    public function setDelNombre($delNombre)
    {
        $this->delNombre = $delNombre;

        return $this;
    }

    /**
     * Get delNombre
     *
     * @return string
     */
    public function getDelNombre()
    {
        return $this->delNombre;
    }

    /**
     * Set delDir1
     *
     * @param string $delDir1
     *
     * @return Cliente
     */
    public function setDelDir1($delDir1)
    {
        $this->delDir1 = $delDir1;

        return $this;
    }

    /**
     * Get delDir1
     *
     * @return string
     */
    public function getDelDir1()
    {
        return $this->delDir1;
    }

    /**
     * Set delDir2
     *
     * @param string $delDir2
     *
     * @return Cliente
     */
    public function setDelDir2($delDir2)
    {
        $this->delDir2 = $delDir2;

        return $this;
    }

    /**
     * Get delDir2
     *
     * @return string
     */
    public function getDelDir2()
    {
        return $this->delDir2;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     *
     * @return Cliente
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set delCodpostal
     *
     * @param string $delCodpostal
     *
     * @return Cliente
     */
    public function setDelCodpostal($delCodpostal)
    {
        $this->delCodpostal = $delCodpostal;

        return $this;
    }

    /**
     * Get delCodpostal
     *
     * @return string
     */
    public function getDelCodpostal()
    {
        return $this->delCodpostal;
    }

    /**
     * Set delPais
     *
     * @param string $delPais
     *
     * @return Cliente
     */
    public function setDelPais($delPais)
    {
        $this->delPais = $delPais;

        return $this;
    }

    /**
     * Get delPais
     *
     * @return string
     */
    public function getDelPais()
    {
        return $this->delPais;
    }

    /**
     * Set delPcia
     *
     * @param string $delPcia
     *
     * @return Cliente
     */
    public function setDelPcia($delPcia)
    {
        $this->delPcia = $delPcia;

        return $this;
    }

    /**
     * Get delPcia
     *
     * @return string
     */
    public function getDelPcia()
    {
        return $this->delPcia;
    }

    /**
     * Set delCiudad
     *
     * @param string $delCiudad
     *
     * @return Cliente
     */
    public function setDelCiudad($delCiudad)
    {
        $this->delCiudad = $delCiudad;

        return $this;
    }

    /**
     * Get delCiudad
     *
     * @return string
     */
    public function getDelCiudad()
    {
        return $this->delCiudad;
    }

    /**
     * Set usuario
     *
     * @param \RBSoft\UsuarioBundle\Entity\Usuario $usuario
     *
     * @return Cliente
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
}
