<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema para alquiler apartamentos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>

<nav class="nav nav-pills flex-column flex-sm-row">
<div class="container-fluid navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php echo base_url().'/public/home'?>">
      <img src="<?php echo base_url(); ?>/public/assets/img/imagen1.jfif ?>" alt="" width="30" height="24" class="d-inline-block align-text-top">
    </a>
  </div>
  <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="<?php echo base_url().'/public/login'?>">Login</a>
  <a class="flex-sm-fill text-sm-center nav-link" href="<?php echo base_url().'/public/registro'?>">Registros</a>
  <a class="flex-sm-fill text-sm-center nav-link" href="<?php echo base_url().'/public/registro/crear'?>">Crear Registro</a>
  <a class="flex-sm-fill text-sm-center nav-link" href="<?php echo base_url().'/public/agregar'?>">Apartamentos</a>
  <a class="flex-sm-fill text-sm-center nav-link" href="<?php echo base_url().'/public/agregar/crear'?>">Agregar Apartamento</a>
  <a class="flex-sm-fill text-sm-center nav-link" href="<?php echo base_url().'/public/agregar/crear'?>">Sobre nosotros</a>
</nav>
