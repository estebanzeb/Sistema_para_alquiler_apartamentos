<?php

namespace App\Controllers;
use App\Models\AgregarApartamentoModelo;
class AgregarApartamentoController extends BaseController
{
	public function index()
	{	
	
		echo view('layouts/header');
		echo view('agregarApartamento_view');
		echo view('layouts/footer');
	}
}