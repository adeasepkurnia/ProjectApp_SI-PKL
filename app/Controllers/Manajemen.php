<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Manajemen extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Sistem Informasi PKL',
			'subtitle' => 'Manajemen',
		];
		return view('v_manajemen', $data);
	}
}
