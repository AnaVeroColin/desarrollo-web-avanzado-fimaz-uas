<?php
require_once 'Usuario.php'; /*Se le permite a la clase Admin tener acceso al código de Usuario.php*/
    class Admin extends Usuario { /*La clase Admin se hace hija de la clase Usuario*/
        public function getRol() { /*Función getRol nos regresa el rol de Administrador*/
            return "Administrador";
        }
    }

    