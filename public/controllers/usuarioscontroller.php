<?php
    
    include_once("views/view.php");

    class UsuarioController {
    
        # Método para mostrar el inicio de sesión.
        public function mostrariniciosesion (){
            View::show("iniciosesion");        
        }

        # Método para validar los datos el inicio de sesión.
        public function validariniciosesion () {
            $errores=array();
            if (isset($_POST['insertar'])) {
                if (!isset($_POST['NombreUsuario'])|| strlen($_POST['NombreUsuario'])==0)
                    $errores['NombreUsuario']="El nombre no puede estar vacío";
                if (!isset($_POST['Contrasenia'])|| strlen($_POST['Contrasenia'])==0)
                    $errores['Contrasenia']="La contraseña no puede estar vacío";
                if (empty($errores)){
                    include_once('models/usuariosDAO.php');
                    $uDAO=new UsuariosDAO();
                    if (empty($uDAO->getAllUsuario($_POST['NombreUsuario'],$_POST['Contrasenia']))) {
                        $errores['general']="No eres el Administrador";
                        View::show("iniciosesion",$errores);
                    } else {
                        $_SESSION['user_id']=$_POST['NombreUsuario'];
                        View::show("addproductos"); 
                    }
                } else {
                    View::show("iniciosesion",$errores);
                }
            }
        }

        # Método para cerrar inicio de sesión del usuario.
        public function cerrarsesion () {
            session_destroy();
            View::show("iniciosesion"); 
        }
    }
?>
