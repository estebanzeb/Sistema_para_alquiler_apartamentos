<?php

namespace App\Models;

use CodeIgniter\Model;

class AgregarApartamentoModelo extends Model
{
    function addApartamento(){
        $ciudad ="Medellín";
        $pais="Colombia";
        $direccion="Calle 104 D # ";
        $ubicacionGoogleMap="Sabra diosito";
        $numeroAbitaciones="las que quiera";
        $imgApartamento="jajajaja";
        $imgDestacada ="JAJAJAJAJAJAAJAJAJJA";
        $valorNoche="La que le de la gana";
        $reseña="Una por queria";

        $sql = "INSERT INTO agregar (ciudad, pais, dirección, ubicacionGoogleMap, numeroAbitaciones, imgApartamento, imgDestacada, valorNoche, , reseña) VALUES ('{$ciudad}', '${pais}', '${dirección}', '${ubicacionGoogleMap}', '${numeroAbitaciones}', '${imgApartamento}' '${imgDestacada}', '${valorNoche}', '${reseña}',)";
        $this->db->query($sql);
    }
    function readApartamento(){
        $sql = "SELECT * FROM agregar";
        $agregar= $this->db->query($sql);
        return $agregar->getResult();
    }

    // ...
}