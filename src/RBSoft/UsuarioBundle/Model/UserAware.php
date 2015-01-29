<?php
namespace RBSoft\UsuarioBundle\Model;

interface UserAware
{
    /**
     * Sets the user
     *
     * @param UserInterface|null $user A user instance or null
     */
    public function setUser(UserInterface $user = null);
}