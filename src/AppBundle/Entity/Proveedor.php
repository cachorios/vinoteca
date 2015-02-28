<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use Symfony\Component\Validator\Constraints as Assert;
use RBSoft\UtilidadBundle\Validator\Constraints as UtilidadAssert;

/**
 * Proveedor
 *
 * 
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ProveedorRepository")
 */
class Proveedor
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
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=false, name="codigo")
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=150, nullable=false, name="razon_social")
     * @Assert\NotBlank()
     */
    private $razon_social;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=200, nullable=true, name="nombre_fantasia")
     */
    private $nombre_fantasia;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=8, nullable=true, name="codigo_postal")
     * @Assert\NotBlank()
     */
    private $codigo_postal;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=11, nullable=false, name="cuit")
     * @Assert\Regex("/^[0-9_]+$/")
     * @UtilidadAssert\ContainsCuitValido()
     */
    private $cuit;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=1, nullable=false, name="letra_comprobante")
     */
    private $letra_comprobante;

    /**
     * @var string
     *
<<<<<<< HEAD
     * @ORM\Column(type="string", length=100, nullable=true, name="correo_compra")
=======
     * @ORM\Column(name="correo_compra", type="string", length=100)
     * @Assert\Email(
     *     message = "El email '{{ value }}' no es valido.",
     *     checkMX = false
     * )
>>>>>>> 2c814403f6864129788df3f92248eace14173b2b
     */
    private $correo_compra;

    /**
     * @var string
     *
<<<<<<< HEAD
     * @ORM\Column(type="string", length=100, nullable=true, name="correo_pago")
=======
     * @ORM\Column(name="correo_pago", type="string", length=100)
     * @Assert\Email(
     *     message = "El email '{{ value }}' no es valido.",
     *     checkMX = false
     * )
>>>>>>> 2c814403f6864129788df3f92248eace14173b2b
     */
    private $correo_pago;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=false, name="domicilio")
     * @Assert\NotBlank()
     */
    private $domicilio;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=1, nullable=false, name="moneda")
     */
    private $moneda;

    /**
     * @var string
     *
     * @ORM\Column(type="float", nullable=false, name="limite_credito")
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
     * @ORM\Column(type="string", length=150, nullable=true, name="pagina_web")
     */
    private $pagina_web;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=20, nullable=true, name="telefonos")
     * @Assert\NotBlank()
     */
    private $telefonos;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=20, nullable=true, name="fax")
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, name="cond_iva")
     */
    private $cond_iva;



}
