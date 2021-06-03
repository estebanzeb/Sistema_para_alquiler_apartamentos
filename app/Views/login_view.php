<body background="<?php echo base_url(); ?>/public/assets/img/fondo4.jpg">
<div class="container">
<img src="<?php echo base_url(); ?>/public/assets/img/.jfif ?>" alt="">

<h1 class="text-danger">Inicio de sesion</h1>

<form method="POST" action="<?php echo base_url().'/public/signin'?> ">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-info ">Correo</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require> 
    <div id="emailHelp" name="username" class="form-text text-info">NOMBRE@gmail.com</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label text-info ">Contraseña</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="email" require>
  </div>
  <button type="submit" class="btn btn-primary">Entrar</button>
</form>
</div>
</body>