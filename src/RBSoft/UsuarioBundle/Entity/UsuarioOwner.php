<?php
namespace RBSoft\UsuarioBundle\Entity;

interface UsuarioOwner
{
    /**
     * Sets the user
     *
     * @param UserInterface|null $user A user instance or null
     */
    public function setUsuario(UsuarioOwner $user = null);
}