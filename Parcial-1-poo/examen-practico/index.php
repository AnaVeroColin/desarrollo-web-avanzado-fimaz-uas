<?php
    require_once 'clases/Admin.php'; /*Se incluye el contenido del archivo Admin.php, permite el acceso a las clases, funciones o variables definidas*/
    require_once 'clases/Alumno.php'; /*Se incluye el contenido del archivo Alumno.php, permite el acceso a las clases, funciones o variables definidas*/
    $usuarios = [];
    try { /*Bloque para la gestión de excepciones. Si se generla una excepción dentro del bloque se puede capturar y gestionar con catch*/
        $objAlumno = new Alumno('Ana Verónica Colín Lozano', 'anavero.colin@gmail.com', '22556614'); /*Se crea una nueva instancia/objeto para la clase Alumno y se le proveen parámetros*/
        $usuarios[] = $objAlumno;
    } catch (Exception $e) {
        echo '<br>Error Controlado: ' . $e->getMessage() . '</br>'; }
    try {
        $objAdmin = new Admin('Berenice Lozano Soto', 'berenice_lozano@hotmail.com');  /*Se crea una nueva instancia/objeto para la clase Admin y se le proveen parámetros*/
        $usuarios[] = $objAdmin; }
    catch (Exception $e) {
        echo '<br>Error Controlado: ' . $e->getMessage() . '</br>'; }
    try {
        $usuarioInvalido = new Alumno('Brenda Sofía Colín Lozano', 'brenda.colingmail.com', '55226978'); /*Se crea una nueva instancia/objeto para la clase Alumno y con un correo inválido*/
    $usuarios[] = $usuarioInvalido;}
    catch (Exception $e) {
    echo '<br>Error Controlado: ' . $e->getMessage() . '</br>'; }

    echo "<table border='1'> 
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Rol</td>
                <th>Matrícula</th>
            </tr>
            </thead>"; /*Tabla en donde se presentarán los datos*/


            /*Se utiliza el bucle foreach para mostrar la información de cada usuario en formato de tabla, el nombre, correo electrónico, rol, en el caso de matrícula y empresa, solo si están disponibles, esto siendo evaluado con if y method_exists*/            
            foreach ($usuarios as $user) { 

            $nombre = $user->getNombre();
            $correo = $user->getCorreo();
            $rol = $user->getRol();
            $matricula = "—";

            if (method_exists($user, 'getMatricula')) {
                $matricula = $user->getMatricula();
            }

            echo "<tbody>
                    <tr>
                        <td>$nombre</td>
                        <td>$correo</td>
                        <td>$rol</td>
                        <td>$matricula</td>
                    </tr>"; }
            echo    "</tbody>
                </table>";
    ?>