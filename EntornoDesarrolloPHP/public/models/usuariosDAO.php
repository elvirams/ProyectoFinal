<?php
    require_once 'db/conexiondb.php';
    class UsuariosDAO {

        # Conexión a la base de datos.
        public $db_con;
        public function __construct(){
            $this->db_con = Database::connect();
        }

        # Método que obtiene todos los usuarios de la base de datos cuyo nombre de usuario y contraseña coincidan con las variables.
        public function getAllUsuario($nombreinicio, $passwordinicio){
            $stmt=$this->db_con->prepare("SELECT * FROM Usuarios WHERE NombreUsuario='$nombreinicio' AND Contrasenia='$passwordinicio'");
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            return $stmt->fetchAll();
        }
    }
?>