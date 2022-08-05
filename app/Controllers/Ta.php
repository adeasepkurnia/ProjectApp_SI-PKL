<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelTa;

class Ta extends BaseController
{
	public function __construct()
	{
		$this->ModelTa = new ModelTa();
		helper('form');
	}

	public function index()
	{
		$data = [
			'title' => 'Sistem Informasi PKL',
			'subtitle' => 'Tahun Ajaran',
			'ta' => $this->ModelTa->getAllData(),
		];
		return view('admin/v_ta', $data);
	}

	public function insertData()
	{
		$data = [
			'ta' => $this->request->getpost('ta'),
			'tahun' => $this->request->getpost('tahun'),
		];
		$this->ModelTa->insertData($data);
		session()->setFlashdata('tambah', 'Data Berhasil di Tambahkan !!');
		return redirect()->to('/ta');	
	}

	public function editData($id_ta)
	{
		$data = [
			'id_ta' => $id_ta,
			'ta' => $this->request->getPost('ta'),
			'tahun' => $this->request->getPost('tahun'),
		];
		$this->ModelTa->editData($data);
		session()->setFlashdata('edit', 'Data Berhasil di edit !!');
		return redirect()->to('/ta');	
	}

	public function deleteData($id_ta)
	{
		$data = [
			'id_ta' => $id_ta,
		];
		$this->ModelTa->deleteData($data);
		session()->setFlashdata('delete', 'Data Berhasil di Hapus !!');
		return redirect()->to('ta');	
	}
	public function statusAktif($id_ta)
	{
		$data = [
			'id_ta' => $id_ta,
			'status' => 1
		];
		$this->ModelTa->resetStatus();
		$this->ModelTa->editData($data);
		session()->setFlashdata('tambah', 'status Berhasil Di Edit !!');
		return redirect()->to('/ta');
	}
	public function statusNonaktif($id_ta)
	{
		$data = [
			'id_ta' => $id_ta,
			'status' => 0
		];
		$this->ModelTa->editData($data);
		session()->setFlashdata('tambah', 'status Berhasil Di Edit !!');
		return redirect()->to('/ta');
	}
}
