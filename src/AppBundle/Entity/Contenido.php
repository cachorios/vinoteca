<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Contenido
 *
 * @ORM\Table(
 *             uniqueConstraints = { @ORM\UniqueConstraint(
 *                  name = "contenido_name_idx",
 *                  columns ={"nombre"}
 *              )}
 * )
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
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $nombre
     * @ORM\Column(name="nombre", type="string", length=64)
     */
    private $nombre;
    /**
     * @var integer
     *
     * @ORM\Column(name="ubicacion", type="integer")
     */
    private $ubicacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="orden", type="integer")
     */
    private $orden;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo", type="integer")
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="contenido", type="string", length=255)
     */
    private $contenido;

    /**
     * @var string
     *
     * @ORM\Column(name="links", type="string", length=4096)
     */
    private $links;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean")
     */
    private $activo;


    public function __construct(){
        $this->activo = true;
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
     * Set contenido
     *
     * @param string $contenido
     * @return Contenido
     */
    public function setContenido($contenido)
    {
        $this->contenido = $contenido;

        return $this;
    }

    /**
     * Get contenido
     *
     * @return string 
     */
    public function getContenido()
    {
        return $this->contenido;
    }

    /**
     * Set links
     *
     * @param string $links
     * @return Contenido
     */
    public function setLinks($links)
    {
        $this->links = $links;

        return $this;
    }

    /**
     * Get links
     *
     * @return string 
     */
    public function getLinks()
    {
        return $this->links;
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

    public function __toString(){
        return $this->getNombre();
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

}
