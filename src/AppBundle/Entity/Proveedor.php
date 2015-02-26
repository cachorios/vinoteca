<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use Symfony\Component\Validator\Constraints as Assert;
use RBSoft\UtilidadBundle\Validator\Constraints as UtilidadAssert;

/**
 * Proveedor
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ProveedorRepository")
 */
class Proveedor
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
     * @ORM\Column(name="codigo", type="integer", nullable=false)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="razon_social", type="string", length=150, nullable=false)
     * @Assert\NotBlank()
     */
    private $razon_social;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_fantasia", type="string", length=200)
     */
    private $nombre_fantasia;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_postal", type="string", length=8)
     * @Assert\NotBlank()
     */
    private $codigo_postal;

    /**
     * @var string
     *
     * @ORM\Column(name="cuit", type="string", length=11, nullable=false)
     * @Assert\Regex("/^[0-9_]+$/")
     * @UtilidadAssert\ContainsCuitValido()
     */
    private $cuit;

    /**
     * @var string
     *
     * @ORM\Column(name="letra_comprobante", type="string", length=1, nullable=false)
     */
    private $letra_comprobante;

    /**
     * @var string
     *
     * @ORM\Column(name="correo_compra", type="string", length=100)
     * @Assert\Email(
     *     message = "El email '{{ value }}' no es valido.",
     *     checkMX = false
     * )
     */
    private $correo_compra;

    /**
     * @var string
     *
     * @ORM\Column(name="correo_pago", type="string", length=100)
     * @Assert\Email(
     *     message = "El email '{{ value }}' no es valido.",
     *     checkMX = false
     * )
     */
    private $correo_pago;

    /**
     * @var string
     *
     * @ORM\Column(name="domicilio", type="string", length=255, nullable=false)
     * @Assert\NotBlank()
     */
    private $domicilio;

    /**
     * @var string
     *
     * @ORM\Column(name="moneda", type="string", length=1, nullable=false)
     */
    private $moneda;

    /**
     * @var string
     *
     * @ORM\Column(name="limite_credito", type="float", nullable=false)
     */
    private $limite_credito;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_pago", type="integer")
     */
    private $tipo_pago;

    /**
     * @var string
     *
     * @ORM\Column(name="pagina_web", type="string", length=150)
     */
    private $pagina_web;

    /**
     * @var string
     *
     * @ORM\Column(name="telefonos", type="string", length=20)
     * @Assert\NotBlank()
     */
    private $telefonos;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=20)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="cond_iva", type="string", length=255)
     */
    private $cond_iva;



}
