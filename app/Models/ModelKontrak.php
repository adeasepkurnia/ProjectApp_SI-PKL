<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKontrak extends Model
{
    public function getAllData()
    {
        return $this->db->table('tb_kontrak')
            ->orderBy('id_kontrak', 'ASC')
            ->get()
            ->getResultArray();
    }

    public function add($data)
    {
        $this->db->table('tb_kontrak')->insert($data);
    }

    public function edit($data)
    {
        $this->db->table('tb_kontrak')
            ->where('id_kontrak', $data['id_kontrak'])
            ->update($data);
    }

    public function delete_kontrak($data)
    {
        $this->db->table('tb_kontrak')
            ->where('id_kontrak', $data['id_kontrak'])
            ->delete($data);
    }

    public function detailData($id_kontrak)
    {
        return $this->db->table('tb_kontrak')
            ->where('id_kontrak', $id_kontrak)
            ->get()
            ->getRowArray();
    }
}
