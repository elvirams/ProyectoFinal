<!--
    Vista para inicio de sesión. Contiene el código HTML con el formulario así como el código PHP para
    mostrar errores de validación, en caso de existir.
-->
<html>
<link rel="stylesheet" href="/views/css/iniciosesion.css">
<section class="container">
    <body>
        <center>
        <div class="login-container">
            <div class="circle circle-one"></div>
                <div class="form-container">
                    <img src="/assets/imgsesion.jpg" alt="illustration" class="illustration" />
                    <h1 class="opacity">Iniciar Sesión</h1>
                    <form action="index.php?controller=UsuarioController&action=validariniciosesion" method="POST">
                        <input type="text" name=NombreUsuario placeholder="Nombre de usuario" value="<?php if (isset($_POST['NombreUsuario'])) echo $_POST['NombreUsuario']; ?>" />
                        <?php
                            if (isset($data) && isset($data['NombreUsuario']))
                            echo "<div class='alert alert-danger'>"
                            .$data['NombreUsuario'].
                            "</div>";
                        ?>
                        <input type="password" name=Contrasenia placeholder="Contraseña" />
                        <?php
                            if (isset($data) && isset($data['Contrasenia']))
                            echo "<div class='alert alert-danger'>"
                            .$data['Contrasenia'].
                            "</div>";
                        ?>
                        <?php
                            if (isset($data) && isset($data['general']))
                            echo "<div class='alert alert-danger'>"
                            .$data['general'].
                            "</div>";
                        ?>
                        <input class="form-control" type="submit" name="insertar" value="Enviar">
                        
                    </form>
                    
                </div>
            <div class="circle circle-two"></div>
        </div>
        </center>
        </body>
</section>
</html>