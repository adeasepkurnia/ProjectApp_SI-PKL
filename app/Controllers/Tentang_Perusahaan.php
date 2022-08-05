<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Tentang_Perusahaan extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Sistem Informasi PKL',
			'subtitle' => 'Tentang_Perusahaan',
		];
		return view('v_perusahaan', $data);
	}
}
