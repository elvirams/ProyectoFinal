<!--
    Vista que muestra los datos en forma de tabla. 
    Recibe los datos a mostrar a través del parámetro $data (utilizado en la función View::show).
-->
<div class=container>
    <form  action="index.php?controller=ProductController&action=showCart" method="post">
    <table class="table" style="margin-top: 50px; margin-bottom:50px ">
    <thead class="thead-dark"  style="background-color: #864ddf; color:white; text-align:center;">
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Lanzamiento</th>
            <th scope="col"> </th>
            <th scope="col"> </th>
            <?php
                if (!empty($_SESSION['user_id'])) {
                    echo "<th scope='col'> </th>";
                }
            ?>
        </tr>
    </thead>
        <?php
            foreach ($data as $article){
                $enlace='<a style=color:white; href="index.php?controller=ProductController&action=ProductById&id_producto='.$article['id_producto'].'">Ver más...</a>';
                $carrito='<a style=color:white; href="index.php?controller=ProductController&action=addcart&id_producto='.$article['id_producto'].'">Añadir carrito</a>';
                $eliminarproducto='<a style=color:white; href="index.php?controller=ProductController&action=deleteproduct&id_producto='.$article['id_producto'].'">Eliminar producto</a>';
                echo "<tr>";
                    echo"<td hidden>".$article['id_producto']."</td>
                    <td sytle='text-align:center;'>".$article['Nombre']."</td>
                    <td>".$article['Precio'].'€'."</td>
                    <td>".$article['Descripcion']."</td>
                    <td>".$article['FechaLanzamiento']."</td>";
                    
                    if (!empty($_SESSION['user_id'])) {
                        echo "<td><button style='background-color:#864ddf; border-color:#864ddf; color:white; height:55px; width:60px'>".$enlace."</button></td>";
                        echo "<td><button style='background-color:red; border-color:red; color:white;'>".$eliminarproducto."</button></td>"; 
                    }else{
                        echo "<td><button style='background-color:#864ddf; border-color:#864ddf; color:white;'>".$enlace."</button></td>";
                        echo "<td><button style='background-color:#864ddf; border-color:#864ddf; color:white;'>".$carrito."</button></td>";
                    }
                
                echo"</tr>";
            }
        ?>
    </table>
    </form>
</div>