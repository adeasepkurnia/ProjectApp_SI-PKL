<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Visi_Misi extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Sistem Informasi PKL',
			'subtitle' => 'Visi_Misi',
		];
		return view('v_visi_misi', $data);
	}
}
