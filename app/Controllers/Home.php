<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Aplikasi Evapor'
        ];
        return view('home', $data);
    }
}
