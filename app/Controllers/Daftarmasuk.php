<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelDaftarmasuk;

class Daftarmasuk extends BaseController
{
    public function __construct() 
    {
        $this->ModelDaftarmasuk = new ModelDaftarmasuk();
		helper('form');  
    }

	public function index()
    {
        $data = [
            'title' => 'Sistem Informasi',
            'subtitle'=> 'Pendaftaran Masuk',
            'daftarmasuk' => $this->ModelDaftarmasuk->getDaftarmasuk(),
            
        ];
            
        return view('admin/Daftar/v_daftarmasuk', $data);
    }
    public function detailData($id_siswa)
    {
        $data = [
            'title' => 'Sistem Informasi PKL',
            'subtitle' => 'Detail Data Siswa',
            'siswa' => $this->ModelDaftarmasuk->detailData($id_siswa),
            'berkas' => $ModelDaftarmasuk->lampiran($id_siswa),   
        ];
        return view('admin/Daftar/v_detail', $data);
    }

}