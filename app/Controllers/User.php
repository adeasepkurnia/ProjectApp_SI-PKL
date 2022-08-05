<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUser;

class User extends BaseController
{
	public function __construct()
	{
		
		helper('form');
		$this->ModelUser = new ModelUser();	
		
	}

	public function index()
	{
		$data = [
			'title' => 'Sistem Informasi PKL',
			'subtitle' => 'DATA USER',
			'user' => $this->ModelUser->getAllData(),
		];
		return view('admin/v_user', $data);
	}

	public function insertData()
	{
		$file = $this->request->getFile('foto');
		$newName = $file->getRandomName();
		$data = [
			'nama_user' => $this->request->getPost('nama_user'),
			'email' => $this->request->getPost('email'),
			'password' => $this->request->getPost('password'),
			'foto' => $newName
		];
		//upload file foto//
		$file->move('foto/',$newName);

		$this->ModelUser->insertData($data);
		session()->setFlashdata('pesan', 'Data Berhasil di Tambahkan !!');
		return redirect()->to(base_url('/user'));	
	}

	public function editData($id_user)
	{
		$file = $this->request->getFile('foto');
		if ($file->getError() == 4) {
			$data = [
				'id_user' => $id_user,
				'nama_user' => $this->request->getPost('nama_user'),
				'email' => $this->request->getPost('email'),
				'password' => $this->request->getPost('password'),
			];

			$this->ModelUser->editData($data);
		}else {
			$user = $this->ModelUser->detailData($id_user);
			if ($user['foto'] !="") {
				unlink('./foto/' . $user['foto']);
			}

			$newName = $file->getRandomName();
		$data = [
			'id_user' => $id_user,
			'nama_user' => $this->request->getPost('nama_user'),
			'email' => $this->request->getPost('email'),
			'password' => $this->request->getPost('password'),
			'foto' => $newName
		];
		//upload file foto//
		$file->move('foto/',$newName);
		$this->ModelUser->editData($data);
		}

		session()->setFlashdata('edit', 'Data Berhasil di edit !!');
		return redirect()->to(base_url('/user'));	
	}

	public function deleteData($id_user)
	{
		$user = $this->ModelUser->detailData($id_user);
			if ($user['foto'] !="") {
				
			}
		$data = [
			'id_user' => $id_user,
		];
		$this->ModelUser->deleteData($data);
		session()->setFlashdata('delete', 'Data Berhasil di delete !!');
		return redirect()->to(base_url('/user'));	
	}
}
