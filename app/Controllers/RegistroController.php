<?php

namespace App\Controllers;
use App\Models\RegistroModelo;
class RegistroController extends BaseController
{
	public function index()
	{	
		$registrar =  new RegistroModelo();
		$resultadoregistros = $registrar->readRegistro();
		$dato = array(
			"registros" => $resultadoregistros,
		);
		echo view('layouts/header');
		echo view('registro_view', $dato);//Segundo parametro (Los datos que quiero enviar) 
		echo view('layouts/footer');
	} 
	public function crear(){

		//$session = session();
		//$session->get('usarname');

		//if($session->get('username') != "" || $session->get('usarname') != null){
		
			echo view('layouts/header');
			echo view('crearRegistro_view');
			echo view('layouts/footer');
			
		//}else{

			//Echo "Usted no tiene permisos para ingresar";
			
		//}
	}
	public function añadirRegistro(){
		$request = \Config\Services::request();
		$registrarModelo =  new RegistroModelo();

		$nombre = $request->getPost('nombre');
		$correo = $request->getPost('correo');
		$pais = $request->getPost('pais');
		$ciudad = $request->getPost('ciudad');
		$contraseña = $request->getPost('contraseña');
		$rol = $request->getPost('rol');
		
		$registrarModelo->addRegistro($nombre, $correo, $pais, $ciudad, $contraseña, $rol);

		return redirect()->to('/public/registro');
	}
	public function eliminarRegistro(){

		//$session = session();
		//$session->get('usarname');
		//if($session->get('usarname') != "" || $session->get('usarname') != null){
		

		$request = \Config\Services::request();
		$registrarModelo =  new RegistroModelo();
		$id= $request->getGet('id');
		$registrarModelo->deleteRegistro($id);
		return redirect()->to('/public/registro');
	//}else{
	//	echo "NO TIENES PERMISOS DE ELIMINAR";
	//}
	}
	public function modificarRegistro(){
		$request = \Config\Services::request();
		$registrarModelo =  new RegistroModelo();

		$id= $request->getGet('id');
		$registro = $registrarModelo ->getRegistro($id);

		echo view('layouts/header');
		echo view('modificarRegistro_view',array("registro" =>$registro[0]));
		echo view('layouts/footer');
	}
	public function modificarEditar(){
        $request = \Config\Services::request();
		$registrarModelo =  new RegistroModelo();

		$nombre = $request->getPost('nombre');
		$correo = $request->getPost('correo');
		$pais = $request->getPost('pais');
		$ciudad = $request->getPost('ciudad');
		$contraseña = $request->getPost('contraseña');
		$rol = $request->getPost('rol');

		$id= $request->getGet('id');
		$registrarModelo -> registroEditar($id, $nombre, $correo, $pais, $ciudad, $contraseña, $rol);

		return redirect()->to('/public/registro');
    }
}