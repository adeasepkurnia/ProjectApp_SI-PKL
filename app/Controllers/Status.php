<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelStatus;
class Status extends BaseController
{
    public function __construct() 
    {
        $this->ModelStatus = new ModelStatus;
    }
    public function index()
    {
        $data = [
			'title' => 'Sistem Informasi PKL',
			'subtitle' => 'STATUS PENDAFTARAN',
            'siswa' => $this->ModelStatus->getBiodataSiswa(),
		];
		return view('siswa/v_status', $data);
    }

    
}