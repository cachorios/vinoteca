<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;


/**
 * ProductoImagen
 *
 * @ORM\Table(name="producto_imagen")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ProductoImagenRepository")
 * @ORM\HasLifecycleCallbacks()
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

    private $file = null;
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

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="orden")
     *
     */
    private $orden = 0;

    /**
     * @var integer
     */
    private $delete = false;

    /**
     * @var string
     * @ORM\Column(type="string", length=4, nullable=true, name="extension")
     */
    private $extension;

    /**
     * @ORM\Column(type="datetime", nullable=false, name="created_at")
     */
    protected $createdAt;

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
     * Get id
     *
     * @return integer
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return boolean
     */
    public function getDelete()
    {
        return $this->delete;
    }

    /**
     * Get delete
     *
     * @return boolean
     */
    public function setDelete($delete)
    {
        $this->delete = $delete;
        return $this;
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
     * Set orden
     *
     * @param integer $orden
     * @return Categoria
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
    public function setFile(UploadedFile $file)
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
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        if (null !== $this->getFile()) {
            $this->extension = $this->getFile()->guessExtension();
        }
        $this->setCreatedAt(new \DateTime('now', new \DateTimeZone('UTC')));
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        if (null === $this->getFile()) {
            return;
        }

        $this->removeUpload();

        $this->getFile()->move(
            $this->getUploadRootDir(),
            $this->id . '.' . $this->getFile()->guessExtension()
        );

        $this->file = null;
    }


    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        $t = $this->getUploadRootDir() . '/' . $this->id . '.' .  $this->extension;

        if (file_exists($t))
            unlink($t);

    }

    public function getAbsolutePath()
    {
        return null === $this->id
            ? null
            : $this->getUploadRootDir() . '/' . $this->id . '.' . $this->extension;
    }

    public function getWebPath()
    {
        return null === $this->id
            ? null
            : $this->getUploadDir() . '/' . $this->id . '.' . $this->extension;

    }

    private function getUploadRootDir()
    {
        return __DIR__ . '/../../../web' . '/' . $this->getUploadDir();
    }

    public function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/productos';
    }

    private function getNameFile()
    {
        return $this->id . '.' . $this->getFile()->guessExtension();
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Producto
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}