<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Contact extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Sistem Informasi PKL',
			'subtitle' => 'Contact',
		];
		return view('v_contact', $data);
	}
}
