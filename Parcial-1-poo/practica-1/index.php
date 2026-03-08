<?php
    require_once 'Usuario.php'; /*Se incluye el contenido del archivo Usuario.php, permite el acceso a las clases, funciones o variables definidas en Usuario.php*/
    $objUsuario = new Usuario('Ana Verónica Colín Lozano','anavero.colin@gmail.com'); /*Se crea una nueva instancia/objeto para la clase Usuario y se le proveen parámetros*/
    echo '<p>Nombre: ' . $objUsuario->getNombre() . '</p>'; /*Mostrará el nombre de usuario almacenado */
    echo '<p>Correo: ' . $objUsuario->getCorreo() . '</p>'; /*Mostrará el correo almacenado  */
?>

