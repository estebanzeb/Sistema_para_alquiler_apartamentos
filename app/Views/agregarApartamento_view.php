<body background="<?php echo base_url(); ?>/public/assets/img/fondo1.jpg">

<div class="container">

<h1 class="text-danger">Agregar Apartamento</h1>
<form method="POST" action="<?php echo base_url().'/public/añadirapartamento'?>">


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Cidad</label>
    <input type="text" class="form-control" id="ciudad" name="ciudad" required autofocus> 
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Pais</label>
    <input type="text" class="form-control" id="pais" name="pais" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Dirección</label>
    <input type="text" class="form-control" id="direccion" name="direccion" required> 
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Ubicación en Google Maps</label>
    <input type="text" class="form-control" id="ubicacionGoogleMap" name="ubicacionGoogleMap" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Número de habitaciones</label>
    <input type="text" class="form-control" id="numeroAbitaciones" name="numeroAbitaciones" maxlength="3" required> 
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Imagen del apartamento (URL)</label>
    <input type="text" class="form-control" name="imgApartamento" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Imagen destacada (URL)</label>
    <input type="text" class="form-control" id="imgDestacada" name="imgDestacada" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Valor noche</label>
    <input type="text" class="form-control" maxlength="9" id="valorNoche" name="valorNoche" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Reseña</label>
    <input type="text" class="form-control" id="reseña" name="reseña" required>
  </div>
  <button type="submit" class="btn btn-primary">Agregar Apartamento</button>
</form>
</div>
