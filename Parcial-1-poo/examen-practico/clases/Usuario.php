<?php
class Usuario
    {
    private $nombre; /*Se declaran propiedades privadas de nombre y correo */
    private $correo;


    function __construct($nombre, $correo) /*Se inicializan las propiedades nombre y correo */
    {
        $this->nombre=$nombre;
        /*el if (filter_var(, FILTER_VALIDATE_EMAIL)) va a revisar que la variable que representa el correo es un correo válido*/
        if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {  
            $this->correo=$correo; /*Establece el correo para el usuario pero solo en caso de pasar el filtro de validación*/
            }
        /*En caso de que el correo no sea válido, se generará la excepción*/
        else {
            throw new Exception("Correo Inválido");
        } }

    function getNombre() { /*La funcion getNombre() nos regresa el valor de la propiedad nombre del objeto*/
        return $this->nombre;
    }

    function getCorreo() /*La función getCorreo() nos regresa el valor de la propiedad correo del objeto*/
    {
        return $this->correo;
    }
    }
?>