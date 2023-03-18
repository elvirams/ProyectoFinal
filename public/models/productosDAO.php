<?php
    require_once 'db/conexiondb.php';


    class ProductosDAO {

        # Conexión a la base de datos.
        public $db_con;
        public function __construct(){
            $this->db_con = Database::connect();
        }

        # Método en el que se obtiene toda la información sobre los productos
        public function getAllProducts(){
            $stmt=$this->db_con->prepare(("select *from Productos"));
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            # Devuelve todos los productos.
            return $stmt->fetchAll(); 
        }
        
        # Método que devuelve toda la información de un producto dado su id.
        public function getProductById ($id_producto){
            $stmt= $this->db_con->prepare("Select * from Productos where id_producto=$id_producto");
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            # Devuelve todos los productos.
            return $stmt->fetch();        
        }

        # Método para insertar un nuevo producto en la base de datos.
        public function insertproduct($nombre, $precio, $descripcion, $fechalanzamiento, $pantalla, $procesador, $ram, $almacenamiento, $camara, $imagen){
            $stmt= $this->db_con->prepare("INSERT INTO Productos (Nombre,Precio,Descripcion,FechaLanzamiento,Pantalla,Procesador,Ram,Almacenamiento,Camara,Imagen) VALUES (:Nombre,:Precio,:Descripcion,:FechaLanzamiento,:Pantalla,:Procesador,:Ram,:Almacenamiento,:Camara,:Imagen)");
            $stmt->bindParam(':Nombre', $nombre);
            $stmt->bindParam(':Precio', $precio);
            $stmt->bindParam(':Descripcion', $descripcion);
            $stmt->bindParam(':FechaLanzamiento', $fechalanzamiento);
            $stmt->bindParam(':Pantalla', $pantalla);
            $stmt->bindParam(':Procesador', $procesador);
            $stmt->bindParam(':Ram', $ram);
            $stmt->bindParam(':Almacenamiento', $almacenamiento);
            $stmt->bindParam(':Camara', $camara);
            $stmt->bindParam(':Imagen', $imagen);
            try {
                return $stmt->execute(); # Devuelve verdadero si la inserción se ha producido correctamente
            } catch (PDOException $e) {
                echo $e->getMessage(); # En caso de error, muestra un mensaje.
            }
        }
        
        # Método para eliminar un producto por su id.
        public function deleteprod ($id_producto) {
            $stmt= $this->db_con->prepare("Delete from Productos where id_producto=$id_producto");
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            return $stmt->fetch();  # Devuelve un solo producto

        }
    }
?>