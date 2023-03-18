<!--
    Vista que muestra los datos de los productos por id en forma de tabla. 
    Recibe los datos a mostrar a través del parámetro $data (utilizado en la función View::show).
-->
<link rel="stylesheet" href="/views/css/productosbyid.css">   
<div class='container'>
  <div class='background-element' id='background-element' ></div>
    <div class='highlight-window' id='product-img'>
        <div class='highlight-overlay' id='highlight-overlay'>
        <img src='<?php echo $data['Imagen']?>' style="height: 500px; width: 350px;" >
        </div>
    </div>
    <div class='window'>
    <?php 
        $carrito='<a style="color:white;" href="index.php?controller=ProductController&action=addcart&id_producto='.$data['id_producto'].'">Añadir producto</a>';
        $volver='<a  style="color:white;" href="index.php?controller=ProductController&action=getAllProducts">Volver</a>';
        echo "<div class='main-content'>
        <center>
        <h1>".$data['Nombre']."</h1>
        </center>
        <div class='description' id='description'>
        ".$data['Descripcion']."
        </div>
        <div class='highlight-window  mobile' id='product-img'>
            <div class='highlight-overlay' id='highlight-overlay-mobile'>
            
            </div>
        </div>
        <div class='options'>
            <div class='color-options'>  
                <div class='color-picker'>
                    <ul>
                        <li>Pantalla: ".$data['Pantalla']."</li>
                        <li>Procesador: ".$data['Procesador']."</li>
                        <li>Ram: ".$data['Ram']."</li>
                        <li>Almacenamiento: ".$data['Almacenamiento']."</li>
                        <li>Camara: ".$data['Camara']."</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class='divider'></div>
        <div class='purchase-info'>
                <div class='price'>".$data['Precio'].'€'."</div>
                <button>".$volver."</button>";

                if (empty($_SESSION['user_id'])) {
                    echo"<button>".$carrito."</button>";
                }
        echo"</div>";
    ?>
    </div>
    
  </div>
</div>