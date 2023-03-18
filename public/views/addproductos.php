<!--
    Vista para añadir nuevos productos. Contiene el código HTML con el formulario así como el código PHP para
    mostrar errores de validación, en caso de existir.
-->
<div class="container" style="margin-top: 50px; margin-bottom:50px;"> 
   <h2><strong><center><u>AÑADIR UN NUEVO PRODUCTO</u></center></strong></h2>

    <form class="form" action="index.php?controller=ProductController&action=aniadirProduct" method="post">

    <div class="form-group">
        <label class="form-label" for="nombre">Nombre:</label>
        <input class="form-control" type="text" name="nombre" value="<?php if (isset($_POST['nombre'])) echo $_POST['nombre']; ?>" maxlength="50"><br>
        <?php
        if (isset($data) && isset($data['nombre'])) {
        echo "<div class='alert alert-danger'>" . $data['nombre'] . "</div>";
        }
        ?>

        </div>
        <div class="form-group">
            <label class="form-label" for="precio">Precio:</label>
            <input class="form-control" type="text" name="precio" value="<?php if (isset($_POST['precio'])) echo $_POST['precio']; ?>"><br>
            <?php
                if (isset($data) && isset ($data['precio']))
                echo "<div class='alert alert-danger'>"
                       .$data['precio'].
                      "</div>";
            ?>
        </div>

        <div class="form-group">
            <label class="form-label" for="descripcion">Descripcion:</label>
            <input class="form-control" type="text" name="descripcion" value="<?php if (isset($_POST['descripcion'])) echo $_POST['descripcion']; ?>"><br>
            <?php
                if (isset($data) && isset($data['descripcion']))
                echo "<div class='alert alert-danger'>"
                       .$data['descripcion'].
                      "</div>";
            ?>
        </div>

        <div class="form-group">
            <label class="form-label" for="fechalanzamiento">Fecha Lanzamiento:</label>
            <input class="form-control" type="text" name="fechalanzamiento" value="<?php if (isset($_POST['fechalanzamiento'])) echo $_POST['fechalanzamiento']; ?>" ><br>
            <?php
                if (isset($data) && isset($data['fechalanzamiento']))
                echo "<div class='alert alert-danger'>"
                       .$data['fechalanzamiento'].
                      "</div>";
            ?>
        </div>

        <div class="form-group">
            <label class="form-label" for="pantalla">Pantalla:</label>
            <input class="form-control" type="text" name="pantalla" value="<?php if (isset($_POST['pantalla'])) echo $_POST['pantalla']; ?>"><br>
            <?php
                if (isset($data) && isset($data['pantalla']))
                echo "<div class='alert alert-danger'>"
                       .$data['pantalla'].
                      "</div>";
            ?>
        </div>

        <div class="form-group">
            <label class="form-label" for="procesador">Procesador:</label>
            <input class="form-control" type="text" name="procesador" value="<?php if (isset($_POST['procesador'])) echo $_POST['procesador']; ?>"><br>
            <?php
                if (isset($data) && isset($data['procesador']))
                echo "<div class='alert alert-danger'>"
                       .$data['procesador'].
                      "</div>";
            ?>
        </div>

        <div class="form-group">
            <label class="form-label" for="ram">Ram:</label>
            <input class="form-control" type="text" name="ram" value="<?php if (isset($_POST['ram'])) echo $_POST['ram']; ?>"><br>
            <?php
                if (isset($data) && isset($data['ram']))
                echo "<div class='alert alert-danger'>"
                       .$data['ram'].
                      "</div>";
            ?>
        </div>

        <div class="form-group">
            <label class="form-label" for="almacenamiento">Almacenamiento:</label>
            <input class="form-control" type="text" name="almacenamiento" value="<?php if (isset($_POST['almacenamiento'])) echo $_POST['almacenamiento']; ?>"><br>
            <?php
                if (isset($data) && isset($data['almacenamiento']))
                echo "<div class='alert alert-danger'>"
                       .$data['almacenamiento'].
                      "</div>";
            ?>
        </div>

        <div class="form-group">
            <label class="form-label" for="camara">Camara:</label>
            <input class="form-control" type="text" name="camara" value="<?php if (isset($_POST['camara'])) echo $_POST['camara']; ?>"><br>
            <?php
                if (isset($data) && isset($data['camara']))
                echo "<div class='alert alert-danger'>"
                       .$data['camara'].
                      "</div>";
            ?>
        </div>

        <div class="form-group">
            <label class="form-label" for="imagen">Imagen:</label>
            <input class="form-control" type="text" name="imagen" placeholder="assets/FotosMoviles/foto.jpg" value="<?php if (isset($_POST['imagen'])) echo $_POST['imagen']; ?>"><br>
            <?php
                if (isset($data) && isset($data['imagen']))
                echo "<div class='alert alert-danger'>"
                       .$data['imagen'].
                      "</div>";
            ?>
        </div>

        <?php
                if (isset($data) && isset($data['general']))
                echo "<div class='alert alert-danger'>"
                       .$data['general'].
                      "</div>";
            ?>
        <div class="form-group">
            <input class="form-control" type="submit" name="insertar" value="Enviar" style="background-color: #864ddf; color: white;">
        </div>
    </form>
</div>
    