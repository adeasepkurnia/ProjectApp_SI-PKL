<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAdmin extends Model
{
    public function detailSetting()
    {
        return $this->db->table('tbl_setting')
        ->where('id', '1')
        ->get()->getRowArray();
        
    }
    public function totalUser()
    {
        return $this->db->table('tbl_user')->countAllResults();
    }

    public function totalAbsen()
    {
        return $this->db->table('tbl_absen')->countAllResults();
    }

    public function totalPendaftaranMasuk()
    {
        return $this->db->table('tbl_siswa')
        ->where('stat_pendaftaran', '1')
        ->where('stat_daftarmasuk', '0')
        ->countAllResults();
    }

    public function totalPendaftaranDiprosess()
    {
        return $this->db->table('tbl_siswa')->countAllResults();
    }

    public function totalPendaftaranDiterima()
    {
        return $this->db->table('tbl_siswa')->countAllResults();
    }

    public function totalPendaftaranDitolak()
    {
        return $this->db->table('tbl_siswa')->countAllResults();
    }

    public function totalAbsensiswa()
    {
        return $this->db->table('tbl_absen')->countAllResults();
    }
}