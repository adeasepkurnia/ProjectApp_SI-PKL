<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelAuth;
use App\Models\ModelTa;

class Auth extends BaseController
{
	
	public function __construct()
	{
		helper('form');
		$this->validation = \Config\Services::validation();
		$this->session = session();
		$this->ModelAuth= new ModelAuth();
		$this->ModelTa= new ModelTa();
		
	}

	public function index()
	{
		
	}

	public function register()
	{
		$data = array('title => Register',
	);
		return view('v_register', $data);
	}

	public function save_register()
	{
		if ($this->validate([
		'nama_user'=> [
			'label' => 'Nama User',
			'rules'=> 'required',
			'errors' => [
				'required' => '{field} Wajib di Isi dan Tidak Boleh Kosong !!'
			]
		],
		'email'=> [
				'label' => 'Email',
				'rules'=> 'required',
				'errors' => [
					'required' => '{field} Wajib di Isi dan Tidak Boleh Kosong !!'
				]
		],
		'no_hp'=> [
				'label' => 'No Handphone',
				'rules'=> 'required',
				'errors' => [
					'required' => '{field} Wajib di Isi dan Tidak Boleh Kosong !!'
				]


		],
				'password'=> [
					'label' => 'Password',
					'rules'=> 'required',
					'errors' => [
						'required' => '{field} Wajib di Isi dan Tidak Boleh Kosong !!'
					]
				],
					'repassword'=> [
						'label' => 'Retype Password',
						'rules'=> 'required|matches[password]',
						'errors' => [
							'required' => '{field} Wajib di Isi dan Tidak Boleh Kosong !!',
							'matches' => '{field} tidak sama !!'
						]
				],		

		])) {
			//jika valid
			$data = array(
				'nama_user' =>$this->request->getPost('nama_user'),
				'email' => $this->request->getPost('email'),
				'no_hp' => $this->request->getPost('no_hp'),
				'password' => $this->request->getPost('password'),
				'foto' => $this->request->getPost('foto'),
				'level' => 3
			);
			$this->ModelAuth->save_register($data);
			session()->setFlashdata('pesan','Register Berhasil !!');
			return redirect()->to(base_url('Auth/register'));
		}else {
			//jika tidak valid
			session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
			return redirect()->to(base_url('Auth/register'));
		}
	}

	public function login()
	{
		echo view('v_login-user');
	}

	public function cek_login_user()
	{
		if ($this->validate([
			'email' => [
				'label' => 'E-Mail',
				'rules' => 'required|valid_email',
				'errors' => [
					'required'=> '{field} Harus Diisi !!',
					'valid_email' => 'Harus Email !!'
				]
			],
			'password' => [
				'label'=> 'password',
				'rules'=> 'required',
				'errors'=> [
					'required' => '{field} Wajib Diisi !!',
				],
			]
		])) {
			//valid
			$email = $this->request->getPost('email');
			$password = $this->request->getPost('password');
			$cek_login = $this->ModelAuth->login_user($email, $password);
			if ($cek_login) {
				session()->set('nama_user',$cek_login['nama_user']);
				session()->set('email',$cek_login['email']);
				session()->set('foto',$cek_login['foto']);
				session()->set('level','admin');
				return redirect()->to(base_url('admin'));
			}else {
				session()->setFlashdata('pesan', 'Email Atau Password Salah !!');
				return redirect()->to(base_url('Auth/login'));	
			}
		}else {
			//tidak valid
			session()->setFlashdata('errors',\Config\Services::validation()->getErrors());
			return redirect()->to(base_url('Auth/login'));

		}
	}

	public function logout()
	{
		session()->remove('nama_user');
		session()->remove('email');
		session()->remove('foto');
		session()->remove('level');
		session()->setFlashdata('pesan', 'Logout success!!');
		return redirect()->to(base_url('Auth/login'));	
	}

	//login siswa
	public function loginSiswa()
	{
		$data = [
			'title' => 'Sistem Informasi PKL',
			'subtitle' => 'Login Siswa',
			'ta' => $this->ModelTa->statusTa(),
			'validation' => \Config\Services::validation(),
		];
		return view('v_login-siswa', $data);
	}
	
	public function cek_login_siswa()
	{
		if ($this->validate([
			'npm' => [
				'label' => 'NPM',
				'rules' => 'required',
				'errors' => [
					'required'=> '{field} Harus Diisi !!',
				]
			],
			'password' => [
				'label'=> 'password',
				'rules'=> 'required',
				'errors'=> [
					'required' => '{field} Wajib Diisi !!',
				],
			]
		])) {
			//valid
			$npm = $this->request->getPost('npm');
			$password = $this->request->getPost('password');
			$cek_login = $this->ModelAuth->login_siswa($npm, $password);
			if ($cek_login) {
				session()->set('id_siswa',$cek_login['id_siswa']);
				session()->set('npm',$cek_login['npm']);
				session()->set('nama_lengkap',$cek_login['nama_lengkap']);
				session()->set('level','siswa');
				return redirect()->to(base_url('/siswa'));
			}else {
				session()->setFlashdata('pesan', 'Npm Atau Password Salah !!');
				return redirect()->to(base_url('auth/loginSiswa'));	
			}
		}else {
			//tidak valid
			session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
			return redirect()->to(base_url('/auth/loginSiswa'));

		}
	}

	public function logoutsiswa()
	{
		session()->remove('npm');
		session()->remove('nama_lengkap');
		session()->remove('password');
		session()->remove('level');
		session()->setFlashdata('pesan', 'Logout success!!');
		return redirect()->to(base_url('Auth/loginsiswa'));	
	}
}
