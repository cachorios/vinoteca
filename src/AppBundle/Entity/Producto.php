<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Producto
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ProductoRepository")
 */
class Producto
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
     * @ORM\Column(name="codigo", type="integer")
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="marca", type="string", length=100)
     */
    private $marca;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text")
     */
    private $descripcion;

    /**
     * @var decimal
     *
     * @ORM\Column(name="precio", type="decimal", scale=2)
     */
    private $precio;

    /**
     * @var decimal
     *
     * @ORM\Column(name="iva", type="decimal", scale=2)
     */
    private $iva;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean")
     */
    private $activo;

    /**
     * @ORM\OneToMany(targetEntity="ProductoImagen", mappedBy="producto", cascade={"persist", "remove"}, orphanRemoval=true)
     */
    private $imagenes;

    /**
     * @ORM\OneToMany(targetEntity="ProductoBonificacion", mappedBy="producto", cascade={"persist", "remove"}, orphanRemoval=true)
     */
    private $bonificaciones;

    /**
     * @ORM\ManyToMany(targetEntity="Categoria")
     * @ORM\JoinTable(name="producto_categoria_groups",
     *      joinColumns={@ORM\JoinColumn(name="producto_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="categoria_id", referencedColumnName="id")}
     *      )
     **/
    private $categorias;


    /**
     * Creation time.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Last update time.
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->imagenes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->bonificaciones = new \Doctrine\Common\Collections\ArrayCollection();
        $this->categorias = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Producto
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
     * Set nombre
     *
     * @param string $nombre
     * @return Producto
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
     * Set marca
     *
     * @param string $marca
     * @return Producto
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;
    
        return $this;
    }

    /**
     * Get marca
     *
     * @return string 
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Producto
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set precio
     *
     * @param string $precio
     * @return Producto
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    
        return $this;
    }

    /**
     * Get precio
     *
     * @return string 
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set iva
     *
     * @param string $iva
     * @return Producto
     */
    public function setIva($iva)
    {
        $this->iva = $iva;
    
        return $this;
    }

    /**
     * Get iva
     *
     * @return string 
     */
    public function getIva()
    {
        return $this->iva;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return Producto
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

    /**
     * Add imagenes
     *
     * @param \AppBundle\Entity\ProductoImagen $imagenes
     * @return Producto
     */
    public function addImagene(\AppBundle\Entity\ProductoImagen $imagenes)
    {
        $this->imagenes[] = $imagenes;
    
        return $this;
    }

    /**
     * Remove imagenes
     *
     * @param \AppBundle\Entity\ProductoImagen $imagenes
     */
    public function removeImagene(\AppBundle\Entity\ProductoImagen $imagenes)
    {
        $this->imagenes->removeElement($imagenes);
    }

    /**
     * Get imagenes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getImagenes()
    {
        return $this->imagenes;
    }

    /**
     * Add bonificaciones
     *
     * @param \AppBundle\Entity\ProductoBonificacion $bonificaciones
     * @return Producto
     */
    public function addBonificacione(\AppBundle\Entity\ProductoBonificacion $bonificaciones)
    {
        $this->bonificaciones[] = $bonificaciones;
    
        return $this;
    }

    /**
     * Remove bonificaciones
     *
     * @param \AppBundle\Entity\ProductoBonificacion $bonificaciones
     */
    public function removeBonificacione(\AppBundle\Entity\ProductoBonificacion $bonificaciones)
    {
        $this->bonificaciones->removeElement($bonificaciones);
    }

    /**
     * Get bonificaciones
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBonificaciones()
    {
        return $this->bonificaciones;
    }

    /**
     * Add categorias
     *
     * @param \AppBundle\Entity\Categoria $categorias
     * @return Producto
     */
    public function addCategoria(\AppBundle\Entity\Categoria $categorias)
    {
        $this->categorias[] = $categorias;
    
        return $this;
    }

    /**
     * Remove categorias
     *
     * @param \AppBundle\Entity\Categoria $categorias
     */
    public function removeCategoria(\AppBundle\Entity\Categoria $categorias)
    {
        $this->categorias->removeElement($categorias);
    }

    /**
     * Get categorias
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategorias()
    {
        return $this->categorias;
    }
}