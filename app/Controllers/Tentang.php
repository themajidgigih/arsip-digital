<?php

namespace App\Controllers;

class Tentang extends BaseController
{
    public function index()
    {
        $data = array(
            'title' => 'Tentang',
            'isi'   => 'v_tentang'
        );
        return view('layout/v_wrapper',$data);
    }
}
