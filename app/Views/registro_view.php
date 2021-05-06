<div class="container">
  <div class="row">
    <?php
      foreach($registros as $registro){
        $deleteruta=  base_url()."/public/eliminarregistro?id={$registro->id}";
        $updateruta=  base_url()."/public/modificarregistro?id={$registro->id}";
        $template="
        <div class='col-12 col-sm-12 col-md-6 col-lg-4'>
          <div class='card' style='width: 18rem;'>
            
            <img src='' class='card-img-top'>
            <div class='card-body'>
              <h5 class='card-title'>{$registro->nombre}</h5>
              <p class='card-text'>{$registro->correo}</p>
              {$registro->pais}
              {$registro->ciudad}  
              {$registro->contraseña}
              {$registro->rol}
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