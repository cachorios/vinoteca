<?php
/**
 * Created by PhpStorm.
 * User: cacho
 * Date: 24/05/14
 * Time: 22:21
 */

namespace RBSoft\UsuarioBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use RBSoft\UsuarioBundle\Entity\Usuario;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
//use Symfony\Component\Finder\Finder;

class Usuarios extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    private $container;

    public function getOrder()
    {
        return 101;
    }

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $usuarios = array(
            array('activo' => true, 'login' => 'cachorios', 'nombre' => 'Luis Rios', 'email' => 'cachorios@gmail.com'),
            array('activo' => true, 'login' => 'albertoe2003', 'nombre' => 'Albero Voeffray', 'email' => 'albertoe2003@gmail.com'),
            array('activo' => true, 'login' => 'rhfalero', 'nombre' => 'Raul H. Falero', 'email' => 'rhfalero@gmail.com'),
            array('activo' => true, 'login' => 'fabbrizuela', 'nombre' => 'Gallina Prolija', 'email' => 'fabbrizuela@hotmail.com'),
            array('activo' => true, 'login' => 'hectorhdc', 'nombre' => 'Hector Cabrera', 'email' => 'hector.d.cabrera@gmail.com'),
            array('activo' => true, 'login' => 'nibecortla', 'nombre' => 'Nicolas Bertolotti', 'email' => 'nicobertti@gmail.com'),
            array('activo' => true, 'login' => 'lmanfredini', 'nombre' => 'Luis Manfredini', 'email' => 'lmanfredini@cabanawanfried.com.ar'),
        );

        foreach ($usuarios as $usu) {
            $usuario = new Usuario();


            $usuario->setLogin($usu['login']);
            $usuario->setNombre($usu['nombre']);
            $usuario->setEmail($usu['email']);
            $usuario->setActivo($usu['activo']);

//            $salt = md5(time());
//            $encoder = $this->container->get('security.encoder_factory')
//                        ->getEncoder($usuario);

            $password = $usu['login'];
//            $password = $encoder->encodePassword($password , $salt);
//
//
            $usuario->setPassword($password);
//            $usuario->setSalt($salt);

            $manager->persist($usuario);
        }


        $manager->flush();



    }
}
