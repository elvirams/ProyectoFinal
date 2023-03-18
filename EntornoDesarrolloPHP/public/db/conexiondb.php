<?php
    # Método para realizar la conexión a la BBDD. Obtiene los datos de conexión de variables de entorno existentes en el fichero .env.
    class Database {
        public static function connect () 
        {
            $host='mariadb';
            $dbname=getenv('MARIADB_DATABASE');

            try {
                $dsn = 'mysql:host='.$host.";dbname=".$dbname.";charset=UTF8";
                $dbh = new PDO($dsn, getenv('MARIADB_USER'), getenv('MARIADB_PASSWORD'));
                return $dbh;
                
            } catch (PDOException $e){
                echo $e->getMessage();
            }
        }
    }
?>