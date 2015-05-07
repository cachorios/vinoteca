<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use RBSoft\UsuarioBundle\Entity\SecureControl;
use RBSoft\UsuarioBundle\Entity\Usuario;
use RBSoft\UtilidadBundle\Libs\Util;

use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Producto
 *
 * @ORM\Table(name="producto")
 *
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ProductoRepository")
 * @DoctrineAssert\UniqueEntity(fields={"nombre", "codigo"})
 * 
 */
class Producto implements SecureControl
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
     * @ORM\Column(type="string", length=100, nullable=true, name="nombre")
     * @Assert\NotBlank()
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=20, nullable=true, name="codigo")
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(type="text", nullable=true, name="descripcion")
     * @Assert\NotBlank()
     */
    private $descripcion;

    /**
     * @var decimal
     *
     * @ORM\Column(type="decimal", nullable=true, name="precio", scale=2)
     * @Assert\NotBlank()
     *
     */
    private $precio;

    /**
     * @var decimal
     *
     * @ORM\Column(type="decimal", nullable=true, name="costo", scale=2)
     *
     */
    private $costo;

    /**
     * @var decimal
     *
     * @ORM\Column(type="decimal", nullable=true, name="iva", scale=2)
     * @Assert\NotBlank()
     *
     */
    private $iva;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=true, name="activo")
     */
    private $activo = true;

    /**
     * @ORM\OneToMany(
     *     targetEntity="AppBundle\Entity\ProductoImagen",
     *     mappedBy="producto",
     *     orphanRemoval=true,
     *     cascade={"persist","remove"}
     * )
     * @ORM\OrderBy({"orden"="DESC"})
     */
    private $imagenes;

    /**
     * @ORM\OneToMany(
     *     targetEntity="AppBundle\Entity\ProductoBonificacion",
     *     mappedBy="producto",
     *     orphanRemoval=true,
     *     cascade={"persist","remove"}
     * )
     */
    private $bonificaciones;

    /**
     * @ORM\ManyToOne(targetEntity="RBSoft\UsuarioBundle\Entity\Usuario")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     */
    private $usuario;

    /**
     *  var Categoria
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Categoria")
     * @ORM\JoinColumn(name="categoria_id", referencedColumnName="id")
     * @Assert\NotBlank()
     */
    private $categoria;

    /**
     * @ORM\OneToMany(
     *     targetEntity="AppBundle\Entity\ProductoExtension",
     *     mappedBy="producto",
     *     orphanRemoval=true,
     *     cascade={"persist","remove"}
     * )
     */
    private $extencion;

    /**
     * @ORM\Column(type="datetime", nullable=false, name="created_at")
     */
    protected $createdAt;

    /**
     * @ORM\Column(type="datetime", nullable=false, name="updated_at")
     */
    protected $updatedAt;

    /**
     * @ORM\Column(type="integer", nullable=true, name="stock")
     */
    protected $stock = 0;

    /**
     * @ORM\Column(type="integer", name="limite_stock")
     */
    protected $limiteStock = 0;

    public function __toString()
    {
        return $this->getNombre();
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->imagenes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->bonificaciones = new \Doctrine\Common\Collections\ArrayCollection();
        $this->extencion = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @param string $codigo
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
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set stock
     *
     * @param string $stock
     * @return Producto
     */
    public function setStock($stock)
    {
        $this->stock = $stock;
        return $this;
    }

    /**
     * Get stock
     *
     * @return integer
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set limite stock
     *
     * @param string $stock
     * @return Producto
     */
    public function setLimiteStock($limiteStock)
    {
        $this->limiteStock = $limiteStock;
        return $this;
    }

    /**
     * Get limite stock
     *
     * @return integer
     */
    public function getLimiteStock()
    {
        return $this->limiteStock;
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
     * Set nombre
     *
     * @param string $nombre
     * @return Producto
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        $this->slug = Util::getSlug($nombre);
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
     * Set costo
     *
     * @param string $costo
     * @return Producto
     */
    public function setCosto($costo)
    {
        $this->costo = $costo;

        return $this;
    }

    /**
     * Get costo
     *
     * @return string
     */
    public function getCosto()
    {
        return $this->costo;
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
    public function addImagene(\AppBundle\Entity\ProductoImagen $imagen)
    {
        $imagen->setProducto($this);
        $this->imagenes[] = $imagen;
        return $this;
    }

    /**
     * Remove imagenes
     *
     * @param \AppBundle\Entity\ProductoImagen $imagenes
     */
    public function removeImagene(\AppBundle\Entity\ProductoImagen $imagen)
    {
        $this->imagenes->removeElement($imagen);
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Producto
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Producto
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Categoria
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set categoria
     *
     * @param \AppBundle\Entity\Categoria $categoria
     * @return Producto
     */
    public function setCategoria(\AppBundle\Entity\Categoria $categoria = null)
    {
        $this->categoria = $categoria;
        return $this;
    }

    /**
     * Get categoria
     *
     * @return \AppBundle\Entity\Categoria
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    public function getImagenActiva()
    {
        $imagenfirst = null;
        //$img = "vino.png";
        foreach ($this->getImagenes() as $imgen) {
            if($imagenfirst == null)
                $imagenfirst = $imgen->getId() . '.' . $imgen->getExtension();
             
            if ($imgen->getPrimario()) {
                $img = $imgen->getId() . '.' . $imgen->getExtension();
            }
        }

        return $img ? $img : $imagenfirst;
    }


    /**
     * Add extencion
     *
     * @param \AppBundle\Entity\ProductoExtension $extencion
     * @return Producto
     */
    public function addExtencion(\AppBundle\Entity\ProductoExtension $extencion)
    {

        $this->extencion[] = $extencion;

        return $this;
    }

    /**
     * Remove extencion
     *
     * @param \AppBundle\Entity\ProductoExtension $extencion
     */
    public function removeExtencion(\AppBundle\Entity\ProductoExtension $extencion)
    {
        $this->extencion->removeElement($extencion);
    }

    /**
     * Get extencion
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getExtencion()
    {
        return $this->extencion;
    }

    public  function procesarMetadato(\AppBundle\Entity\MetadatoProducto $metadato, $valor){
        foreach ($this->getExtencion() as $extencion) {
            if ($extencion->getMetadatoProducto()->getId() == $metadato->getId()) {
                $extencion->setValor($valor);
                return $this;
            }
        }

        $e = new ProductoExtension();
        $this->extencion[] = $e->add($this,$metadato, $valor);;
        return $this;
    }

    /**
     * 
     * 
     */
    public function preUpload()
    {
        if(null === $this->codigo){
            $this->setCodigo($this->getId());
        }
    }
}
