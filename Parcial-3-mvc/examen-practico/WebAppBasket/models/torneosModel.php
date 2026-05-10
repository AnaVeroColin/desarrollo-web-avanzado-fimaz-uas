//Ana Verónica Colín Lozano LISI 3-1
<?php
require_once(__DIR__ . '/../config/DataBase.php');
class torneosModel {
    public $PDO;
    public function __construct() {
        //Declaramos la variable para la conexión a la db
        //Instanciamos la clase Database
        $connection = new DataBase();
        //Llamamos al método connect y lo asignamos a nuestra variable local $PDO
        $this->PDO = $connection->connect();
    }

    //Método para hacer un INSERT en la db, en la tabla "torneos"
    public function insert($nombreTorneo, $organizador, $patrocinadores, $sede, $categoria, $premio1, $premio2, $premio3,
        $otroPremio, $usuario, $contrasena) {

        //Encriptamos contraseña
        $contrasena = $this->passwordEncrypt($contrasena);
        //Declaramos statement y preparamos consulta
        $statement = $this->PDO->prepare("INSERT INTO torneos VALUES(null, :nombreTorneo, :organizador, :patrocinadores,
                :sede, :categoria, :premio1, :premio2, :premio3, :otroPremio, :usuario,  :contrasena)");
        //Asociamos valores colocados como placeholder en el query mediante bindParam
        $statement->bindParam(":nombreTorneo", $nombreTorneo);
        $statement->bindParam(":organizador", $organizador);
        $statement->bindParam(":patrocinadores", $patrocinadores);
        $statement->bindParam(":sede", $sede);
        $statement->bindParam(":categoria", $categoria);
        $statement->bindParam(":premio1", $premio1);
        $statement->bindParam(":premio2", $premio2);
        $statement->bindParam(":premio3", $premio3);
        $statement->bindParam(":otroPremio", $otroPremio);       
        $statement->bindParam(":usuario", $usuario);
        $statement->bindParam(":contrasena", $contrasena);
        //Ejecutamos el statement mediante execute()
        return ($statement->execute()) ? $this->PDO->lastInsertId() : false;
    }

    //El administrador creará el torneo y al usuario (organizador).
    //Al crear su password, buscaremos encriptarla por seguridad.
    //Utilizaremos el método password_hash y password_verify.

    public function passwordEncrypt($password)
    {
        $passwordEncrypted = password_hash($password, PASSWORD_DEFAULT);
        return $passwordEncrypted;
    }
    //Método para vrificar si el password coincide con la contraseña encriptada
    public function passwordDecrypted($passwordEncrypted, $passwordCandidate) {
        //Con un shorthand if, verificamos si el password candidato es correcto.
        return (password_verify($passwordCandidate, $passwordEncrypted)) ? true : false;
        }
    //Creamos método para listar todos los torneos
    public function read() {
        $statement = $this->PDO->prepare("SELECT * FROM torneos");
        return ($statement->execute()) ? $statement->fetchAll() : false;
    }

    //Método para devolver la info de un torneo solamente
    public function readOne($id) {
        $statement = $this->PDO->prepare("SELECT * FROM torneos WHERE id= :id limit 1");
        $statement->bindParam(":id",$id);
        return ($statement->execute()) ? $statement->fetch(): false;
    }

    //Método para actualizar datos del torneo
    public function update($id, $nombreTorneo, $organizador, $patrocinadores, $sede, $categoria, $premio1, $premio2, $premio3, $otroPremio) {
        $statement = $this->PDO->prepare("UPDATE torneos SET nombreTorneo = :nombreTorneo, organizador = :organizador, patrocinadores = :patrocinadores,
        sede = :sede, categoria = :categoria, premio1 = :premio1, premio2 = :premio2, premio3 = :premio3, otroPremio = :otroPremio
        WHERE ID = :id");
        //Asociamos los valores colocados como placeholder en el query mediante el bindParam
        $statement->bindParam(":id", $id);
        $statement->bindParam(":nombreTorneo", $nombreTorneo);
        $statement->bindParam(":organizador", $organizador);
        $statement->bindParam(":patrocinadores", $patrocinadores);
        $statement->bindParam(":sede", $sede);
        $statement->bindParam(":categoria", $categoria);
        $statement->bindParam(":premio1", $premio1);
        $statement->bindParam(":premio2", $premio2);
        $statement->bindParam(":premio3", $premio3);
        $statement->bindParam(":otroPremio", $otroPremio);       

        return ($statement->execute()) ? $id : false;
    }
    //Método para eliminar un registro (torneo)
    public function delete($id) {
        $statement = $this->PDO->prepare("DELETE FROM torneos WHERE id= :id");
        $statement->bindParam(":id",$id);
        return ($statement->execute()) ? true : false;
    }
}

?>