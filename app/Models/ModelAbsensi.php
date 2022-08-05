<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAbsensi extends Model
{
	public function getAllData()
	{
		return $this->db->table('tbl_absen')
		->orderBy('id_absen', 'ASC')
		->get()
		->getResultArray();
	}

	public function insertData($data)
	{
		$this->db->table('tbl_absen')
		->insert($data);
	}

	public function editData($data)
	{
		$this->db->table('tbl_absen')
		->where('id_absen', $data['id_absen'])
		->update($data);
	}

	public function deleteData($data)
	{
		$this->db->table('tbl_absen')
		->where('id_absen', $data['id_absen'])
		->delete($data);
	}
	public function detailData($id_user)
	{
		return $this->db->table('tbl_user')
		->where('id_user', $id_user)
		->get()
		->getRowArray();
	}
}
