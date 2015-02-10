<?php
namespace RBSoft\UsuarioBundle\Entity;

interface UsuarioActivo
{
    /**
     * Sets the user
     *
     * @param UserInterface|null $user A user instance or null
     */
    public function setUsuario(Usuario $user = null);
}