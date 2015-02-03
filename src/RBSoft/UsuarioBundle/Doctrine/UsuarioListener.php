<?php
/**
 * Created by PhpStorm.
 * User: beto
 * Date: 29/01/2015
 * Time: 13:13
 */

namespace RBSoft\UsuarioBundle\Doctrine;

use Symfony\Component\DependencyInjection\ContainerInterface;
use RBSoft\UsuarioBundle\Entity\UsuarioOwner;

/**
* UserCallable can be invoked to return a blameable user
* @see https://github.com/KnpLabs/DoctrineBehaviors/blob/master/src/Knp/DoctrineBehaviors/ORM/Blameable/UserCallable.php
*/
class UserCallable
{
/**
* @var ContainerInterface
*/
private $container;

public function __construct(ContainerInterface $container)
{
$this->container = $container;
}

public function __invoke()
{
$token = $this->container->get('security.context')->getToken();
if (null !== $token) {
return $token->getUser();
}
}
}