<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ModelKampusAsal;

class KampusAsal extends BaseController
{
	public function __construct()
	{
		$this->ModelKampusAsal = new ModelKampusAsal();
		helper('form');
	}

	public function index()
	{
		$data = [
			'title' => 'Sistem Informasi PKL',
			'subtitle' => 'KAMPUS ASAL',
			'kampusasal' => $this->ModelKampusAsal->getAllData(),
		];
		return view('admin/v_kampusasal', $data);
	}

	public function insertData()
	{
		$data = [
			'ptn_asal' => $this->request->getpost(),
		];
		$this->ModelKampusAsal->insertData($data);
		session()->setFlashdata('tambah', 'Data Berhasil di Tambahkan !!');
		return redirect()->to(base_url('kampusasal'));	
	}

	public function editData($id_lampiran)
	{
		$data = [
			'id_kampusasal' => $id_lampiran,
			'kampusasal' => $this->request->getpost(),
		];
		$this->ModelKampusAsal->editData($data);
		session()->setFlashdata('edit', 'Data Berhasil di edit !!');
		return redirect()->to(base_url('kampusasal'));	
	}

	public function deleteData($id_lampiran)
	{
		$data = [
			'id_ptn_asal' => $id_lampiran,
		];
		$this->ModelKampusAsal->deleteData($data);
		session()->setFlashdata('delete', 'Data Berhasil di delete !!');
		return redirect()->to(base_url('kampusasal'));	
	}
}
