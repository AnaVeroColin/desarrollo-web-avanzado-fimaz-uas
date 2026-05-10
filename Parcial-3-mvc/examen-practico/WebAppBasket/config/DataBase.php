<?php
    //Clase para conectarse a la base de datos mediante PDO.
    class DataBase {
        //Atributos
        private $host = "localhost:3307";
        private $db = "proyecto";
        private $user = "root";
        private $password = "";

        public function __construct() {
                //Constructor
        }
        //Método para conexión a base de datos
        public function connect() {
            try {
                $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->db,$this->user,$this->password);
                return $PDO;
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }
    }
?>