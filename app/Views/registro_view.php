<body background="<?php echo base_url(); ?>/public/assets/img/fondo1.jpg">
<div class="row justify-content-center">
  <div id="title" class="cold-md-8" >
  
    <div class="container">
      <div class="row">
      <h1 class="justify-content-center text-danger">Lista de Registros</h1>
    <?php
      foreach($registros as $registro){
        $deleteruta =  base_url()."/public/eliminarregistro?id={$registro->id}";
        $updateruta =  base_url()."/public/modificarregistro?id={$registro->id}";
        $template="
        <div class='col-12 col-sm-12 col-md-6 col-lg-4 '>
          <div class='card' style='width: 18rem;'>
          <div class='card-body bg-info bg-gradient >
          <h5 class='card-title mt-1'></h5>
          <h5 class='card-text'>Nombre: {$registro->nombre}</h5>
          <h5 class='card-text'>Correo: {$registro->correo}</h5>
          <h5 class='card-text'>Pais: {$registro->pais}</h5>
          <h5 class='card-text'>Ciuda: {$registro->ciudad} </h5> 
          <h5 class='card-text'>Rol: {$registro->rol}</h5>
          <a href='{$updateruta}' class='btn bg-warning bg-gradient'>Actualizar</a>
          <a href='{$deleteruta}' class='btn bg-danger bg-gradient'>Eliminar</a>
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