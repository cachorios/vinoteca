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
     * @ORM\ManyToOne(targetEntity="Producto", inversedBy="extencion")
     */
    private $producto;

    /**
     * @var MetadatoProducto
     * @ORM\ManyToOne(targetEntity="MetadatoProducto")
     */
    private $metadatoProducto;

    /**
     * @var string
     * @ORM\Column(name = "valor", type="text" )
     */
    private $valor;

    /**
     * Constructor
     */
    public function __construct(\AppBundle\Entity\Producto $producto, \AppBundle\Entity\MetadatoProducto $metadatoProducto, $valor)
    {

        $this->setMetadatoProducto($metadatoProducto);
        $this->setProducto($producto);
        $this->setValor($valor);

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
     * Set metadatoProducto
     *
     * @param \AppBundle\Entity\MetadatoProducto $metadatoProducto
     * @return ProductoExtension
     */
    public function setMetadatoProducto(\AppBundle\Entity\MetadatoProducto $metadatoProducto = null)
    {
        $this->metadatoProducto = $metadatoProducto;

        return $this;
    }

    /**
     * Get metadatoProducto
     *
     * @return \AppBundle\Entity\MetadatoProducto 
     */
    public function getMetadatoProducto()
    {
        return $this->metadatoProducto;
    }

    /**
     * Set valor
     *
     * @param string $valor
     * @return ProductoExtension
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return string 
     */
    public function getValor()
    {
        return $this->valor;
    }
}
