<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelJob extends Model
{
	public function getAllData()
	{
		return $this->db->table('tbl_job_profile')
		->orderBy('id_job_profile', 'ASC')
		->get()
		->getResultArray();
	}

	public function getBiodataSiswa()
	{
		return $this->db->table('tbl_job_profile')
		->where('id_job_profile', session()->get('id_job_profile'))
		->get()
		->getRowArray();
	}

	public function insertData($data)
	{
		$this->db->table('tbl_job_profile')
		->insert($data);
	}

	public function editData($data)
	{
		$this->db->table('tbl_job_profile')
		->where('id_job_profile', $data['id_job_profile'])
		->update($data);
	}

	public function deleteData($data)
	{
		$this->db->table('tbl_job_profile')
		->where('id_job_profile', $data['id_job_profile'])
		->delete($data);
	}
}
