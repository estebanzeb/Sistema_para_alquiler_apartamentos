<div class="container">
<img src="<?php echo base_url(); ?>/public/assets/img/imagen1.jfif ?>" alt="">

<h1>Inicio de sesion</h1>

<form method="POST" action="<?php echo base_url().'/public/signin'?> ">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Correo</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require> 
    <div id="emailHelp" name="email" class="form-text">NOMBRE@gmail.com</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="username" require>
  </div>
  <button type="submit" class="btn btn-primary">Entrar</button>
</form>
</div>