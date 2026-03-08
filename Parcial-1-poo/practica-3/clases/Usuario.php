<?php
class Usuario
    {
    private $nombre; /*Se declaran propiedades priviadas de nombre y correo */
    private $correo;

    function __construct($nombre, $correo) /*Se inicializan las propiedades nombre y correo */
    {
        $this->nombre=$nombre;
        $this->setCorreo($correo); /*Se llama al setter para validar y guardar el correo*/
    }

    function getNombre() { /*La funcion getNombre() nos regresa el valor de la propiedad nombre del objeto*/
        return $this->nombre;
    }

    function getCorreo() /*La función getCorreo() nos regresa el valor de la propiedad correo del objeto*/
    {
        return $this->correo;
    }

    function setNombre($nombre) { /*Se establece el valor de la propiedad nombre*/
        $this->nombre=$nombre;
    }

    function setCorreo($correo) { /*Se valida el correo y se establece el valor de la propiedad correo*/
    if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $this->correo=$correo;
        }
        else {
            throw new Exception("Correo Inválido"); /*En caso de que el correo no cumpla con los requerimientos para ser considerado un correo válido, se lanza una excepción*/
        } }
}
?>