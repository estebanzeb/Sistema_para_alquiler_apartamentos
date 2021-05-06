<?php

namespace App\Controllers;

class LoginController extends BaseController
{
	public function index()

	{	echo view('layouts/header');
		echo view('login_view');
		echo view('layouts/footer');
	}
	public function ingresar(){
		$session = session();
		//SELECT * from usar WHERE usarname = user and password = pas;
		//id,username, password
		$newdata = [
			'username'  => 'johndoe',
			'email'     => 'johndoe@some-site.com',
			'rol' => TRUE
	];
	$session->set($newdata);
	return redirect()->to('/public/registro/crear');
	}
}
