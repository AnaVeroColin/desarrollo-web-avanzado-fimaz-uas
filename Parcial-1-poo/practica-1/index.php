<?php
    include 'Usuario.php';
    $objUsuario = new Usuario('Ana Verónica Colín Lozano','anavero.colin@gmail.com');
    echo '<p>Nombre: ' . $objUsuario->getNombre() . '</p>';
    echo '<p>Correo: ' . $objUsuario->getCorreo() . '</p>';
?>


