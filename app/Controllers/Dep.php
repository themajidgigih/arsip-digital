<?php

namespace App\Controllers;

use App\Models\Model_dep;

class dep extends BaseController
{
    public function __construct()
    {
        $this->Model_dep = new Model_dep();
        helper('form');
    }

    public function index()
    {
        $data = array(
            'title' => 'Departemen',
            'dep' => $this->Model_dep->all_data(),
            'isi' => 'v_dep'
        );
        return view('layout/v_wrapper', $data);
    }

    public function add()
    {
        $data = array('nama_dep' => $this->request->getPost());
        $this->Model_dep->add($data);
        session()->setFlashdata('pesan','Departemen berhasil ditambahkan.');
        return redirect()->to(base_url('dep'));
    }

    public function edit($id_dep)
    {
        $data = array(
            'id_dep' => $id_dep,
            'nama_dep' => $this->request->getPost(),
        );
        $this->Model_dep->edit($data);
        session()->setFlashdata('pesan','Departemen berhasil diedit.');
        return redirect()->to(base_url('dep'));
    }

    public function delete($id_dep)
    {
        $data = array(
            'id_dep' => $id_dep,
        );
        $this->Model_dep->delete_data($data);
        session()->setFlashdata('pesan','Departemen berhasil dihapus.');
        return redirect()->to(base_url('dep'));
    }
}
