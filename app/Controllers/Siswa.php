<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelSiswa;
use App\Models\ModelJob;
use App\Models\ModelLampiran;
class Siswa extends BaseController
{
    public function __construct() 
    {
        $this->ModelSiswa = new ModelSiswa;
        $this->ModelJob = new ModelJob;
        helper('form');
    }
    public function index()
    {
        $data = [
			'title' => 'Sistem Informasi PKL',
			'subtitle' => 'Halaman Dashboard',
            'siswa' => $this->ModelSiswa->getBiodataSiswa(),
            'Job' => $this->ModelJob->getAllData(),
            'validation' => \Config\Services::validation(),
		];
		return view('siswa/v_dashboard', $data);
    }
    
}