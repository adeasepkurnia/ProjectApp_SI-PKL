<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelAdmin;

class Admin extends BaseController
{
	public function __construct()
	{
		helper('form');
		$this->ModelAdmin = new ModelAdmin();
	}

	public function index()
	{
		$data = [
			'title' => 'Sistem Informasi PKL',
			'subtitle' => 'Welcome Admin',
			'totaluser' => $this->ModelAdmin->totalUser(),
			'totalpendaftaranmasuk' => $this->ModelAdmin->totalpendaftaranmasuk(),
			'totalabsensiswa' => $this->ModelAdmin->totalabsensiswa(),
		];
		return view('admin/v_dashboard', $data);
	}

}
