<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelData_Peserta;

class Data_peserta extends BaseController
{
	public function __construct()
	{
		$this->ModelData_Peserta = new ModelData_Peserta();
		helper('form');
	}

	public function index()
	{
		$data = [
			'title' => 'Sistem Informasi PKL',
			'subtitle' => 'Data_peserta',
			'data_peserta' => $this->ModelData_Peserta->getAllData(),
		];
		return view('admin/v_data_peserta', $data);
	}

	public function insertData()
	{
		$data = [
			'data_peserta' => $this->request->getpost(),
		];
		$this->ModelData_Peserta->insertData($data);
		session()->setFlashdata('tambah', 'Data Berhasil di Tambahkan !!');
		return redirect()->to(base_url('data_peserta'));	
	}

	public function editData($id_peserta)
	{
		$data = [
			'id_peserta' => $id_peserta,
			'data_peserta' => $this->request->getpost(),
		];
		$this->ModelData_Peserta->editData($data);
		session()->setFlashdata('edit', 'Data Berhasil di edit !!');
		return redirect()->to(base_url('data_peserta'));	
	}

	public function deleteData($id_peserta)
	{
		$data = [
			'id_peserta' => $id_peserta,
		];
		$this->ModelData_Peserta->deleteData($data);
		session()->setFlashdata('delete', 'Data Berhasil di delete !!');
		return redirect()->to(base_url('data_peserta'));	
	}
}
