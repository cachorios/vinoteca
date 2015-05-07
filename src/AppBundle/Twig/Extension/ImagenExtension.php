<?php
/**
 * Created by PhpStorm.
 * User: beto
 * Date: 12/01/2015
 * Time: 10:35
 */
namespace AppBundle\Twig\Extension;


use AppBundle\Entity\ProductoImagen;
use Gregwar\ImageBundle\Services\ImageHandling;

class ImagenExtension  extends \Twig_Extension
{

    protected $em;
    private $imageHandling;

    public function __construct(ImageHandling $imageHandling, \Doctrine\ORM\EntityManager $em)
    {
        $this->em = $em;
        $this->imageHandling = $imageHandling;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions() {
        return array(
            'imagenFull' => new \Twig_Function_Method($this, 'imagenFull'),
            'imagenMin' => new \Twig_Function_Method($this, 'imagenMin')
        );
    }

    /**
     * @param string $string
     * @return string
     */
    public function imagenFull($id)
    {
        if($id == null)
            return "#";
        $imagen = $this->buscarImagen($id);
        return $imagen->getWebPath();
    }

    /**
     * @param string $string
     * @return string
     */
    public function imagenMin($id)
    {
        if($id == null)
            return "#";
        $imagen = $this->buscarImagen($id);
        $a = $this->imageHandling->open($imagen->getAbsolutePath())->resize(90,160);
        return $a;
    }


    private function buscarImagen($id){
        return $this->em->getRepository('AppBundle:ProductoImagen')->find($id);
    }

    public function getName()
    {
        return 'producto_imagen';
    }

} 