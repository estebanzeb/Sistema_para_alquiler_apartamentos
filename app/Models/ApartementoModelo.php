<?php

namespace App\Models;

use CodeIgniter\Model;

class ApartementoModelo extends Model
{
    function addApartamento(){
        $nombre ="Esteban";
        $correo="estebanzeb@gmail.com";
        $pais="Colombia";
        $ciudad="Medellín";
        $contraseña="123456789";
        $rol="Afitrion";
        $sql = "INSERT INTO registro (nombre, correo, pais, ciudad, contraseña, rol) VALUES ('{$nombre}','${correo}','${pais}','${cidudad}','${contraseña}','${rol}')";
    }
    // ...
}