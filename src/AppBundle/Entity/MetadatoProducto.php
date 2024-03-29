<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * MetadatoProducto
 *
 * @ORM\Table(name="metadato_producto")
 * @ORM\Entity
 */
class MetadatoProducto
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
     */
    private $nombre;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(type="text", nullable=true, name="predeterminado")
     */
    private $predeterminado;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="filtrable")
     */
    private $filtrable;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=true, name="requerido")
     */
    private $requerido = true;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="widget")
     */
    private $widget;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="orden")
     */
    private $orden = 0;


    /**
     * @var array
     *
     * @ORM\Column(type="text", nullable=true, name="lista_valores")
     */
    private $listaValores;

    /**
     * @ORM\ManyToOne(
     *      targetEntity="AppBundle\Entity\Categoria",
     *      inversedBy="metadatos")
     * @ORM\JoinColumn(name="categoria_id", referencedColumnName="id")
     */
    private $categoria;

    /**
     * Constructor
     */
    public function __construct()
    {
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
     * @return MetadatoProducto
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
     * Set filtrable
     *
     * @param boolean $filtrable
     * @return MetadatoProducto
     */
    public function setFiltrable($filtrable)
    {
        $this->filtrable = $filtrable;
    
        return $this;
    }

    /**
     * Get filtrable
     *
     * @return boolean 
     */
    public function getFiltrable()
    {
        return $this->filtrable;
    }

    /**
     * Set widget
     *
     * @param boolean $widget
     * @return MetadatoProducto
     */
    public function setWidget($widget)
    {
        $this->widget = $widget;

        return $this;
    }

    /**
     * Get widget
     *
     * @return integer
     */
    public function getWidget()
    {
        return $this->widget;
    }

    /**
     * Set requerido
     *
     * @param boolean $requerido
     * @return MetadatoProducto
     */
    public function setRequerido($requerido)
    {
        $this->requerido = $requerido;

        return $this;
    }

    /**
     * Get requerido
     *
     * @return boolean
     */
    public function getRequerido()
    {
        return $this->requerido;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     * @return MetadatoProducto
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
     * Set listaValores
     *
     * @param string $listaValores
     * @return MetadatoProducto
     */
    public function setListaValores($listaValores)
    {
        $this->listaValores = $listaValores;
    
        return $this;
    }

    /**
     * Get listaValores
     *
     * @return string 
     */
    public function getListaValores()
    {
        return $this->listaValores;
    }

    /**
     * Set categoria
     *
     * @param \AppBundle\Entity\Categoria $categoria
     * @return MetadatoProducto
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

    /**
     * Set predeterminado
     *
     * @param text $predeterminado
     * @return MetadatoProducto
     */
    public function setPredeterminado($predeterminado)
    {
        $this->predeterminado = $predeterminado;

        return $this;
    }

    /**
     * Get predeterminado
     *
     * @return text
     */
    public function getPredeterminado()
    {
        return $this->predeterminado;
    }

    /**
     * Check if entity is empty.
     *
     * @return bool
     */
    public function isEmpty()
    {
        return empty($this->nombre);
    }
}
