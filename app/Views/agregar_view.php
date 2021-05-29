<div class="container">
  <div class="row">
    <?php
      foreach($apartamentos as $apartamento){
        $deleteruta =  base_url()."/public/eliminarapartamento?id={$apartamento->id}";
        $updateruta =  base_url()."/public/modificarapartamento?id={$apartamento->id}";
        $template="
        <div class='col-12 col-sm-12 col-md-6 col-lg-4'>
          <div class='card' style='width: 18rem;'>
            
            <img src='' class='card-img-top'>
            <div class='card-body'>
              <h5 class='card-title'>{$apartamento-> ciudad}</h5>
              <p class='card-text'>{$apartamento->pais}</p>
              {$apartamento->direccion}
              {$apartamento->ubicacionGoogleMap}  
              {$apartamento->numeroAbitaciones}
              {$apartamento->imgApartamento}
              {$apartamento->imgDestacada}
              {$apartamento->valorNoche}
              {$apartamento->reseña}
              <a href='{$deleteruta}' class='btn btn-primary'>Eliminar</a>
              <a href='{$updateruta}' class='btn btn-info'>Actualizar</a>
            </div>
          </div>
        </div>";
          echo $template;
          //img src='{$regsitro->imagfbfen}'
       }//comillas simples '' dentro de las comillas ""
    ?>
  </div>
</div>

