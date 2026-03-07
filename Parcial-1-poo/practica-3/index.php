<?php
    require_once 'clases/Admin.php';
    require_once 'clases/Alumno.php';
    
    try {
    $objAlumno = new Alumno('Ana Verónica Colín Lozano','anavero.colin@gmail.com', '22571644');
    echo '<br>Nombre: ' . $objAlumno->getNombre() . '</br>';
    echo '<br>Correo: ' . $objAlumno->getCorreo() . '</br>';
    echo '<br>Matrícula: ' . $objAlumno->getMatricula() . '</br>';
    echo '<br>Rol: ' . $objAlumno->getRol() . '</br>'; }
        catch (Exception $e) {
        echo '<br>Error: ' . $e->getMessage() . '</br>';
    }
    try {
    $objAdmin = new Admin('Brenda Sofía Colín Lozano','brendasofia.colin@gmail.com') ;
    echo '<br>Nombre: ' . $objAdmin->getNombre() . '</br>';
    echo '<br>Correo: ' . $objAdmin->getCorreo() . '</br>';
    echo '<br>Rol: ' . $objAdmin->getRol() . '</br>'; }
        catch (Exception $e) {
        echo '<br>Error: ' . $e->getMessage() . '</br>';
    }

    try {
    $objInvalido1 = new Alumno('Berenice Lozano Soto','berenice.lozano', '19720316');
    echo '<br>Nombre: ' . $objInvalido1->getNombre() . '</br>';
    echo '<br>Correo: ' . $objInvalido1->getCorreo() . '</br>';
    echo '<br>Matrícula: ' . $objInvalido1->getMatricula() . '</br>';
    echo '<br>Rol: ' . $objInvalido1->getRol() . '</br>'; }
    catch (Exception $e) {
    echo '<br>Error: ' . $e->getMessage() . '</br>';
    }

    try {
    $objInvalido2 = new Admin('Jolette Pucheta','Jolette@Pucheta');
    echo '<br>Nombre: ' . $objInvalido2->getNombre() . '</br>';
    echo '<br>Correo: ' . $objInvalido2->getCorreo() . '</br>';
    echo '<br>Rol: ' . $objInvalido2->getRol() . '</br>'; }
    catch (Exception $e) {
        echo '<br>Error: ' . $e->getMessage() . '</br>'; }

?>

