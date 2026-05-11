<?php
//Ana Verónica Colín Lozano LISI 3-1
require_once("../../controllers/torneosController.php");

//Atrapar loa valores a actualizar

    $objController = new torneosController();
    //Obtener los valores introducidos por el usuario
    $id = $_POST['txtId'];
    $nombreTorneo = $_POST['txtNombreTorneo'];
    $organizador = $_POST['txtOrganizador'];
    $patrocinadores = $_POST['txtPatrocinador'];
    $sede = $_POST['txtSede'];
    $categoria = $_POST['txtCategoria'];
    $premio1 = $_POST['txtPremio1'];
    $premio2 = $_POST['txtPremio2'];
    $premio3 = $_POST['txtPremio3'];
    $otroPremio = $_POST['txtOtroPremio'];

    $objController->updateTorneo($id, $nombreTorneo, $organizador, $patrocinadores, $sede, $categoria, $premio1, $premio2, $premio3,
    $otroPremio);

?>