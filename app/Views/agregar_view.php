<div class="container">
  <div class="row">
    <?php
      foreach($añadir as $agregar){
        $deleteruta =  base_url()."/public/deleteApartamento?id={$agregar->id}";
        $updateruta =  base_url()."/public/modificarApartamento?id={$agregar->id}";
        $template="
        <div class='col-12 col-sm-12 col-md-6 col-lg-4'>
          <div class='card' style='width: 18rem;'>
            
            <img src='' class='card-img-top'>
            <div class='card-body'>
              <h5 class='card-title'>{$agregar-> ciudad}</h5>agregar
              <p class='card-text'>{$agregar->pais}</p>
              {$agregar->direccion}
              {$agregar->ubicacionGoogleMap}  
              {$agregar->numeroAbitaciones}
              {$agregar->imgApartamento}
              {$agregar->imgDestacada}
              {$agregar->valorNoche}
              {$agregar->reseña}
              <a href='{$deleteruta}' class='btn btn-primary'>Eliminar</a>
              <a href='{$updateruta}' class='btn btn-info'>Actualizar</a>
            </div>
          </div>
        </div>";
          echo $template;
          //img src='{$regsitro->imagen}'
       }//comillas simples '' dentro de las comillas ""
    ?>
  </div>
</div>
esdvxc ybhuj nm