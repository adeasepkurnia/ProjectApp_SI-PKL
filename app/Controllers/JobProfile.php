<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class JobProfile extends BaseController
{
	public function __construct()
	{
		helper('form');	
	}
	public function index()
	{
		$data = [
			'title' => 'Sistem Informasi PKL',
			'subtitle' => 'JobProfile',
		];
		return view('v_job-profile', $data);
	}
}
