<?php

namespace App\Controllers;
use App\Models\Model_user;
use App\Models\Model_dep;

class User extends BaseController
{
    public function __construct()
    {
        $this->Model_user = new Model_user;
        $this->Model_dep = new Model_dep;
        helper('form');
    }

    public function index()
    {
        $data = array(
            'title' => 'User',
            'user'  => $this->Model_user->all_data(),
            'isi'   => 'user/v_index'
        );
        return view('layout/v_wrapper',$data);
    }

    public function add()
    {
        $data = array(
            'title' => 'Tambah User',
            'dep'  => $this->Model_dep->all_data(),
            'isi'   => 'user/v_add'
        );
        return view('layout/v_wrapper',$data);
    }

    public function insert()
    {
        if ($this->validate([
            'nama_user' => [
            'label'  => 'Nama User',
            'rules'  => 'required',
            'errors' => [
                'required' => '{field} wajib diisi!',
            ],
        ],
        'email' => [
            'label'  => 'Email',
            'rules'  => 'required|is_unique[tbl_user.email]',
            'errors' => [
                'required' => '{field} wajib diisi!',
                'is_unique' => '{field} sudah terdaftar, masukkan {field} lain!',
            ],
        ],
        'password' => [
            'label'  => 'Password',
            'rules'  => 'required',
            'errors' => [
                'required' => '{field} wajib diisi!',
            ],
        ],
        'level' => [
            'label'  => 'Level',
            'rules'  => 'required',
            'errors' => [
                'required' => '{field} wajib diisi!',
            ],
        ],
        'id_dep' => [
            'label'  => 'Departemen',
            'rules'  => 'required',
            'errors' => [
                'required' => '{field} wajib diisi!',
            ],
        ],
        'foto' => [
            'label'  => 'Foto',
            'rules'  => 'uploaded[foto]|max_size[foto,1024]|mime_in[foto,image/png,image/jpg,image/jpeg]',
            'errors' => [
                'uploaded' => '{field} wajib diisi!',
                'max_size' => 'Ukuran {field} maksimal 1MB!',
                'mime_in' => 'Format {field} gunakan png, jpg, jpeg!',
            ],
        ],
        ])) {
            // mengambil file foto yg akan disubmit
            $foto = $this->request->getFile('foto');
            
            // mengubah nama file foto (random) sesuai sistem
            $nama_file = $foto->getRandomName();

            // jika valid
            $data = array(
                'nama_user' => $this->request->getPost('nama_user'),
                'email' => $this->request->getPost('email'),
                'password' => $this->request->getPost('password'),
                'level' => $this->request->getPost('level'),
                'id_dep' => $this->request->getPost('id_dep'),
                'foto' => $nama_file,
            );

            // direktori upload file foto
            $foto ->move('foto', $nama_file);

            $this->Model_user->add($data);
            session()->setFlashData('pesan','User berhasil ditambahkan');
            return redirect()->to(base_url('user'));
        } else {
            // jika tidak valid
            session()->setFlashdata('errors',\Config\Services::validation()->getErrors());
            return redirect()->to(base_url('user/add'));
        }
    }

    public function edit($id_user)
    {
        $data = array(
            'title' => 'Ubah Data User',
            'dep'   => $this->Model_dep->all_data(),
            'user'  => $this->Model_user->detail_data($id_user),
            'isi'   => 'user/v_edit'
        );
        return view('layout/v_wrapper',$data);
    }

    public function lihat($id_user)
    {
        $data = array(
            'title' => 'Lihat Data User',
            'dep'   => $this->Model_dep->all_data(),
            'user'  => $this->Model_user->detail_data($id_user),
            'isi'   => 'user/v_detail'
        );
        return view('layout/v_wrapper',$data);
    }

    public function update($id_user)
    {
        if ($this->validate([
            'nama_user' => [
            'label'  => 'Nama User',
            'rules'  => 'required',
            'errors' => [
                'required' => '{field} wajib diisi!',
            ],
        ],
        /*'email' => [
            'label'  => 'Email',
            'rules'  => 'required|is_unique[tbl_user.email]',
            'errors' => [
                'required' => '{field} wajib diisi!',
                'is_unique' => '{field} sudah terdaftar, masukkan {field} lain!',
            ],
        ],*/
        'password' => [
            'label'  => 'Password',
            'rules'  => 'required',
            'errors' => [
                'required' => '{field} wajib diisi!',
            ],
        ],
        'level' => [
            'label'  => 'Level',
            'rules'  => 'required',
            'errors' => [
                'required' => '{field} wajib diisi!',
            ],
        ],
        'id_dep' => [
            'label'  => 'Departemen',
            'rules'  => 'required',
            'errors' => [
                'required' => '{field} wajib diisi!',
            ],
        ],
        'foto' => [
            'label'  => 'Foto',
            //'rules'  => 'uploaded[foto]|max_size[foto,1024]|mime_in[foto,image/png,image/jpg,image/jpeg]',
            'rules'  => 'max_size[foto,1024]|mime_in[foto,image/png,image/jpg,image/jpeg]',
            'errors' => [
                //'uploaded' => '{field} wajib diisi!',
                'max_size' => 'Ukuran {field} maksimal 1MB!',
                'mime_in' => 'Format {field} gunakan png, jpg, jpeg!',
            ],
        ],
        ])) {
            $foto = $this->request->getFile('foto');
            if ($foto->getError()==4) {
                // jika foto tidak update
                $data = array(
                    'id_user' => $id_user,
                    'nama_user' => $this->request->getPost('nama_user'),
                    //'email' => $this->request->getPost('email'),
                    'password' => $this->request->getPost('password'),
                    'level' => $this->request->getPost('level'),
                    'id_dep' => $this->request->getPost('id_dep'),
                    //'foto' => $nama_file,
                );

                $this->Model_user->edit($data);
            } else {
                // jika foto diupdate

                // menghapus foto lama
                $user = $this->Model_user->detail_data($id_user);
                if ($user['foto'] != "") {
                    unlink('foto/'.$user['foto']);
                }

                // mengubah nama file foto (random) sesuai sistem
                $nama_file = $foto->getRandomName();

                $data = array(
                    'id_user' => $id_user,
                    'nama_user' => $this->request->getPost('nama_user'),
                    //'email' => $this->request->getPost('email'),
                    'password' => $this->request->getPost('password'),
                    'level' => $this->request->getPost('level'),
                    'id_dep' => $this->request->getPost('id_dep'),
                    'foto' => $nama_file,
                );

                // direktori upload file foto
                $foto ->move('foto', $nama_file);

                $this->Model_user->edit($data);
            }
            
            session()->setFlashData('pesan','Data user berhasil diubah');
            return redirect()->to(base_url('user'));
        } else {
            // jika tidak valid
            session()->setFlashdata('errors',\Config\Services::validation()->getErrors());
            return redirect()->to(base_url('user/edit/'.$id_user));
        }
    }

    public function delete($id_user)
    {
        // menghapus foto lama
        $user = $this->Model_user->detail_data($id_user);
        if ($user['foto'] != "") {
            unlink('foto/'.$user['foto']);
        }
        
        $data = array(
            'id_user' => $id_user,
        );
        $this->Model_user->delete_data($data);
        session()->setFlashData('pesan','Akun berhasil dihapus');
        return redirect()->to(base_url('user'));
    }
}
