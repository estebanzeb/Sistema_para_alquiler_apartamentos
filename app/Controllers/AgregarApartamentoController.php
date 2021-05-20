<?php

namespace App\Controllers;
use App\Models\AgregarApartamentoModelo;
class AgregarApartamentoController extends BaseController
{
	public function index()
	{	
		$agregar =  new AgregarApartamentoModelo();
		$resultadoagregaras = $agregar->readApartamento();
		$dato = array(
			"agregaras" => $resultadoagregaras,
		);
		echo view('layouts/header');
		echo view('agregar_view', $dato);//Segundo parametro (Los datos que quiero enviar) 
		echo view('layouts/footer');
	} 
	public function crear(){
		//$session = session();
		//$session->get('usarname');
		//if($session->get('usarname') != "" || $session->get('usarname') != null){
		
		echo view('layouts/header');
		echo view('agregarApartamento_view');
		echo view('layouts/footer');
		//}else{
		//	echo "NO tiene permisos para acceder";
		//}
	}
	public function añadirApartamento(){
		$request = \Config\Services::request();
		$agregarModelo =  new AgregarApartamentoModelo();
		
		$ciudad = $request->getPost('ciudad');
	|	$pais = $request->getPost('pais');
		$direccion = $request->getPost('direccion');
		$ubicacionGoogleMap = $request->getPost('ubicacionGoogleMap');
		$numeroAbitaciones = $request->getPost('numeroAbitaciones');
		$imgDestacada = $request->getPost('imgDestacada');
		$valorNoche = $request->getPost('valorNoche');
		$reseña = $request->getPost('reseña');

		$file = $request->getFile('imgApartamento');
		$imageName = $file->getRandomName();
		$imagenurl = "";
		if ($file->isValid() && ! $file->hasMoved()){
			$file->move('./uploads/imagenes/', $imageName);
			$imagenurl = base_url(). '/uploads/imagenes/'. $imageName;
		}

		$agregarModelo->addApartamento($ciudad, $pais, $direccion, $ubicacionGoogleMap, $numeroAbitaciones, $imgApartamento, $imgDestacada, $valorNoche, $reseña);

		return redirect()->to('/public/agregar');
	}
	public function eliminarApartamento(){
		$request = \Config\Services::request();
		$agregarModelo =  new AgregarApartamentoModelo();
		$id= $request->getGet('id');
		$agregarModelo->deleteApartamento($id);
		return redirect()->to('/public/agregar');
	}
	public function modificarApartamento(){
		$request = \Config\Services::request();
		$agregarModelo =  new AgregarApartamentoModelo();

		$id= $request->getGet('id');
		$agregar = $agregarModelo ->getApartamento($id);

		echo view('layouts/header');
		echo view('modificarAgregar_view',array("agregar" =>$agregar[0]));
		echo view('layouts/footer');
	}
	public function modificarEditar(){
        $request = \Config\Services::request();
		$agregarModelo =  new AgregarApartamentoModelo();

		$ciudad = $request->getPost('ciudad');
	|	$pais = $request->getPost('pais');
		$direccion = $request->getPost('direccion');
		$ubicacionGoogleMap = $request->getPost('ubicacionGoogleMap');
		$numeroAbitaciones = $request->getPost('numeroAbitaciones');
		$imgApartamento = $request->getPost('imgApartamento');
		$imgDestacada = $request->getPost('imgDestacada');
		$valorNoche = $request->getPost('valorNoche');
		$reseña = $request->getPost('reseña');

		$id= $request->getGet('id');
		$agregarModelo -> agregarEditar($id, $ciudad, $pais, $direccion, $ubicacionGoogleMap, $numeroAbitaciones, $imgApartamento, $imgDestacada, $valorNoche, $reseña);

		return redirect()->to('/public/agregar');
    }
}