<?php
namespace RBSoft\CartBundle\User;
/**
 * Esta interfaz se utiliza para el usuario actual de un sitio web.
 */
interface UserInterface {
  /**
   * Referencia del usuario, debe ser unico.
   * @return string reference
   */
  public function getCartUserId();

}
?>
