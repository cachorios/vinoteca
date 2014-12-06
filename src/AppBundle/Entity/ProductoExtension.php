<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductoExtension
 *
 * @ORM\Table(name="producto_extension")
 * @ORM\Entity
 */
class ProductoExtension
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
     * @var AppBundle:Producto
     * @ORM\ManyToOne(targetEntity="AppBundle:Producto")
     */
    private $producto;

    /**
     * @var AppBundle:MetadatoProducto
     * @ORM\ManyToOne(targetEntity="AppBundle:MetadatoProducto")
     */
    private $metadatoProductoId;

    /**
     * @var string
     * @ORM\Column(name = "valor", type="Text" )
     */
    private $valor;


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
     * Set valor
     *
     * @param \Text $valor
     * @return ProductoExtension
     */
    public function setValor(\Text $valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return \Text 
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set producto
     *
     * @param \AppBundle\Entity\Producto $producto
     * @return ProductoExtension
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
     * Set metadatoProductoId
     *
     * @param \AppBundle\Entity\MetadatoProducto $metadatoProductoId
     * @return ProductoExtension
     */
    public function setMetadatoProductoId(\AppBundle\Entity\MetadatoProducto $metadatoProductoId = null)
    {
        $this->metadatoProductoId = $metadatoProductoId;

        return $this;
    }

    /**
     * Get metadatoProductoId
     *
     * @return \AppBundle\Entity\MetadatoProducto
     */
    public function getMetadatoProductoId()
    {
        return $this->metadatoProductoId;
    }
}
