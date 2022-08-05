<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAuth extends Model
{
	public function save_register($data)
	{
		$this->db-table('tbl_siswa')->insert($data);
	}

	public function login_user($email,$password)
	{
		return $this->db->table('tbl_user')->where(
			[
				'email' => $email, 
				'password'=> $password
			]
		)->get()->getRowArray();
	}

	public function login_siswa($npm,$password)
	{
		return $this->db->table('tbl_siswa')->where(
			[
				'npm' => $npm, 
				'password'=> $password
			]
		)->get()->getRowArray();
	}
	
}
