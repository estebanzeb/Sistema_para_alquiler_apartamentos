<body background="<?php echo base_url(); ?>/public/assets/img/fondo2.jpg">
<div class="row justify-content-center">
  <div id="title" class="cold-md-8" >
  
    <div class="container">
      <div class="row">
      <h1 class="justify-content-center text-danger">Lista de Apartamentos</h1>
        <?php
          foreach($apartamentos as $apartamento){
            $deleteruta =  base_url()."/public/eliminarapartamento?id={$apartamento->id}";
            $updateruta =  base_url()."/public/modificarapartamento?id={$apartamento->id}";
            $template="
            <div class='col-12 col-sm-12 col-md-6 col-lg-4'>
              <div class='card' style='width: 18rem;'>
                <div class='card-body bg-success '>
                    <img src='{$apartamento->imgApartamento}' class='card-img-top'>
                    <h5 class='card-text mt-1'>Pais: {$apartamento->pais}</h5>
                    <h5 class='card-title '>Ciudad: {$apartamento-> ciudad}</h5>
                    <h5 class='card-text'>Direccion: {$apartamento->direccion}</h5>
                    <h5 class='card-text fst-italic'>Ubicacion: {$apartamento->ubicacionGoogleMap}</h5>
                    <h5 class='card-text'>Numero de abitaciones: {$apartamento->numeroAbitaciones}</h5>
                    <img src='{$apartamento->imgDestacada}' class='card-img'>              
                    <h5 class='card-text'>Valor: {$apartamento->valorNoche}</h5>
                    <h5 class='card-text'>Descripción: {$apartamento->reseña}</h5>
                    <a href='{$updateruta}' class='btn btn-info'>Actualizar</a>
                    <a href='{$deleteruta}' class='btn btn-primary'>Eliminar</a>
                </div>
              </div>
            </div>";
              echo $template;   
          }
        ?>
      </div>
    </div>
  </div>
</div>
  </body>