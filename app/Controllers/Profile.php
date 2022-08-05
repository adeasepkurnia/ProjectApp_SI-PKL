<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelSiswa;
use App\Models\ModelJob;
use App\Models\ModelProfile;
class Profile extends BaseController
{
    public function __construct() 
    {
        $this->ModelProfile = new ModelProfile;
        $this->ModelSiswa = new ModelSiswa;
        $this->ModelJob = new ModelJob;
        helper('form');
    }
    public function index()
    {
        $data = [
			'title' => 'Sistem Informasi PKL',
			'subtitle' => 'Profile',
            'siswa' => $this->ModelSiswa->getBiodataSiswa(),
            'Job' => $this->ModelJob->getAllData(),
            'validation' => \Config\Services::validation(),
		];
		return view('siswa/v_profile', $data);
    }

    
    public function updateBiodata($id_siswa)
    {
        $data = [
            'id_siswa' => $id_siswa,
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'jk' => $this->request->getPost('jk'),
            'no_telpon' => $this->request->getPost('no_telpon'),
            'email' => $this->request->getPost('email'),
            'agama' => $this->request->getPost('agama'),
            'alamat_rumah' => $this->request->getPost('alamat_rumah'),
            
        ];
        
        $this->ModelSiswa->editData($data);
        session()->setFlashdata('pesan', 'Identitas Berhasil Di Update');
        return redirect()->to('/Profile');
    }

    public function updateFoto($id_siswa) 
    {
        if ($this->validate([
			'foto' => [
				'label' => 'Foto',
				'rules' => 'max_size[foto,2MB]',
				'errors' => [
					'max_size'=> 'Ukuran {field} Harus Max 2MB !!',
				]
			]
		])) {
            $siswa = $this->ModelSiswa->detailData($id_siswa);
            if ($siswa['foto'] != "" or $siswa['foto'] != null) {
               unlink('./foto/' . $siswa['foto']);
            }

            $file = $this->request->getFile('foto');
            $nama_file = $file->getRandomName();
            $data = [
                'id_siswa' => $id_siswa,
                'foto' => $nama_file,
            ];
            // upload file foto
            $file->move('foto/', $nama_file);
            $this->ModelSiswa->editData($data);
            session()->setFlashdata('pesan', 'Foto Berhasil Di Update');
            return redirect()->to('/Profile');
        } else {
            // jika ada validasi
            $validation = \Config\Services::validation();
            return redirect()->to('/Profile')->withInput()->with('validation', $validation);
        }
    }
    public function updateasalkampus($id_siswa)
        {
            $data = [
                'id_siswa' => $id_siswa,
                'nama_kampus' => $this->request->getPost('nama_kampus'),
                'alamat_kampus' => $this->request->getPost('alamat_kampus'),
                'prodi' =>$this->request->getPost('prodi'),
            ];
            
            $this->ModelSiswa->editData($data);
            session()->setFlashdata('pesan', 'Asal Kampus Berhasil Di Update');
            return redirect()->to('/Profile');
        }
    
}