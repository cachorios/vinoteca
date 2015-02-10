<?php
namespace RBSoft\UsuarioBundle\Entity;

interface SecureControl
{
    /**
     * Sets the user
     *
     * @param UserInterface|null $user A user instance or null
     */
    public function setUsuario(Usuario $usuario);
}