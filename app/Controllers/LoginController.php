<?php

namespace App\Controllers;

class LoginController extends BaseController
{
	public function index()
	{	
		
		echo view('layouts/header');
		echo view('login_view');
		echo view('layouts/footer');
	}
	public function sgnIn(){
		
		//SELECT * from usar WHERE usarname = user and password = pass;
		//id,username, password
		$session = session();
		$newdata = [
			'username'  => 'johndoe',
			'email'     => 'johndoe@some-site.com',
			'logged_in' => TRUE
	];
	$session->set($newdata);
	return redirect()->to('/public/registro/crear');
	}
}
