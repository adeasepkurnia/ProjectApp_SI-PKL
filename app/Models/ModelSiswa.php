<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSiswa extends Model
{
	public function getAllData()
	{
		return $this->db->table('tbl_siswa')
		->orderBy('id_siswa', 'ASC')
		->get()
		->getResultArray();
	}

	public function getBiodataSiswa()
	{
		return $this->db->table('tbl_siswa')
		->join('tbl_job_profile', 'tbl_job_profile.id_job_profile = tbl_siswa.id_job_profile', 'left')
		->where('id_siswa', session()->get('id_siswa'))
		->get()
		->getRowArray();
	}

	public function insertData($data)
	{
		$this->db->table('tbl_siswa')
		->insert($data);
	}

	public function daftar_siswa($data)
	{
		$this->db->table('tbl_siswa')
		->insert($data);
	}

	public function editData($data)
	{
		$this->db->table('tbl_siswa')
		->where('id_siswa', $data['id_siswa'])
		->update($data);
	}

	public function deleteData($data)
	{
		$this->db->table('tbl_siswa')
		->where('id_siswa', $data['id_siswa'])
		->delete($data);
	}

	public function detailData($id_siswa)
	{
		return $this->db->table('tbl_siswa')
		->where('id_siswa', $id_siswa)
		->get()
		->getRowArray();
	}
	public function addBerkas($data)
	{
		$this->db->table('tbl_berkas')
		->insert($data);
	}
	public function surat()
	{
		return $this->db->table('tbl_berkas')
		->join('tbl_lampiran','tbl_lampiran.id_lampiran= tbl_berkas.id_lampiran','left')
		->where('tbl_berkas.id_siswa', session()->get('id_siswa'))
		->get()
		->getResultArray();
	}
	public function detailBerkas($id_berkas)
	{
		return $this->db->table('tbl_berkas')
		->where('id_berkas', $id_berkas)
		->get()
		->getRowArray();
	}
	public function deleteBerkas($data)
	{
	    $this->db->table('tbl_berkas')
		->where('id_berkas', $data['id_berkas'])
		->delete($data);
		
	}
	
}
