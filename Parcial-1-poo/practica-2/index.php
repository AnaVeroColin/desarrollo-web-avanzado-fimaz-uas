<?php
    require_once 'Admin.php';
    $objAdmin = new Admin('Ana Verónica Colín Lozano','anavero.colin@gmail.com');
    echo '<p>Nombre: ' . $objAdmin->getNombre() . '</p>';
    echo '<p>Correo: ' . $objAdmin->getCorreo() . '</p>';
    echo '<p>Rol: ' . $objAdmin->getRol() . '</p>';
?>


