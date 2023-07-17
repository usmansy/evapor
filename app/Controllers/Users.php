<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Data Pegawai &mdash; Aplikasi Evapor'
        ];
        return view('users/get', $data);
    }
}
