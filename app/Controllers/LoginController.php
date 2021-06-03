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
		
		
		$session = session();
		$newdata = [
			'username'  => 'johndoe',
			//'email'     => 'johndoe@some-site.com',
			//'logged_in' => TRUE
	];
	$session->set($newdata);
	return redirect()->to('/public/registro/crear');
	}
}
