<?php

namespace AppBundle\Manager;

use AppBundle\Entity\Producto;
use AppBundle\Entity\ProductoImagen;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class ProductoManager
{
    /** @var EntityManager */
    protected $em;

    protected $tokenStorage;

    protected $requestStack;

    public function __construct(
        EntityManager $em,
        TokenStorageInterface $tokenStorage,
        RequestStack $requestStack
    )
    {
        $this->em = $em;
        $this->tokenStorage = $tokenStorage;
        $this->requestStack = $requestStack;
    }

    public function getList()
    {
        $queryBuilder = $this->em->getRepository('AppBundle:Producto')->ListAll();
        return $queryBuilder;
    }

    public function deleteImagen(ProductoImagen $imagen)
    {
        try {
            if ($imagen->getPrimario() == true) {
                $producto = $imagen->getProducto();
                $imagenes = $producto->getImagenes();
                $temp = $imagenes[0];
                $temp->setPrimario(true);
                $this->em->persist($temp);
            }
            $this->em->remove($imagen);
            $this->em->flush();
            $mensage = 'app.producto.imagen.borrado';
        } catch (ProcessFileException $e) {
            $mensage = $e;
        }
        return $mensage;
    }

    public function imagenSelectPrimaria(ProductoImagen $imagen)
    {
        $producto = $imagen->getProducto();
        //Recorro la colleccion y marco como primario la imagen seleccionada.
        foreach ($producto->getImagenes() as $img) {
            if ($img->getId() == $imagen->getId()) {
                $img->setPrimario(true);
            } else {
                $img->setPrimario(false);
            }
            $this->em->persist($img);
        }
        try {
            $this->em->flush();
            $mensage = 'app.producto.imagen.actualizado';
        } catch (ProcessFileException $e) {
            $mensage = $e;
        }
        return $mensage;

    }

}
