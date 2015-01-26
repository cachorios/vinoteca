<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductoBonificacion
 *
 * @ORM\Table(name="producto_bonificacion")
 * @ORM\Entity
 */
class ProductoBonificacion
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
     * @ORM\Column(name="unidad", type="integer")
     */
    private $unidad;

    /**
     * @var float
     *
     * @ORM\Column(type="decimal", scale=2)
     */
    private $valor;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="integer")
     */
    private $tipo;

    /**
     * @ORM\ManyToOne(targetEntity="Producto", inversedBy="bonificaciones")
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
     * Set unidad
     *
     * @param integer $unidad
     * @return ProductoBonificacion
     */
    public function setUnidad($unidad)
    {
        $this->unidad = $unidad;
    
        return $this;
    }

    /**
     * Get unidad
     *
     * @return integer 
     */
    public function getUnidad()
    {
        return $this->unidad;
    }

    /**
     * Set valor
     *
     * @param float $valor
     * @return ProductoBonificacion
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    
        return $this;
    }

    /**
     * Get valor
     *
     * @return float 
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return ProductoBonificacion
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    
        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set producto
     *
     * @param \AppBundle\Entity\Producto $producto
     * @return ProductoBonificacion
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