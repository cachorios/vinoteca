<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use RBSoft\UtilidadBundle\Libs\Util;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Contenido
 *
 * @ORM\Table(name="contenido", uniqueConstraints={@ORM\UniqueConstraint(name="contenido_name_idx", columns={"nombre"})})
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ContenidoRepository")
 *
 * @UniqueEntity(fields={"nombre"},
 *     errorPath="nombre",
 *     message="Ya existe contenido con el mismo nombre.")
 */
class Contenido
{
    static $UBICACIONES = array("Inicio", "Producto");
    static $TIPO_CONTENIDOS = array('Carrusel','1 Imagen','2 Imagen','3 Imagen','Acción');
    /**
     * @var integer
     *
     * @ORM\Column(type="integer", name="id")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $nombre
     * @ORM\Column(type="string", length=64, nullable=true, name="nombre")
     */
    private $nombre;
    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="ubicacion")
     */
    private $ubicacion;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="orden")
     */
    private $orden;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="tipo")
     */
    private $tipo;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=true, name="activo")
     */
    private $activo;

    /**
     * @ORM\OneToMany(
     *      targetEntity="AppBundle\Entity\ContenidoDetalle",
     *      mappedBy="contenido",
     *      cascade={"persist"}
     *  )
     * @ORM\OrderBy({"orden"="ASC"})
     */
    private $contenidoDetalle;




    public function __construct(){
        $this->contenidoDetalle = new \Doctrine\Common\Collections\ArrayCollection();
        $this->activo = true;
    }


    public function __toString(){
        return $this->nombre;
    }

    public function getUbicacionString($i){
        if(isset(self::$UBICACIONES[$i]))
            return self::$UBICACIONES[$i];
        else
            return $i;
    }

    public function getTipoString($i){
        if(isset(self::$TIPO_CONTENIDOS[$i]))
            return self::$TIPO_CONTENIDOS[$i];
        else
            return $i;
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
     * @return Contenido
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
     * Set ubicacion
     *
     * @param integer $ubicacion
     * @return Contenido
     */
    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;

        return $this;
    }

    /**
     * Get ubicacion
     *
     * @return integer 
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     * @return Contenido
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
     * Set tipo
     *
     * @param integer $tipo
     * @return Contenido
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return Contenido
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
     * Add contenidoDetalle
     *
     * @param \AppBundle\Entity\ContenidoDetalle $contenidoDetalle
     * @return Contenido
     */
    public function addContenidoDetalle(\AppBundle\Entity\ContenidoDetalle $contenidoDetalle)
    {
        $contenidoDetalle->setContenido($this);
        $this->contenidoDetalle[] = $contenidoDetalle;

        return $this;
    }

    /**
     * Remove contenidoDetalle
     *
     * @param \AppBundle\Entity\ContenidoDetalle $contenidoDetalle
     */
    public function removeContenidoDetalle(\AppBundle\Entity\ContenidoDetalle $contenidoDetalle)
    {
        $this->contenidoDetalle->removeElement($contenidoDetalle);
        return;
    }

    /**
     * Get contenidoDetalle
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getContenidoDetalle()
    {
        return $this->contenidoDetalle;
    }


    public function upload($dir){
        foreach($this->getContenidoDetalle() as $det){
            $det->upload( Util::getSlug($this->getNombre()) ,$dir);
        }
    }
}
