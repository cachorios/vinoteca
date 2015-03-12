<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * ProductoImagen
 *
 * @ORM\Table(name="producto_imagen")
 * @ORM\Entity
 * 
 */
class ProductoImagen
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
     */
    private $file;

    private $temp;
    /**
     * @var string
     *
     * @ORM\Column(type="boolean", nullable=true, name="primario")
     */
    private $primario = false;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Producto", inversedBy="imagenes")
     * @ORM\JoinColumn(name="producto_id", referencedColumnName="id")
     */
    private $producto;

    public function __toString()
    {
        return $this->getFile();
    }

    /**
     * @var string
     * @ORM\Column(type="string", length=4, nullable=true, name="extension")
     */
    private $extension;


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
     * Set primario
     *
     * @param boolean $primario
     * @return ProductoImagen
     */
    public function setPrimario($primario)
    {
        $this->primario = $primario;

        return $this;
    }

    /**
     * Get primario
     *
     * @return boolean
     */
    public function getPrimario()
    {
        return $this->primario;
    }

    /**
     * Set producto
     *
     * @param \AppBundle\Entity\Producto $producto
     * @return ProductoImagen
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
     * Set extension
     *
     * @param string $extension
     * @return ProductoImagen
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;
    }

    /**
     * Set file
     *
     * @param string $file
     * @return ProductoImagen
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->file;

    }

    /**
     * Get extension
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * 
     * 
     */
    public function preUpload()
    {
        if (null !== $this->getFile()) {
            $this->extension = $this->file->guessExtension();

            $this->temp = $this->getAbsolutePath();
        }
    }

    /**
     * 
     * 
     */
    public function upload()
    {
        if (null === $this->getFile()) {
            return;
        }

        // you must throw an exception here if the file cannot be moved
        // so that the entity is not persisted to the database
        // which the UploadedFile move() method does
        $this->getFile()->move(
            $this->getUploadRootDir(),
            $this->id . '.' . $this->getFile()->guessExtension()
        );

        $this->setFile(null);
    }

    /**
     * 
     */
    public function removeUpload()
    {
        if (isset($this->temp)) {
            unlink($this->temp);
        }
    }

    public function getAbsolutePath()
    {
        return null === $this->temp
            ? $this->getUploadRootDir() . '/' . $this->id . '.' . $this->extension
            : null;
    }

    private function getUploadRootDir()
    {
        return __DIR__.'/../../../web' . '/' . $this->getUploadDir();
    }

    public function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/productos';
    }

    public function getWebPath()
    {
        return null === $this->temp
            ? $this->getUploadDir() . '/' . $this->id . '.' . $this->extension
            : null;

    }
}
