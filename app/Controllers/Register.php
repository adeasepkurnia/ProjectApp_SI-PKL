<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelSiswa;

class Register extends BaseController
{
	public function __construct()
	{
		$this->ModelSiswa = new ModelSiswa();
		helper('form');
	}

	public function index()
	{
		$data = [
			'title' => 'Sistem Informasi PKL',
			'subtitle' => 'Register',
			'validation'=> \Config\Services::validation(),
		];
		return view('v_register', $data);
	}

	public function simpanRegister()
	{
	if ($this->validate([
		'npm' => [
			'label' => 'NPM',
			'rules'  => 'required|max_length[10]|is_unique[tbl_siswa.npm]',
			'errors' => [
				'required' => '{field} Wajib Diisi !!',
				'max_length' => '{field} Max 10 karater !!',
				'is_unique' => '{field} Sudah Terdaftar !!',
			]
		],
		'nama_lengkap'    => [
			'label' => 'Nama Lengkap',
			'rules'  => 'required',
			'errors' => [
				'required' => '{field} Wajib Diisi !!'
			]
		],
		'password' => [
			'label' => 'Password',
			'rules' => 'required|min_length[5]',
			'errors' => [
				'required' => '{field} Wajib Diisii !!',
				'min_length' => '{field} Harus memiliki minimal 5 karakter !!!'
			]
		]
	])) {
		//jika tidak ada validasi maka simpan data
		$data=[
				'npm'=> $this->request->getPost('npm'),
				'nama_lengkap'=> $this->request->getPost('nama_lengkap'),
				'password'=> $this->request->getPost('password'),
			];
			
		$this->ModelSiswa->insertData($data);
		session()->setFlashdata('pesan', 'Registrasi Akun Berhasil, Silahkan Kehalaman Login !!');
		return redirect()->to('/register');
	}else {
		//jika ada validasi
		$validation = \Config\Services::validation();
		return redirect()->to('/register')->withInput()->with('validation', $validation);
	}
}
}
