<?php
require_once 'Usuario.php'; /*Se le permite a la clase Alumno tener acceso al código de Usuario.php*/
    class Alumno extends Usuario { /*La clase Alumno se hace hija de la clase Usuario*/
            private $matricula; /*Se declara la propiedad privada de matricula*/

            function __construct($nombre, $correo, $matricula)
        {
        parent::__construct($nombre, $correo); /*Llama al constructos de la clase padre, permite que la clase Alumno inicialice las propiedades heredadas de la clase Usuario, garantiza que se inicialice correctamente la clase padre antes de inicializar las propiedades específicas de la clase hija*/
        $this->matricula=$matricula; /*Establece el valor de matricula*/
        }

        function getMatricula() { /*La funcion getMatricula() nos regresa el valor de la propiedad matricula del objeto*/
        return $this->matricula;
    }

    public function getRol() { /*Función getRol nos regresa el rol de Alumno*/
        return "Alumno";
        }
    }