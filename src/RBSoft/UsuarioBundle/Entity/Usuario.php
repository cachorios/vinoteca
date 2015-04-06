<?php
/**
 * Created by PhpStorm.
 * User: cachorios
 * Date: 03/02/2015
 * Time: 6:57
 */

namespace RBSoft\UsuarioBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class Usuario extends BaseUser {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var String $nombre
     * @ORM\Column(type="string", length=64, nullable=true)
     */
    private $nombre;

    /**
    * @var String $telefono
    * @ORM\Column(type="string", length=64, nullable=true)
    */
    private $telefono;
    /**
     * @var String $movil
     * @ORM\Column(type="string", length=64, nullable=true)
     */
    private $movil;


    /**
     * @var String $foto
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $foto;


    public function __construct()
    {
        parent::__construct();
        $this->addRole("ROLE_USUARIO");
        // your own logic
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
     * @return Usuario
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
     * Set telefono
     *
     * @param string $telefono
     * @return Usuario
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
     * Set movil
     *
     * @param string $movil
     * @return Usuario
     */
    public function setMovil($movil)
    {
        $this->movil = $movil;

        return $this;
    }

    /**
     * Get movil
     *
     * @return string 
     */
    public function getMovil()
    {
        return $this->movil;
    }

    /**
     * Set foto
     *
     * @param string | UpdloadFile $foto
     * @return Usuario
     */
    public function setFoto($foto)
    {


        if($foto instanceof UploadedFile  )
            if($foto->getError() == '0'  ){
                $fileName = uniqid("user") .'.'.  $foto->getClientOriginalExtension();
                $dir = __DIR__.'/../../../../web/uploads/users';

                $foto->move($dir, $fileName  );
                $this->foto = $fileName;
            }else
                throw new \Exception("Error en imagen");

        elseif($foto)
                $this->foto = $foto;


        return $this;
    }

    /**
     * Get foto
     *
     * @return string 
     */
    public function getFoto()
    {
        return $this->foto;
    }

}
