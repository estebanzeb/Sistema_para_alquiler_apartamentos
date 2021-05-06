<?php

namespace App\Models;

use CodeIgniter\Model;

class RegistroModelo extends Model
{
    function addRegistro($nombre, $correo, $pais, $ciudad, $contraseña, $rol){

        $sql = "INSERT INTO registro (nombre, correo, pais, ciudad, contraseña, rol) VALUES ('{$nombre}', '${correo}', '${pais}', '${ciudad}', '${contraseña}', '${rol}')";
        $this->db->query($sql);
    }
    function readRegistro(){
        $sql = "SELECT * FROM registro";
        $registro= $this->db->query($sql);
        return $registro->getResult();
    }
    function deleteRegistro($id){
        $sql = "DELETE FROM registro WHERE id={$id}";
        $this->db->query($sql);
    }
    function getRegistro($id){
        $sql = "SELECT * FROM registro WHERE id={$id}";
        $registro= $this->db->query($sql);
        return $registro->getResult();
    }
    function registroEditar($nombre, $correo, $pais, $ciudad, $contraseña, $rol){
        $sql = "UPDATE registro set registro='{$nombre}', registro='{$correo}', registro='{$pais}', registro='{$ciudad}', registro='{$contraseña}', registro='{$rol}', WHERE id={$id}";
        $this->db->query($sql);
    }
}
