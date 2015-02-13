<?php

namespace RBSoft\UsuarioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Security\Core\Role\Role;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * Usuario
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="RBSoft\UsuarioBundle\Entity\UsuarioRepository")
 */
class Usuario implements AdvancedUserInterface
{

    /**
     * @var string
     *
     * @ORM\Id
     * @ORM\Column(name="login", type="string", length=100)
     * @Assert\NotBlank()
     */
    private $login;


    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=255, nullable = true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="celular", type="string", length=255, nullable = true)
     */
    private $celular;

    /**
     * @var string
     *
     * @ORM\Column(name="facebook", type="string", length=255, nullable = true)
     */
    private $facebook;

    /**
     * @var string
     *
     * @ORM\Column(name="twitter", type="string", length=255, nullable = true)
     */
    private $twitter;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255)
     */
    private $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;


    /**
     * @var DateTime
     *
     *  @ORM\Column(name="fecha_alta", type="datetime")
     */
    private $fecha_alta;

    /**
     * @Assert\File(maxSize="6000000")
     */
    private $imagen;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean")
     *
     */
    protected $activo = true;

    public function __construct()
    {
        $this->setFechaAlta( new \DateTime());
    }


    public function getId(){
        return $this->getLogin();
    }


    /**
     * Set login
     *
     * @param string $login
     * @return Usuario
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

 

    /**
     * Set email
     *
     * @param string $email
     * @return Usuario
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
     * Set nombre
     *
     * @param string $nombre
     * @return Usuario
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
     * Set telefono
     *
     * @param string $telefono
     * @return Usuario
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
     * Set celular
     *
     * @param string $celular
     * @return Usuario
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;

        return $this;
    }

    /**
     * Get celular
     *
     * @return string 
     */
    public function getCelular()
    {
        return $this->celular;
    }


    /**
     * Set password
     *
     * @param string $password
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return User
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean
     */
    public function getActivo()
    {
        return $this->activo;
    }

    public function __toString()
    {
        return $this->getNombre();
    }

    /**
     * Set fecha_alta
     *
     * @param \DateTime $fechaAlta
     * @return Usuario
     */
    public function setFechaAlta($fechaAlta)
    {
        $this->fecha_alta = $fechaAlta;

        return $this;
    }

    /**
     * Get fecha_alta
     *
     * @return \DateTime 
     */
    public function getFechaAlta()
    {
        return $this->fecha_alta;
    }


    /**
     * @param $salt
     * @return $this
     */
    public function setSalt($salt){
        $this->salt = $salt;
        return $this;
    }

    /**
     * Returns the roles granted to the user.
     *
     * <code>
     * public function getRoles()
     * {
     *     return array('ROLE_USER');
     * }
     * </code>
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     *
     * @return Role[] The user roles
     */
    public function getRoles()
    {
        return array('ROLE_USUARIO');
    }

    /**
     * Returns the salt that was originally used to encode the password.
     *
     * This can return null if the password was not encoded using a salt.
     *
     * @return string|null The salt
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Returns the username used to authenticate the user.
     *
     * @return string The username
     */
    public function getUsername()
    {
        return $this->getEmail();
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     * @return Usuario
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string 
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set twitter
     *
     * @param string $twitter
     * @return Usuario
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Get twitter
     *
     * @return string 
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setImagen(UploadedFile $file = null)
    {
        $this->imagen = $file;
    }

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getImagen()
    {
        return $this->imagen;
    }


    public function upload($dir)
    {
        if (null === $this->getImagen()) {
            if(file_exists($dir.$this->getLogin().'.jpg'))
                unlink($dir.$this->getLogin().'.jpg');
            return;
        }

        if(file_exists($dir.$this->getLogin().'.'.$this->getImagen()->getClientOriginalExtension()))
            unlink($dir.$this->getLogin().'.'.$this->getImagen()->getClientOriginalExtension());

        $this->getImagen()->move(
            $dir,
            $this->getLogin().'.'.$this->getImagen()->getClientOriginalExtension()
        );

        $this->imagen = null;
    }

    /**
     * {@inheritDoc}
     */
    public function isEnabled()
    {
        return $this->activo;
    }

    /**
     * {@inheritDoc}
     */
    public function isAccountNonExpired()
    {
        return true;
    }

    /**
     * {@inheritDoc}
     */
    public function isAccountNonLocked()
    {
        return $this->isEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function isCredentialsNonExpired()
    {
        return true;
    }

}
