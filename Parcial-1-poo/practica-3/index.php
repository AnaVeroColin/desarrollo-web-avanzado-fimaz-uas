<?php
    require_once 'clases/Admin.php'; /*Se incluye el contenido del archivo Admin.php, permite el acceso a las clases, funciones o variables definidas en Usuario.php*/
    require_once 'clases/Alumno.php'; /*Se incluye el contenido del archivo Alumno.php, permite el acceso a las clases, funciones o variables definidas en Usuario.php*/
    
    try { /*Bloque para la gestión de excepciones. Si se generla una excepción dentro del bloque se puede capturar y gestionar con catch*/
    $objAlumno = new Alumno('Ana Verónica Colín Lozano','anavero.colin@gmail.com', /*Se crea una nueva instancia/objeto para la clase Alumno y se le proveen parámetros*/'22571644');
    echo '<br>Nombre: ' . $objAlumno->getNombre() . '</br>';
    echo '<br>Correo: ' . $objAlumno->getCorreo() . '</br>';
    echo '<br>Matrícula: ' . $objAlumno->getMatricula() . '</br>';
    echo '<br>Rol: ' . $objAlumno->getRol() . '</br>'; }
        catch (Exception $e) {
        echo '<br>Error: ' . $e->getMessage() . '</br>';
    }
    try {
    $objAdmin = new Admin('Brenda Sofía Colín Lozano','brendasofia.colin@gmail.com') ; /*Se crea una nueva instancia/objeto para la clase Admin y se le proveen parámetros*/
    echo '<br>Nombre: ' . $objAdmin->getNombre() . '</br>';
    echo '<br>Correo: ' . $objAdmin->getCorreo() . '</br>';
    echo '<br>Rol: ' . $objAdmin->getRol() . '</br>'; }
        catch (Exception $e) {
        echo '<br>Error: ' . $e->getMessage() . '</br>';
    }

    try {
    $objInvalido1 = new Alumno('Berenice Lozano Soto','berenice.lozano', '19720316'); /*Se crea una nuvea instancia de Alumno con datos inválidos con el propósito de probar la validación y el catch*/
    echo '<br>Nombre: ' . $objInvalido1->getNombre() . '</br>';
    echo '<br>Correo: ' . $objInvalido1->getCorreo() . '</br>';
    echo '<br>Matrícula: ' . $objInvalido1->getMatricula() . '</br>';
    echo '<br>Rol: ' . $objInvalido1->getRol() . '</br>'; }
    catch (Exception $e) {
    echo '<br>Error: ' . $e->getMessage() . '</br>';
    }

    try {
    $objInvalido2 = new Admin('Jolette Pucheta','Jolette@Pucheta'); /*Se crea una nuvea instancia de Admin con datos inválidos con el propósito de probar la validación y el catch*/
    echo '<br>Nombre: ' . $objInvalido2->getNombre() . '</br>';
    echo '<br>Correo: ' . $objInvalido2->getCorreo() . '</br>';
    echo '<br>Rol: ' . $objInvalido2->getRol() . '</br>'; }
    catch (Exception $e) {
        echo '<br>Error: ' . $e->getMessage() . '</br>'; }

?>

