<?php
    require_once 'Admin.php'; /*Se incluye el contenido del archivo Admin.php, permite el acceso a las clases, funciones o variables definidas en Usuario.php*/
    $objAdmin = new Admin('Ana Verónica Colín Lozano','anavero.colin@gmail.com'); /*Se crea una nueva instancia/objeto para la clase Admin y se le proveen parámetros*/
    echo '<p>Nombre: ' . $objAdmin->getNombre() . '</p>'; /*Mostrará el nombre de usuario almacenado */
    echo '<p>Correo: ' . $objAdmin->getCorreo() . '</p>'; /*Mostrará el correo de usuario almacenado */
    echo '<p>Rol: ' . $objAdmin->getRol() . '</p>'; /*Llama al método getRol y nos regresa el rola asociado con el usuario admin*/
?>


