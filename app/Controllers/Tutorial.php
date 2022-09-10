<?php

namespace App\Controllers;

class Tutorial extends BaseController
{
    public function index()
    {
        $data = array(
            'title' => 'Tutorial',
            'isi'   => 'v_tutorial'
        );
        return view('layout/v_wrapper',$data);
    }
}
