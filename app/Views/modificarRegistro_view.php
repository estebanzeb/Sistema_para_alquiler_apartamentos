<body background="<?php echo base_url(); ?>/public/assets/img/fondo1.jpg">

<div class="container">
<img src="<?php echo base_url(); ?>/public/assets/img/imagen1.jfif ?>" alt="">

<h1 class="text-danger">Modificar Registro</h1>

<form method="POST" action="<?php echo base_url()?>/public/modificar?id=<?php echo $registro->id?>">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre completo</label>
    <input type="text" value="<?php echo $registro->nombre ?>" class="form-control" id="nombre" name="nombre" > 
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Correo(Email)</label>
    <input type="email" value="<?php echo $registro->correo ?>" class="form-control" id="correo" name="correo">
    <div id="emailHelp"  class="form-text">Correo@gmail.com</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">País</label>
    <input type="text" value="<?php echo $registro->pais ?>" class="form-control" id="pais" name="pais"> 
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Ciudad</label>
    <input type="text" value="<?php echo $registro->ciudad ?>" class="form-control" id="ciudad" name="ciudad">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Contraseña</label>
    <input type="password" value="<?php echo $registro->contraseña ?>" class="form-control" id="contraseña" name="contraseña" placeholder="Contraseña" maxlength="3" name="precio" > 
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Rol (anfitrion, invitado)</label>
    <input type="text" value="<?php echo $registro->rol ?>" class="form-control" id="rol" name="rol">
  </div>
  <button type="submit" class="btn btn-primary">Actualizar registro</button>
</form>
</div>