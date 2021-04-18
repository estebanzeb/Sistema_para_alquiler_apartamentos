<div class="container">
<img src="<?php echo base_url(); ?>/public/assets/img/imagen1.jfif ?>" alt="">
<h1>Registro</h1>
<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre completo</label>
    <input type="email" class="form-control" id="nombre" aria-describedby="emailHelp" require> 
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Correo(Email)</label>
    <input type="password" class="form-control" id="correo" require>
    <div id="emailHelp" class="form-text">Correo@gmail.com</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">País</label>
    <input type="email" class="form-control" id="pais" aria-describedby="emailHelp" require> 
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Ciudad</label>
    <input type="password" class="form-control" id="ciudad" require>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Contraseña</label>
    <input type="email" class="form-control" id="contraseña" aria-describedby="emailHelp" placeholder="Contraseña" maxlength="3" name="precio" required> 
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirmar contraseña</label>
    <input type="password" class="form-control" id="contraseña2" require>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Rol (anfitrion, invitado)</label>
    <input type="password" class="form-control" id="rol" require>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<?php
function validaRequerido($valor){
  if(trim($valor) == ''){
     return false;
  }else{
     return true;
  }
}

function validarEntero($valor){
   if(filter_var($valor, FILTER_VALIDATE_INT) === FALSE){
      return false;
   }else{
      return true;
   }
}
?>