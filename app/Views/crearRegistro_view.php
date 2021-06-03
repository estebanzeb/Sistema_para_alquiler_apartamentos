<body background="<?php echo base_url(); ?>/public/assets/img/fondo1.jpg">

<div class="container">
<img src="<?php echo base_url(); ?>/public/assets/img/.jfif ?>" alt="">
<h1 class="text-danger">Registrarce</h1>
<form method="POST" action="<?php echo base_url().'/public/añadirregistro'?>">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre completo</label>
    <input type="text" class="form-control" id="nombre" name="nombre" required autofocus> 
  </div>
  <label for="exampleInputPassword1" class="form-label">Correo(Email)</label>
  <div class="input-group mb-3">
    
    <span class="input-group-text" id="basic-addon1">@</span>
    <input type="email" class="form-control" id="correo" name="correo" required>
    <div id="emailHelp" class="form-text">Correo@gmail.com</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">País</label>
    <input type="text" class="form-control" id="pais" name="pais" required> 
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Ciudad</label>
    <input type="text" class="form-control" id="ciudad" name="ciudad" required>
  </div>
  <label for="exampleInputEmail1" class="form-label">Contraseña</label>
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">#</span>
    <input type="password" class="form-control" id="contraseña" name="contraseña" maxlength="3" required> 
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Rol</label>
    <select lass="form-control" required name="rol">
  <option> </option>
  <option value="Anfitrion" >Anfitrion</option>
  <option value="Invitado">Invitado</option>
</select>
  </div>
  <button type="submit" class="btn btn-primary">Crear Registro</button>
</form>
</div>