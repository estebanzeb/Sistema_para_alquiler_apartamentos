<body background="<?php echo base_url(); ?>/public/assets/img/fondo1.jpg">

<div class="container">
<img src="<?php echo base_url(); ?>/public/assets/img/imagen1.jfif ?>" alt="">

<h1 class="text-danger">Modificar Apartamento</h1>

<form method="POST" action="<?php echo base_url()?>/public/modificarapartamento?id=<?php echo $agregar->id?>">


<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Cidad</label>
    <input type="text" value="<?php echo $agregar->ciudad ?>" class="form-control" id="ciudad" name="ciudad" required> 
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Pais</label>
    <input type="text" value="<?php echo $agregar->pais ?>" class="form-control" id="pais" name="pais">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Dirección</label>
    <input type="text" value="<?php echo $agregar->direccion ?>" class="form-control" id="direccion" name="direccion"> 
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Ubicación en Google Maps</label>
    <input type="text" value="<?php echo $agregar->ubicacionGoogleMap ?>" class="form-control" id="ubicacionGoogleMap" name="ubicacionGoogleMap">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Número de habitaciones</label>
    <input type="text" value="<?php echo $agregar->numeroAbitaciones ?>" class="form-control" id="numeroAbitaciones" name="numeroAbitaciones" placeholder="Contraseña" maxlength="3" name="precio" > 
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">imagen del apartamento (URL)</label>
    <input type="text" value="<?php echo $agregar->imgApartamento ?>" class="form-control" id="imgApartamento" name="imgApartamento">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Imagen destacada (URL)</label>
    <input type="text" value="<?php echo $agregar->imgDestacada ?>" class="form-control" id="imgDestacada" name="imgDestacada">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Valor noche</label>
    <input type="text" value="<?php echo $agregar->valorNoche ?>" class="form-control" id="valorNoche" name="valorNoche">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Reseña</label>
    <input type="text" value="<?php echo $agregar->reseña ?>" class="form-control" id="reseña" name="reseña">
  </div>
  <button type="submit" class="btn btn-primary">Actualizar apartamento</button>
</form>
</div>