<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	
	{
		$data = [
			'title' => 'Sistem Informasi PKL',
			'subtitle' => 'HOME'
		];
		return view('v_home', $data);
	}
}
