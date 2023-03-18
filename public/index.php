<?php
    include('views/header.php');
    include_once('controllers/productoscontroller.php');
    include_once('controllers/usuarioscontroller.php');

    # Punto de entrada a la aplicación. Si no se recibe parámetro action y controller en la url.
    # Se muestra la página de inicio (texto HTML).
    # En caso de que si se reciba, se instancia el controlador y se invoca la acción indicada.
    if (isset($_REQUEST['action']) && isset($_REQUEST['controller']) ){
        $act=$_REQUEST['action'];
        $cont=$_REQUEST['controller'];

        # Instanciación del controlador e invocación del método.
        $controller=new $cont();
        $controller->$act();
    
    }else {

        # Instanciación del controlador e invocación del método.
        include_once('views/paginaprincipal.php');
    }

    include_once('views/footer.php');

    
?>