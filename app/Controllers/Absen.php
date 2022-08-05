<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelAbsensi;
use App\Models\ModelAbsen;
use Dompdf\Dompdf;
class Absen extends BaseController
{
    public function __construct() 
    {
        helper('form');
		$this->validation = \Config\Services::validation();
		$this->session = session();
		$this->ModelAbsensi= new ModelAbsensi();
        
    }
    public function index()
    {
        $data = [
			'title' => 'Sistem Informasi PKL',
			'subtitle' => 'Absensiswa',
			'absen' => $this->ModelAbsensi->getAllData(),
			'validation'=> \Config\Services::validation(),
		];
		return view('admin/daftar/v_absensiswa', $data);
    }
    public function save_absen()
	{
		if ($this->validate([
		'nama_lengkap'=> [
			'label' => 'nama_lengkap',
			'rules'=> 'required',
			'errors' => [
				'required' => '{field} Wajib di Isi dan Tidak Boleh Kosong !!'
			]
		],
		'npm'=> [
				'label' => 'npm',
				'rules'=> 'required',
				'errors' => [
					'required' => '{field} Wajib di Isi dan Tidak Boleh Kosong !!'
				]
		],
		'tanggal'=> [
				'label' => 'tanggal',
				'rules'=> 'required',
				'errors' => [
					'required' => '{field} Wajib di Isi dan Tidak Boleh Kosong !!'
				]
		],
				'nama_kegiatan'=> [
					'label' => 'Nama_kegiatan',
					'rules'=> 'required',
					'errors' => [
						'required' => '{field} Wajib di Isi dan Tidak Boleh Kosong !!'
					]
				],
					'jam_kehadiran'=> [
						'label' => 'jam_kehadiran',
						'rules'=> 'required',
						'errors' => [
							'required' => '{field} Wajib di Isi dan Tidak Boleh Kosong !!',
							
						]
				],
				'jam_pulang'=> [
					'label' => 'jam_pulang',
					'rules'=> 'required',
					'errors' => [
						'required' => '{field} Wajib di Isi dan Tidak Boleh Kosong !!',
						
					]
			],				

		])) {
			//jika valid
			$data = [
				'id_absen' => $id_absen,
				'nama_lengkap' => $this->request->getPost('nama_lengkap'),
				'npm' => $this->request->getPost('npm'),
				'tanggal' =>$this->request->getPost('tanggal'),
				'nama_kegiatan' =>$this->request->getPost('nama_kegiatan'),
				'jam_kehadiran' =>$this->request->getPost('jam_kehadiran'),
				'validation' => \Config\Services::validation(),
			];
			$this->ModelAbsensi->editAbsensi($data);
        	session()->setFlashdata('pesan', 'Absensi telah diupdate');
        	return redirect()->to('/absen');
		}else {
			//jika ada validasi
		$validation = \Config\Services::validation();
		return redirect()->to('/absen')->withInput()->with('validation', $validation);
		}
	}
	public function printPdf()
	{
		$data = [

			'title' => 'Sistem Informasi PKL',
			'subtitle' => 'Absensiswa',
			'absen' => $this->ModelAbsensi->getAllData(),
			
		];
		$html = view('admin/Daftar/v_absensiswa', $data);

		// instantiate and use the dompdf class
	$html = new Dompdf();
	$dompdf->loadHtml($html);
// (Optional) Setup the paper size and orientation
	$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
	$dompdf->render();

// Output the generated PDF to Browser
	$dompdf->stream();
	}

	public function editData($id_absen)
	{
		$data = [
			'id_absen' => $id_absen,
			'nama_lengkap' => $this->request->getpost(),
			'npm' => $this->request->getpost(),
			'tanggal' => $this->request->getpost(),
			'nama_kegiatan' => $this->request->getpost(),
			'jam_kehadiran' => $this->request->getpost(),
			'jam_pulang' => $this->request->getpost(),
			'validation' => \Config\Services::validation(),

		];
		$this->ModelAbsensi->editData($data);
		session()->setFlashdata('edit', 'Data Berhasil di Edit !!');
		return redirect()->to(base_url('/absen'));	
		
	}

	public function deleteData($id_absen)
	{
		$data = [
			'id_absen' => $id_absen,
		];
		$this->ModelAbsensi->deleteData($data);
		session()->setFlashdata('delete', 'Data Berhasil di Hapus !!');
		return redirect()->to(base_url('/absen'));	
	}

}