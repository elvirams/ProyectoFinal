<!--
    Vista que muestra los datos del carrito en forma de tabla. 
    Recibe los datos a mostrar a través del parámetro $data (utilizado en la función View::show).
-->
<link rel="stylesheet" href="/views/css/showcart.css"> 
<section class="h-100 gradient-custom">
  <div class="container py-5">
    <div class="row d-flex justify-content-center my-4">
      <div class="col-md-8">
          <div class="card mb-4">
            <div class="card-body">
              <?php
                  if (!empty($_SESSION['cart'])) {
                      foreach ($data as $article) {
                      echo "<div class='row'>
                          <hr class='my-4' />
                          <div class='col-lg-3 col-md-12 mb-4 mb-lg-0'>
                          <!-- Image -->
                          <div class='bg-image hover-overlay hover-zoom ripple rounded' data-mdb-ripple-color='light'>
                              <img src='".$article['Imagen']."'
                              class='w-100' />
                              <a href='#!'>
                              <div class='mask' style='background-color: rgba(251, 251, 251, 0.2)'></div>
                              </a>
                          </div>
                          <!-- Image -->
                          </div>
          
                          <div class='col-lg-5 col-md-6 mb-4 mb-lg-0'>
                          <!-- Data -->
                          <p><strong>".$article['Nombre']."</strong></p>
                          <p>Descripción: ".$article['Descripcion']."</p>
                          
                          
                          <!-- Data -->
                          </div>
          
                          <div class='col-lg-4 col-md-6 mb-4 mb-lg-0'>
                          
          
                          <!-- Price -->
                          <p class='text-start text-md-center'>
                              <strong>".$article['Precio'].'€'."</strong>
                          </p>
                          <!-- Price -->
                          </div>
                      </div>";
                      }
                    echo "<div class='card' >";
                        echo "<button style='background-color:#864ddf; color:white;' type='button;' class='btn  btn-block btn-lg'>Proceder a pagar</button>";
                    echo "</div>";
      
                  }else {
                    echo "<center>";
                    echo "El carrito se encuentra vacío";
                    echo "</center>";
                  }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>