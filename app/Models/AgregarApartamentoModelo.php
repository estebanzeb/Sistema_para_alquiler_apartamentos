<?php

namespace App\Models;

use CodeIgniter\Model;

class AgregarApartamentoModelo extends Model
{
    function addApartamento($ciudad, $pais, $direccion, $ubicacionGoogleMap, $numeroAbitaciones, $imgApartamento, $imgDestacada, $valorNoche, $reseña){

        $sql = "INSERT INTO agregar (ciudad, pais, dirección, ubicacionGoogleMap, numeroAbitaciones, imgApartamento, imgDestacada, valorNoche, , reseña) VALUES ('{$ciudad}', '${pais}', '${dirección}', '${ubicacionGoogleMap}', '${numeroAbitaciones}', '${imgApartamento}' '${imgDestacada}', '${valorNoche}', '${reseña}')";
        $this->db->query($sql);
    }
    function readApartamento(){
        $sql = "SELECT * FROM agregar";
        $agregar= $this->db->query($sql);
        return $agregar->getResult();
    }
    function deleteApartamento($id){
        $sql = "DELETE FROM agregar WHERE id={$id}";
        $this->db->query($sql);
    }
    function getApartamento($id){
        $sql = "SELECT * FROM agregar WHERE id={$id}";
        $agregar= $this->db->query($sql);
        return $agregar->getResult();
    }
    function agregarEditar($ciudad, $pais, $direccion, $ubicacionGoogleMap, $numeroAbitaciones, $imgApartamento, $imgDestacada, $valorNoche, $reseña){
        $sql = "UPDATE agregar set ciudad='{$ciudad}', pais='{$pais}', direccion='{$direccion}', ubicacionGoogleMap='{$ubicacionGoogleMap}', numeroAbitaciones='{$numeroAbitaciones}', imgApartamento='{$imgApartamento}' , imgDestacada='{$imgDestacada}', valorNoche='{$valorNoche}', reseña='{$reseña}' WHERE id={$id}";
        $this->db->query($sql);
    }
}