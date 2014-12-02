<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use RBSoft\UtilidadBundle\Libs\Util;

use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Categoria
 *
 * @ORM\Table(name="categoria")
 * @ORM\Entity()
 * @DoctrineAssert\UniqueEntity(fields="nombre", message="categoria.nombre.duplicated")
 */
class Categoria
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
     * @ORM\Column(name="nombre", type="string", length=70)
     * @Assert\NotBlank()
     * @Assert\Length(max = 70)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string")
     */
    private $slug;

    /**
     * @var integer
     *
     * @ORM\Column(name="orden", type="integer")
     *
     */
    private $orden = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="level", type="integer")
     *
     */
    private $level;

    /**
     * @var integer
     *
     * @ORM\Column(name="root", type="integer")
     *
     */
    private $root;

    /**
     * @ORM\OneToMany(targetEntity="Categoria", mappedBy="parent")
     **/
    private $children;

    /**
     * @ORM\ManyToOne(targetEntity="Categoria", inversedBy="children")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id", onDelete="CASCADE")
     **/
    private $parent;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean")
     */
    private $activo = true;

    /**
     * @var boolean
     *
     * @ORM\Column(name="visible", type="boolean")
     */
    private $visible = true;

    public function __toString()
    {
        return $this->getNombre();
    }
    /**sf c
     * Constructor
     */
    public function __construct()
    {
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
    public function setId($id){
        $this->id = $id;
    }
}
