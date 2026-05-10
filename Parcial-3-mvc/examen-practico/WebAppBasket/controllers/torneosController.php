<?php
require_once(__DIR__ . "/../models/torneosModel.php");
class torneosController
{
    private $model;
    public function __construct()
    {
        $this->model = new torneosModel();
    }
    //Creamos método controlador que mandará a llamar la funcion Insert del Modelo.
    //También mandará los parámetros necesarios para guardar en la tabla torneos.
    //Si los datos se guardan redireccionaremos al usuario a la pantalla principal
    //De lo contrario se mantendrá en la pantalla del formulario de captura de datos del torneo
    public function saveTorneo(
        $nombreTorneo, $organizador, $patrocinadores, $sede, $categoria, $premio1, $premio2, $premio3, $otroPremio, $usuario, $contrasena) {
        //Recordemos que la funcion insert del modelo regresa el último id generado
        $id = $this->model->insert($nombreTorneo, $organizador, $patrocinadores, $sede, $categoria, $premio1, $premio2, $premio3, $otroPremio, $usuario, $contrasena);
        return ($id!= false) ? header("Location: admin.php") : header("Location: frmTorneos.php");
    }
    //Método que manda a ejecutar la función read del modelo del torneo
    public function readTorneo()
    {
        return ($this->model->read()) ? $this->model->read() : false;
    }
    //Método para ejecutar la función ReadOne del modelo torneo
    public function readOneTorneo($id)
    {
        return ($this->model->readOne($id) != false) ? $this->model->readOne($id) : header("Location: admin.php");
    }
    //Método que manda a llamar la función update del modelo
    public function updateTorneo(
    $id, $nombreTorneo, $organizador, $patrocinadores, $sede, $categoria, $premio1, $premio2, $premio3, $otroPremio) {
        return ($this->model->update($id, $nombreTorneo, $organizador, $patrocinadores, $sede, $categoria, $premio1, $premio2, $premio3, $otroPremio) != false)
            ? header("Location: readOneTorneos.php?id=".$id)
            : header("Location: readAllTorneos.php");
    }
    //Método que mande a llamar a la función delete del modelo
    public function delete($id) {
        return ($this->model->delete($id)) ? header("Location: readAllTorneos.php"): header("Location: readOneTorneos.php?id=".$id); 
    }
}