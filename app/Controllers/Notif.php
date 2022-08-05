<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelKontrak;

class Kontrak extends BaseController
{
    public function __construct()
    {
        $this->ModelKontrak = new ModelKontrak();
        helper('form');
    }

    public function index()
    {
        $data = [
            'title' => 'HR GiNK',
            'kontrak' => $this->ModelKontrak->getAllData(),
            'subtitle' => 'Daftar Kontrak',
        ];
        return view('admin/v_notif', $data);
    }
}
