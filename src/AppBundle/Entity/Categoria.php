<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use RBSoft\UsuarioBundle\Entity\SecureControl;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use RBSoft\UtilidadBundle\Libs\Util;

use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use Symfony\Component\Validator\Constraints as Assert;
use RBSoft\UsuarioBundle\Entity\Usuario;

/**
 * Categoria
 *
 * @ORM\Table(name="categoria")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\CategoriaRepository")
 * @DoctrineAssert\UniqueEntity(fields="nombre", message="categoria.nombre.duplicated")
 */
class Categoria implements SecureControl
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
     * @ORM\Column(type="string", length=70, nullable=true, name="nombre")
     * @Assert\NotBlank()
     * @Assert\Length(max = 70)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $slug;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(type="text", nullable=true, name="descripcion")
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="orden")
     *
     */
    private $orden = 0;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="level")
     *
     */
    private $level;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="root")
     *
     */
    private $root;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Categoria", mappedBy="parent")
     **/
    private $children;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Categoria", inversedBy="children")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id", onDelete="CASCADE")
     **/
    private $parent;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=true, name="activo")
     */
    private $activo = true;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=true, name="visible")
     */
    private $visible = true;

    /**
     * @ORM\OneToMany(
     *     targetEntity="AppBundle\Entity\MetadatoProducto",
     *     mappedBy="categoria",
     *     cascade={"persist","remove"}
     * )
     * @ORM\OrderBy({"orden"="ASC"})
     */
    private $metadatos;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $imagen;

    /**
     * @ORM\Column(type="datetime", nullable=false, name="updated_at")
     */
    private $updatedAt;

    /**
     * @ORM\ManyToOne(targetEntity="RBSoft\UsuarioBundle\Entity\Usuario")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     */
    private $usuario;

    public function __toString()
    {
        return $this->getNombre();
    }

    //para la vistas
    public function getNodeNombre(){
        return str_repeat("--",$this->level) . " " .$this->getNombre();
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->metadatos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombre
     *
     * @param string $nombre
     * @return Categoria
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
     * Set orden
     *
     * @param integer $orden
     * @return Categoria
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return integer 
     */
    public function getOrden()
    {
        return $this->orden;
    }

    /**
     * Set level
     *
     * @param integer $level
     * @return Categoria
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer 
     */
    public function getLevel()
    {
        return $this->level;
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
     * Set root
     *
     * @param integer $root
     * @return Categoria
     */
    public function setRoot($root)
    {
        $this->root = $root;

        return $this;
    }

    /**
     * Get root
     *
     * @return integer 
     */
    public function getRoot()
    {
        return $this->root;
    }

    /**
     * Add children
     *
     * @param \AppBundle\Entity\Category $children
     * @return Categoria
     */
    public function addChild(Categoria $children)
    {
        $this->children[] = $children;

        return $this;
    }

    /**
     * Remove children
     *
     * @param \AppBundle\Entity\Category $children
     */
    public function removeChild(Categoria $children)
    {
        $this->children->removeElement($children);
    }

    /**
     * Get children
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Set parent
     *
     * @param \AppBundle\Entity\Categoria $parent
     * @return Categoria
     */
    public function setParent(Categoria $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \AppBundle\Entity\Categoria 
     */
    public function getParent()
    {
        return $this->parent;
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
     * Set visible
     *
     * @param boolean $visible
     * @return Producto
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible
     *
     * @return boolean
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**

     * Set
     * Solo para el fixture
     * Sacar cuando no se use mas
     */
    public function setId($id)
    {
        $this->id = $id;
    }
        /*
     * Add metadatos
     *
     * @param \AppBundle\Entity\MetadatoProducto $metadatos
     * @return Categoria
     */
    public function addMetadato(\AppBundle\Entity\MetadatoProducto $metadatos)
    {
        $metadatos->setCategoria($this);
        $this->metadatos[] = $metadatos;
        return $this;
    }

    /**
     * Remove metadatos
     *
     * @param \AppBundle\Entity\MetadatoProducto $metadatos
     */
    public function removeMetadato(\AppBundle\Entity\MetadatoProducto $metadatos)
    {
        $this->metadatos->removeElement($metadatos);
    }


    /**
     * Get metadatos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMetadatos()
    {
        return $this->metadatos;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Categoria
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
     * Set imagen
     *
     * @param string $imagen
     * @return Categoria
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    
        return $this;
    }

    /**
     * Get imagen
     *
     * @return string 
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Categoria
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

    public function upload($dir)
    {
        if (null === $this->getImagen()) {
            if(file_exists($dir.$this->getSlug().'.jpg'))
                unlink($dir.$this->getSlug().'.jpg');
            return;
        }

        if(file_exists($dir.$this->getSlug().'.'.$this->getImagen()->getClientOriginalExtension()))
            unlink($dir.$this->getSlug().'.'.$this->getImagen()->getClientOriginalExtension());

        $this->getImagen()->move(
            $dir,
            $this->getSlug().'.'.$this->getImagen()->getClientOriginalExtension()
        );

        $this->imagen = $this->getSlug().'.'.$this->getImagen()->getClientOriginalExtension();
    }

    public function getStrAscentendeCategoria(Categoria $cat = null , $separador = " / ")
    {
        if($cat == null){
            $cat=$this;
        }

        $cad = $cat->getNombre();
        if ($cat->getParent()) {
            $cad = $this->getStrAscentendeCategoria($cat->getParent(), $separador) . $separador . $cad;
        }
        return $cad;
    }

//    public function isImagenValid(ExecutionContextInterface $context)
//    {
//        if (is_null($this->getId()) && is_null($context)) {
//            $context->addViolationAt('No dispone de imagen seleccionada', array(), null);
//        }
//    }
}
