<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * @ORM\Table(name="contenido_detalle")
 * @ORM\Entity
 */
class ContenidoDetalle
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $orden;

    /**
     * @ORM\Column(nullable=false)
     */
    private $imagen;

    /**
     * @ORM\Column(nullable=false)
     */
    private $link;

    /**
     * @ORM\ManyToOne(
     *      targetEntity="AppBundle\Entity\Contenido",
     *      inversedBy="contenidoDetalle", cascade={"detach"}
     * )
     * @ORM\JoinColumn(
     *      name="contenido_id",
     *      referencedColumnName="id")
     */
    private $contenido;


    /**
     * Constructor
     */
    public function __construct()
    {

        $this->setOrden(0);
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
     * @return ContenidoDetalle
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
     * Set imagen
     *
     * @param string $imagen
     * @return ContenidoDetalle
     */
    public function setImagen($imagen)
    {
        if($imagen)
            $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set link
     *
     * @param string $link
     * @return ContenidoDetalle
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set contenido
     *
     * @param \AppBundle\Entity\Contenido $contenido
     * @return ContenidoDetalle
     */
    public function setContenido(\AppBundle\Entity\Contenido $contenido = null)
    {
        $this->contenido = $contenido;

        return $this;
    }

    /**
     * Get contenido
     *
     * @return \AppBundle\Entity\Contenido
     */
    public function getContenido()
    {
        return $this->contenido;
    }

    public function upload($nombre, $dir)
    {

        if ( !$this->getImagen() instanceof UploadedFile ) {
//            if(file_exists($dir.$nombre.'-'.$this->getOrden().'.jpg'))
//                unlink($dir.$nombre.'-'.$this->getOrden().'.jpg');
            return;
        }
        $filename = uniqid($nombre.'-' ).'.'.$this->getImagen()->getClientOriginalExtension();
        if (file_exists($dir.$filename)) {
            unlink($dir.$filename);
        }

        $this->getImagen()->move(
            $dir,
            $filename
        );

        $this->imagen = $filename;
    }

    public function __toString()
    {
        return $this->getImagen();
    }
}