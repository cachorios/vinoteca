<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=70)
     */
    private $nombre;

    /**
     * @var boolean
     *
     * @ORM\Column(name="filtrable", type="boolean")
     */
    private $filtrable;

    /**
     * @var integer
     *
     * @ORM\Column(name="orden", type="integer")
     */
    private $orden;

    /**
     * @var array
     *
     * @ORM\Column(name="lista_valores", type="text")
     */
    private $listaValores;

    /**
     * @ORM\ManyToOne(targetEntity="Categoria", inversedBy="metadatos")
     * @ORM\JoinColumn(name="categoria_id", referencedColumnName="id")
     */
    private $categoria;


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
}
