<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductoImagen
 *
 * @ORM\Table(name="producto_imagen")
 * @ORM\Entity
 */
class ProductoImagen
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
     * @ORM\Column(type="string", length=200)
     */
    private $file;

    /**
     * @var string
     *
     * @ORM\Column(name="primario", type="boolean")
     */
    private $primario;

    /**
     * @ORM\ManyToOne(targetEntity="Producto", inversedBy="imagenes")
     */
    private $producto;

    public function __toString()
    {
        return $this->getFile();
    }

    /**
     * @var string
     * @ORM\Column(name="extension", type="string", length=3)
     */
    private $extension;

    
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
     * Set primario
     *
     * @param boolean $primario
     * @return ProductoImagen
     */
    public function setPrimario($primario)
    {
        $this->primario = $primario;
    
        return $this;
    }

    /**
     * Get primario
     *
     * @return boolean 
     */
    public function getPrimario()
    {
        return $this->primario;
    }

    /**
     * Set producto
     *
     * @param \AppBundle\Entity\Producto $producto
     * @return ProductoImagen
     */
    public function setProducto(\AppBundle\Entity\Producto $producto = null)
    {
        $this->producto = $producto;
    
        return $this;
    }

    /**
     * Get producto
     *
     * @return \AppBundle\Entity\Producto 
     */
    public function getProducto()
    {
        return $this->producto;
    }

    /**
     * Set extension
     *
     * @param string $extension
     * @return ProductoImagen
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;
    }
    /**
     * Set file
     *
     * @param string $file
     * @return ProductoImagen
     */
    public function setFile($file)
    {
        $this->file = $file;
    
        return $this;
    }

    /**
     * Get extension
     *
     * @return string 
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Get file
     *
     * @return string 
     */
    public function getFile()
    {
        return $this->file;

    }
}
