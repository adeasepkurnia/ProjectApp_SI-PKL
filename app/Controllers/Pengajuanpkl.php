<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Controllers\BaseController;
use App\Models\ModelPengajuanpkl;
use App\Models\ModelSiswa;
use App\Models\ModelJob;
class Pengajuanpkl extends BaseController
{
    public function __construct() 
    {
        $this->ModelPengajuanpkl = new ModelPengajuanpkl;
        $this->ModelSiswa = new ModelSiswa;
        $this->ModelJob = new ModelJob;
        $this->validation = \Config\Services::validation();
		$this->session = session();
        helper('form');
    }
    public function index()
    {
        $data = [
			'title' => 'Sistem Informasi PKL',
			'subtitle' => ' Pengajuan PKL',
            'siswa' => $this->ModelSiswa->getBiodataSiswa(),
            'Job' => $this->ModelJob->getAllData(),
            'validation' => \Config\Services::validation(),
		];
		return view('siswa/v_pengajuanpkl', $data);
    }

    
    public function updatePendaftaran($id_siswa)
    {
        $data = [
            'id_siswa' => $id_siswa,
            'npm' => $this->request->getPost('npm'),
            'id_job_profile' =>$this->request->getPost('id_job_profile'),
            'tgl_mulai' => $this->request->getPost('tgl_mulai'),
            'tgl_selesai' => $this->request->getPost('tgl_selesai'),
        ];
        
        $this->ModelSiswa->editData($data);
        session()->setFlashdata('pesan', 'Pendaftaran Berhasil Di Update');
        return redirect()->to('/Pengajuanpkl');
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
            return redirect()->to('/Pengajuanpkl');
        } else {
            // jika ada validasi
            $validation = \Config\Services::validation();
            return redirect()->to('/Pengajuanpkl')->withInput()->with('validation', $validation);
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
            session()->setFlashdata('pesan', 'Pendaftaran Berhasil Di Update');
            return redirect()->to('/Pengajuanpkl');
        }
        
