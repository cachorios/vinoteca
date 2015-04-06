<?php

namespace AppBundle\Entity\Configuracion;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * General
 *
 * @ORM\Table(name="config_empresa")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Configuracion\EmpresaRepository")
 */
class Empresa
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
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=50)
     * @Assert\NotBlank()
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="metaDescripcion", type="text")
     * @Assert\NotBlank()
     */
    private $metaDescripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="metaPalabrasClave", type="text")
     * @Assert\NotBlank()
     */
    private $metaPalabrasClave;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="eMail", type="string", length=150)
     * @Assert\NotBlank()
     */
    private $eMail;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=50)
     * @Assert\NotBlank()
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=50)
     * @Assert\NotBlank()
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="localidad", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $localidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="moneda", type="integer")
     * @Assert\NotBlank()
     */
    private $moneda;

    /**
     * @var String $logo
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $logo;

    /**
     * @var String $icono
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $icono;

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
     * @return General
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
     * Set titulo
     *
     * @param string $titulo
     * @return General
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set metaDescripcion
     *
     * @param string $metaDescripcion
     * @return General
     */
    public function setMetaDescripcion($metaDescripcion)
    {
        $this->metaDescripcion = $metaDescripcion;

        return $this;
    }

    /**
     * Get metaDescripcion
     *
     * @return string 
     */
    public function getMetaDescripcion()
    {
        return $this->metaDescripcion;
    }

    /**
     * Set metaPalabrasClave
     *
     * @param string $metaPalabrasClave
     * @return General
     */
    public function setMetaPalabrasClave($metaPalabrasClave)
    {
        $this->metaPalabrasClave = $metaPalabrasClave;

        return $this;
    }

    /**
     * Get metaPalabrasClave
     *
     * @return string 
     */
    public function getMetaPalabrasClave()
    {
        return $this->metaPalabrasClave;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return General
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set eMail
     *
     * @param string $eMail
     * @return General
     */
    public function setEMail($eMail)
    {
        $this->eMail = $eMail;

        return $this;
    }

    /**
     * Get eMail
     *
     * @return string 
     */
    public function getEMail()
    {
        return $this->eMail;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return General
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return General
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set localidad
     *
     * @param string $localidad
     * @return General
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad
     *
     * @return string 
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set moneda
     *
     * @param integer $moneda
     * @return General
     */
    public function setMoneda($moneda)
    {
        $this->moneda = $moneda;

        return $this;
    }

    /**
     * Get moneda
     *
     * @return integer 
     */
    public function getMoneda()
    {
        return $this->moneda;
    }

    /**
     * Set icono
     *
     * @param string | UpdloadFile $icono
     * @return Empresa
     */
    public function setIcono($icono)
    {
        if($icono instanceof UploadedFile  )
            if($icono->getError() == '0'  ){
                $fileName = "favicon.ico";
                $dir = __DIR__.'/../../../../web';

                $icono->move($dir, $fileName  );
                $this->icono = $fileName;
            }else
                throw new \Exception("Error en imagen");

        elseif($icono)
            $this->icono = $icono;

        return $this;
    }

    /**
     * Get icono
     *
     * @return string
     */
    public function getIcono()
    {
        return $this->icono;
    }

    /**
     * Set logo
     *
     * @param string | UpdloadFile $logo
     * @return Empresa
     */
    public function setLogo($logo)
    {
        if($logo instanceof UploadedFile  )
            if($logo->getError() == '0'  ){
                $fileName = "logo.png";
                $dir = __DIR__.'/../../../../web';

                $logo->move($dir, $fileName  );
                $this->logo = $fileName;
            }else
                throw new \Exception("Error en imagen");

        elseif($logo)
            $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }
}
