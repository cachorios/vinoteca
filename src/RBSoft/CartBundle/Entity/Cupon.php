<?php

namespace RBSoft\CartBundle\Entity;

use AppBundle\Utils\Utils;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;

/**
 * Cupon
 *
 * @ORM\Table(name="cupon")
 * @ORM\Entity(repositoryClass="RBSoft\CartBundle\Repository\CuponRepository")
 */
class Cupon
{

    /**
    * Hook timestampable behavior
    * updates createdAt, updatedAt fields
    */
    use TimestampableEntity;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=20, unique=true)
     */
    private $codigo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="inicio", type="date")
     */
    private $inicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="vencimiento", type="date")
     */
    private $vencimiento;

    /**
     * @var int
     *
     * @ORM\Column(name="tipo", type="integer")
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="rango1", type="decimal", precision=10, scale=2)
     */
    private $rango1;

    /**
     * @var string
     *
     * @ORM\Column(name="valor1", type="decimal", precision=10, scale=2)
     */
    private $valor1;

    /**
     * @var string
     *
     * @ORM\Column(name="rango2", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $rango2;

    /**
     * @var string
     *
     * @ORM\Column(name="valor2", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $valor2;

    /**
     * @var string
     *
     * @ORM\Column(name="rango3", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $rango3;

    /**
     * @var string
     *
     * @ORM\Column(name="valor3", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $valor3;


    /**
     * Valor del cupon aplicado
     * @var string
     * @ORM\Column(name="valor", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $valor = 0;


    /**
     * @var boolean
     * @ORM\Column(name="utilizado", type="boolean")
     */
    private $utilizado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=true)
     */
    protected $enabled;


    public function __construct(){
        $this->codigo = Utils::getUniqueCode();
        $this->enabled = true;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     *
     * @return Cupon
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
     * Set inicio
     *
     * @param \DateTime $inicio
     *
     * @return Cupon
     */
    public function setInicio($inicio)
    {
        $this->inicio = $inicio;

        return $this;
    }

    /**
     * Get inicio
     *
     * @return \DateTime
     */
    public function getInicio()
    {
        return $this->inicio;
    }

    /**
     * Set vencimiento
     *
     * @param \DateTime $vencimiento
     *
     * @return Cupon
     */
    public function setVencimiento($vencimiento)
    {
        $this->vencimiento = $vencimiento;

        return $this;
    }

    /**
     * Get vencimiento
     *
     * @return \DateTime
     */
    public function getVencimiento()
    {
        return $this->vencimiento;
    }

    /**
     * Set tipo
     *
     *  el tipo es:
     *  1 -> Importe : el valor de descuenta esta en valor1
     *  2 -> Porcentaje : el porcentaje esta en valor 1
     *  3 -> Rango Importe: de  Rango 1 a Rango 2 => valor 1, >rango 2 a  rango 3 => valor 2, > rango 2 y >rango3 => valor 3
     *  4 -> Rango Porc.: de  Rango 1 a Rango 2 => valor 1, >rango 2 a  rango 3 => valor 2, > rango 2 y >rango3 => valor 3
     * @param integer $tipo
     *
     * @return Cupon
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return int
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set rango1
     *
     * @param string $rango1
     *
     * @return Cupon
     */
    public function setRango1($rango1)
    {
        $this->rango1 = $rango1;

        return $this;
    }

    /**
     * Get rango1
     *
     * @return string
     */
    public function getRango1()
    {
        return $this->rango1;
    }

    /**
     * Set valor1
     *
     * @param string $valor1
     *
     * @return Cupon
     */
    public function setValor1($valor1)
    {
        $this->valor1 = $valor1;

        return $this;
    }

    /**
     * Get valor1
     *
     * @return string
     */
    public function getValor1()
    {
        return $this->valor1;
    }

    /**
     * Set rango2
     *
     * @param string $rango2
     *
     * @return Cupon
     */
    public function setRango2($rango2)
    {
        $this->rango2 = $rango2;

        return $this;
    }

    /**
     * Get rango2
     *
     * @return string
     */
    public function getRango2()
    {
        return $this->rango2;
    }

    /**
     * Set valor2
     *
     * @param string $valor2
     *
     * @return Cupon
     */
    public function setValor2($valor2)
    {
        $this->valor2 = $valor2;

        return $this;
    }

    /**
     * Get valor2
     *
     * @return string
     */
    public function getValor2()
    {
        return $this->valor2;
    }

    /**
     * Set rango3
     *
     * @param string $rango3
     *
     * @return Cupon
     */
    public function setRango3($rango3)
    {
        $this->rango3 = $rango3;

        return $this;
    }

    /**
     * Get rango3
     *
     * @return string
     */
    public function getRango3()
    {
        return $this->rango3;
    }

    /**
     * Set valor3
     *
     * @param string $valor3
     *
     * @return Cupon
     */
    public function setValor3($valor3)
    {
        $this->valor3 = $valor3;

        return $this;
    }

    /**
     * Get valor3
     *
     * @return string
     */
    public function getValor3()
    {
        return $this->valor3;
    }

    public function __toString()
    {
        return $this->codigo;
    }

    /**
     * Set utilizado
     *
     * @param boolean $utilizado
     *
     * @return Cupon
     */
    public function setUtilizado($utilizado)
    {
        $this->utilizado = $utilizado;

        return $this;
    }

    /**
     * Get utilizado
     *
     * @return boolean
     */
    public function getUtilizado()
    {
        return $this->utilizado;
    }

    /**
     * Set valor
     *
     * @param string $valor
     *
     * @return Cupon
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

    /**
     * Set if is enabled
     *
     * @param boolean $enabled enabled value
     *
     * @return $this Self object
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get is enabled
     *
     * @return boolean is enabled
     */
    public function isEnabled()
    {
        return $this->enabled;
    }

    /**
     * Enable
     *
     * @return $this Self object
     */
    public function enable()
    {
        return $this->setEnabled(true);
    }

    /**
     * Disable
     *
     * @return $this Self object
     */
    public function disable()
    {
        return $this->setEnabled(false);
    }
}
