<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelAbsensi;
use App\Models\ModelAbsen;
class Absensi extends BaseController
{
    public function __construct() 
    {
        $this->ModelAbsensi = new ModelAbsensi;
        helper('form');
        
    }
    public function index()
    {
        $data = [
			'title' => 'Sistem Informasi PKL',
			'subtitle' => 'Absensi',
			'absen' => $this->ModelAbsensi->getAllData(),
            'validation' => \Config\Services::validation(),
            
		];
		return view('siswa/v_absensi', $data);
    }
	public function simpanAbsensi()
    {
        {
            if ($this->validate([
                'nama_lengkap'    => [
                    'label' => 'Nama Lengkap',
                    'rules'  => 'required',
                    'errors' => [
                        'required' => '{field} Wajib Diisi !!'
                    ]
                ],
                'npm' => [
                    'label' => 'NPM',
                    'rules'  => 'required',
                    'errors' => [
                        'required' => '{field} Wajib Diisi !!', 
                        
                    ]
                ],
                'tanggal'    => [
                    'label' => 'tanggal',
                    'rules'  => 'required',
                    'errors' => [
                        'required' => '{field} Wajib Diisi !!'
                    ]
                ],
                'nama_kegiatan'    => [
                    'label' => 'Nama Kegiatan',
                    'rules'  => 'required',
                    'errors' => [
                        'required' => '{field} Wajib Diisi !!'
                    ]
                ],
                'jam_kehadiran'    => [
                    'label' => 'Jam Kehadiran',
                    'rules'  => 'required',
                    'errors' => [
                        'required' => '{field} Wajib Diisi !!'
                    ]
                ],
                'jam_pulang'    => [
                    'label' => 'Jam Pulang',
                    'rules'  => 'required',
                    'errors' => [
                        'required' => '{field} Wajib Diisi !!'
                    ]
                ],
            ])) {
                //jika tidak ada validasi maka simpan data
                $data=[
                        'nama_lengkap'=> $this->request->getPost('nama_lengkap'),
                        'npm'=> $this->request->getPost('npm'),
                        'tanggal'=> $this->request->getPost('tanggal'),
                        'nama_kegiatan'=> $this->request->getPost('nama_kegiatan'),
                        'jam_kehadiran'=> $this->request->getPost('jam_kehadiran'),
                        'jam_pulang'=> $this->request->getPost('jam_pulang'),
                    ];
                    
                $this->ModelAbsensi->insertData($data);
                session()->setFlashdata('pesan', ' Terimakasih, Absen Berhasil Dikirim, Silahkan Absen Kembali Besok!!');
                return redirect()->to('/absensi');
            }else {
                //jika ada validasi
                $validation = \Config\Services::validation();
                return redirect()->to('/absensi')->withInput()->with('validation', $validation);
            }
        }
    }

    
    
}