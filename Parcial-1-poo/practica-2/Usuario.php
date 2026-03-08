<?php
class Usuario
    {
    private $nombre; /*Se declaran propiedades priviadas de nombre y correo */
    private $correo;


    function __construct($nombre, $correo)  /*Se inicializan las propiedades nombre y correo */
    {
        $this->nombre=$nombre;
        $this->correo=$correo;
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
    function setCorreo($correo) { /*Se establece el valor de la propiedad correo*/
        $this->correo=$correo;
    }
}
?>