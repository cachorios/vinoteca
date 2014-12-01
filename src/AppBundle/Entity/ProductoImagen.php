<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductoImagen
 *
 * @ORM\Table()
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
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="file", type="string", length=100)
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
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
    private $producto;

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
     * @return ProductoImagen
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
     * Get file
     *
     * @return string 
     */
    public function getFile()
    {
        return $this->file;
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
}