        public function updateidentitas($id_siswa)
        {
            $data = [
                'id_siswa' => $id_siswa,
                'nama_lengkap' => $this->request->getPost('nama_lengkap'),
                'tempat_lahir' => $this->request->getPost('tempat_lahir'),
                'tgl_lahir' =>$this->request->getPost('tgl_lahir'),
                'alamat_rumah' =>$this->request->getPost('alamat_rumah'),
                'jk' =>$this->request->getPost('jk'),
                'no_telpon' =>$this->request->getPost('no_telpon'),
                'email' =>$this->request->getPost('email'),
                'agama' =>$this->request->getPost('agama'),
            ];
            
            $this->ModelSiswa->editData($data);
            session()->setFlashdata('pesan', 'Pendaftaran Berhasil Di Update');
            return redirect()->to('/Pengajuanpkl');
        }
        public function addBerkas($id_siswa)
        {
            if ($this->validate([
                'id_lampiran' => [
                    'label' => 'Lampiran',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Belum Dipilih !!'
                    ]
                ],
                'berkas' => [
                    'label' => 'Berkas',
                    'rules' => 'max_size[berkas,2048]|ext_in[berkas,pdf]',
                    'errors' => [
                        'max_size' => 'Ukuran {field} Maksimal 2MB !!',
                        'ext_in' => '{field} Wajib Format PDF !!',
                    ]
                ]
            ])) {
                $berkas = $this->request->getFile('berkas');
                $nama_file = $berkas->getRandomName();
                $name = $berkas->getName();
               $ext = $berkas->getClientExtension();
    
                $data = [
                    'id_siswa' => $id_siswa,
                    'id_lampiran' => $this->request->getPost('id_lampiran'),
                    'ket' => $this->request->getPost('ket'),
                    'berkas' => $name
                ];
                
                $berkas->move('./berkas/', $name);
                $this->ModelSiswa->addBerkas($data);
                session()->setFlashdata('pesan', 'Berkas Berhasil Di Upload');
                return redirect()->to('/pengajuanpkl');
            } else {
                //jika ada validasi
                session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
                return redirect()->to('/pengajuanpkl');
            }
        }

        public function deleteBerkas($id_berkas)
	{
		$berkas = $this->ModelSiswa->detailBerkas($id_berkas);
		if ($berkas['berkas'] != "") {
			unlink('./berkas/' . $berkas['berkas']);
		}
		$data = [
			'id_berkas' => $id_berkas,
        ];
		$this->ModelPengajuanpkl->deleteBerkas($data);
		session()->setFlashdata('pesan', 'Berkas Berhasil Di Hapus !!!');
		return redirect()->to(base_url('pengajuanpkl'));
	}

	public function upload($id_siswa)
	{
		$data = [
			'id_siswa' => $id_siswa,
			'stat_pendaftaran' => '1'
        ];
		$this->ModelSiswa->editData($data);
		session()->setFlashdata('pesan', 'Data Berhasil Dikirim !!!');
		return redirect()->to(base_url('/siswa'));
	}
    public function cetakberkas()
    {

    }

    public function simpanPengajuanpkl()
	{
		if ($this->validate([
			'npm'=> [
					'label' => 'npm',
					'rules'=> 'required',
					'errors' => [
						'required' => '{field} Wajib di Isi dan Tidak Boleh Kosong !!'
					]
					],
			'nama_lengkap'=> [
				'label' => 'Nama Lengkap',
				'rules'=> 'required',
				'errors' => [
					'required' => '{field} Wajib di Isi dan Tidak Boleh Kosong !!'
				]
				],
			'tempat_lahir'=> [
					'label' => 'Tempat Lahir',
					'rules'=> 'required',
					'errors' => [
						'required' => '{field} Wajib di Isi dan Tidak Boleh Kosong !!'
					]
					],
			'tgl_lahir'=> [
				'label' => 'Nama Kegiatan',
				'rules'=> 'required',
				'errors' => [
				'required' => '{field} Wajib di Isi dan Tidak Boleh Kosong !!'
				]
				],
			'jk'=> [
				'label' => 'Jenis Kelamin',
				'rules'=> 'required',
				'errors' => [
				'required' => '{field} Wajib di Isi dan Tidak Boleh Kosong !!',
								
				]
				],
			'alamat_rumah'=> [
				'label' => 'Alamat Rumah',
				'rules'=> 'required',
				'errors' => [
				'required' => '{field} Wajib di Isi dan Tidak Boleh Kosong !!',	
				]
				],
		'no_telpon'=> [
			'label' => 'No Telpon',
			'rules'=> 'required',
			'errors' => [
			'required' => '{field} Wajib di Isi dan Tidak Boleh Kosong !!',	
				]
				],
		'nama_kampus'=> [
			'label' => 'Nama Kampus',
			'rules'=> 'required',
			'errors' => [
				'required' => '{field} Wajib di Isi dan Tidak Boleh Kosong !!',	
				]
				],
		'alamat_kampus'=> [
			'label' => 'Alamat Kampus',
			'rules'=> 'required',
			'errors' => [
				'required' => '{field} Wajib di Isi dan Tidak Boleh Kosong !!',	
			]
			],
		'prodi'=> [
			'label' => 'prodi',
			'rules'=> 'required',
			'errors' => [
				'required' => '{field} Wajib di Isi dan Tidak Boleh Kosong !!',	
			]
			],
		'tgl_mulai'=> [
			'label' => 'Tanggal Mulai',
			'rules'=> 'required',
			'errors' => [
				'required' => '{field} Wajib di Isi dan Tidak Boleh Kosong !!',	
			]
			],
		'tgl_selesai'=> [
			'label' => 'Tanggal Selesai',
			'rules'=> 'required',
			'errors' => [
				'required' => '{field} Wajib di Isi dan Tidak Boleh Kosong !!',	
			]
			],
		'job_profile'=> [
			'label' => 'Job Profile',
			'rules'=> 'required',
			'errors' => [
				'required' => '{field} Wajib di Isi dan Tidak Boleh Kosong !!',	
			]
			],		
			])) {
				//jika valid
				$data = [
					'npm' => $this->request->getPost('npm'),
					'nama_lengkap' => $this->request->getPost('nama_lengkap'),
					'tempat_lahir' =>$this->request->getPost('tempat_lahir'),
					'tgl_lahir' =>$this->request->getPost('tgl_lahir'),
					'jk' =>$this->request->getPost('jk'),
					'alamat_rumah' =>$this->request->getPost('alamat_rumah'),
					'no_telpon' =>$this->request->getPost('no_telpon'),
					'nama_kampus' =>$this->request->getPost('nama_kampus'),
					'alamat_kampus' =>$this->request->getPost('alamat_kampus'),
					'prodi' =>$this->request->getPost('prodi'),
					'tgl_mulai' =>$this->request->getPost('tgl_mulai'),
					'tgl_selesai' =>$this->request->getPost('tgl_selesai'),
					'job_profile' =>$this->request->getPost('job_profile'),
					'validation' => \Config\Services::validation(),
				];
				$this->ModelPengajuanpkl->insertData($data);
                session()->setFlashdata('pesan', ' Terimakasih, Form Berhasil Dikirim, Silahkan Tunggu Perintah Selanjutnya!!');
                return redirect()->to('/pengajuanpkl');
            }else {
                //jika ada validasi
                $validation = \Config\Services::validation();
                return redirect()->to('/pengajuanpkl')->withInput()->with('validation', $validation);
            }
	}
    
}