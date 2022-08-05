<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelLampiran;

class Lampiran extends BaseController
{
	public function __construct()
	{
		$this->ModelLampiran = new ModelLampiran();
		helper('form');
	}

	public function index()
	{
		$data = [
			'title' => 'Sistem Informasi PKL',
			'subtitle' => 'Lampiran',
			'lampiran' => $this->ModelLampiran->getAllData(),
		];
		return view('admin/v_lampiran', $data);
	}

	public function insertData()
	{
		$data = [
			'lampiran' => $this->request->getpost(),
			
		];
		$this->ModelLampiran->insertData($data);
		session()->setFlashdata('tambah', 'Data Berhasil di Tambahkan !!');
		return redirect()->to(base_url('lampiran'));	
	}
	
	public function editData($id_lampiran)
	{
		$data = [
			'id_lampiran' => $id_lampiran,
			'lampiran' => $this->request->getpost(),
		];
		$this->ModelLampiran->editData($data);
		session()->setFlashdata('edit', 'Data Berhasil di Edit !!');
		return redirect()->to(base_url('lampiran'));	
	}

	public function deleteData($id_lampiran)
	{
		$data = [
			'id_lampiran' => $id_lampiran,
		];
		$this->ModelLampiran->deleteData($data);
		session()->setFlashdata('delete', 'Data Berhasil di Hapus !!');
		return redirect()->to(base_url('lampiran'));	
	}
}
