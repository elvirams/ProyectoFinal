<?php
    # Este controlador se encarga de los métodos relacionados con los productos.
    # En primer lugar, incluimos la vista que vamos a utilizar.
    include ("views/view.php");
    class ProductController {

        # Método para obtener todos los productos.
        public function getAllProducts() {
            include_once ("models/productosDAO.php");
            $pDAO=new ProductosDAO();
            $products=$pDAO->getAllProducts();
            # Llamamos al método de la vista que muestra los productos.
            View::show("showproductos",$products);
        }    
        
        # Método para añadir un nuevo producto a la base de datos.
        public function aniadirProduct(){
            $errores=array();

            # Validamos los datos del formulario
            if (isset($_POST['insertar'])){
                if (!isset($_POST['nombre']) || strlen($_POST['nombre'])==0)
                    $errores['nombre']="El nombre no puede estar vacío";

                if (!isset($_POST['precio'])|| strlen($_POST['precio'])<=0)
                $errores['precio']="El Precio no puede estar vacío";

                if (!isset($_POST['descripcion'])|| strlen($_POST['descripcion'])==0)
                    $errores['descripcion']="La descripcion no puede estar vacío";

                if (!isset($_POST['fechalanzamiento'])|| strlen($_POST['fechalanzamiento'])==0)
                    $errores['fechalanzamiento']="La Fecha de Lanzamiento no puede estar vacío";

                if (!isset($_POST['pantalla'])|| strlen($_POST['pantalla'])==0)
                    $errores['pantalla']="La Pantalla no puede estar vacío";
                    
                if (!isset($_POST['procesador'])|| strlen($_POST['procesador'])==0)
                    $errores['procesador']="El Procesador no puede estar vacío";
                    
                if (!isset($_POST['ram'])|| strlen($_POST['ram'])==0)
                    $errores['ram']="La RAM no puede estar vacío";
                   
                if (!isset($_POST['almacenamiento'])|| strlen($_POST['almacenamiento'])==0)
                    $errores['almacenamiento']="El Almacenamiento no puede estar vacío";
                    
                if (!isset($_POST['camara'])|| strlen($_POST['camara'])==0)
                    $errores['camara']="La Cámara no puede estar vacío";
                
                if (!isset($_POST['imagen'])|| strlen($_POST['imagen'])==0)
                $errores['imagen']="La Imagen no puede estar vacío";
                   
                # Si no hay errores, insertamos el producto en la base de datos.
                if (empty($errores)){
                    include_once('models/productosDAO.php');
                    $pDAO=new ProductosDAO();
                    if ($pDAO->insertproduct($_POST['nombre'],$_POST['precio'],$_POST['descripcion'],$_POST['fechalanzamiento'],$_POST['pantalla'],$_POST['procesador'],$_POST['ram'],$_POST['almacenamiento'],$_POST['camara'],$_POST['imagen'])){ //NAME DE LOS FORMULARIOS
                        $this->getAllProducts();
                    } else {
                        # Si hay algún problema, mostramos la vista de inserción con los errores.
                        $errores['general']="Problemas al insertar";
                        View::show("addproductos",$errores);
                    }
                } else View::show("addproductos", $errores); 
            }else {
                View::show("addproductos", null);
            }
        }

        # Método para mostrar los productos por su id.
        public function ProductById (){
            include_once ("models/productosDAO.php");
            if (isset($_GET['id_producto'])){
                $pDAO=new ProductosDAO();
                $products=$pDAO->getProductById($_GET['id_producto']);
                View::show("productosbyid",$products);
            }        
        }

        # Método para añadir un producto al carrito de la compra.
        public function addcart (){
            if (isset($_GET['id_producto'])){
                array_push($_SESSION['cart'],$_GET['id_producto']);
                include_once ("models/productosDAO.php");
                $pDAO=new ProductosDAO();
                $products=$pDAO->getAllProducts();
                View::show("showproductos",$products);
            } 
        }

        # Método para mostrar el carrito de la compra.
        public function showcart () {
            include_once ("models/productosDAO.php");
            $pDAO=new ProductosDAO();
            $arraycart=array();
            foreach ($_SESSION['cart'] as $valorposicion => $identificador) {
                $productos=$pDAO->getProductById($identificador);
                array_push($arraycart,$productos);
            }
            
            View::show("showcart",$arraycart);
        }

        # Método para que el Administrador pueda borrar articulos de la base de datos.
        public function deleteproduct () {
            include_once ("models/productosDAO.php");
            if (isset($_GET['id_producto'])){
                $pDAO=new ProductosDAO();
                $products=$pDAO->deleteprod($_GET['id_producto']);
                $products=$pDAO->getAllProducts();
                $pDAO=null;
                View::show("showproductos", $products);
            }

        }
    }
?>