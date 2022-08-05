<?php

namespace App\Models;

use CodeIgniter\Model;


class ModelDaftarmasuk extends Model
{

	public function getDaftarmasuk()
	{
		return $this->db->table('tbl_siswa')
		->where('stat_daftarmasuk', '0')
		->where('stat_pendaftaran', '1')
		->get()
		->getResultArray();
	}

	public function detailData($id_siswa)
	{
		return $this->db->table('tbl_siswa')
		->where('id_siswa', $id_siswa)
		->get()
		->getRowArray();
	}
	public function lampiran($id_siswa)
	{
		return $this->db->table('tbl_berkas')
		->join('tbl_lampiran','tbl_lampiran.id_lampiran= tbl_berkas.id_lampiran','left')
		->where('tbl_berkas.id_siswa', $id_siswa)
		->get()
		->getResultArray();
	}
	public function surat()
	{
		return $this->db->table('tbl_berkas')
		->join('tbl_lampiran','tbl_lampiran.id_lampiran= tbl_berkas.id_lampiran','left')
		->where('tbl_berkas.id_siswa', session()->get('id_siswa'))
		->get()
		->getResultArray();
	}

}
