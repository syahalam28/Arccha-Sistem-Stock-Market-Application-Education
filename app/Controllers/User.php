<?php

namespace App\Controllers;

use App\Models\AdminModel;

class User extends BaseController
{
    protected $db, $builder, $dba;
    protected $AdminModel;


    public function __construct()
    {
        $this->AdminModel = new AdminModel();
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('users');
        $this->dba      = \Config\Database::connect();
        $this->builder = $this->dba->table('contact');
    }
    public function index()
    {
        $data['judul'] = 'My Profile';
        return view('user/index', $data);
    }
    public function halaman_kesalahan()
    {
        // Vendor-auth-filters-rolefilters (base)
        $data['judul'] = '404';
        return view('user/404', $data);
    }

    public function edit($id = 0)
    {
        $data['judul'] = 'User Detail';

        $this->builder->select('users.id as userid, username, user_image, fullname, email, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();
        // getRow hanya mengambil satu saja data
        $data['user'] = $query->getRow();

        // Apabila data berdasarkan id user tidak ada di database maka akan di kembalikan ke halaman admin index
        if (empty($data['user'])) {
            return redirect()->to('/user');
        }

        return view('user/edit', $data);
    }

    public function update($id = 0)
    {
        // Mengambil data dari inputan dari id/name 
        $fileSampul = $this->request->getFile('zaaz');
        // Check Gambar, apakah tetap gambar lama
        if ($fileSampul->getError() == 4) {
            $namaSampul = $this->request->getVar('zaazLama');
        } else {
            // Hapus File Lama
            $namaSampul = $this->request->getVar('zaazLama');
            if ($namaSampul != 'default.svg') {
                unlink('img/' . $this->request->getVar('zaazLama'));
            }
            // File Baru
            $namaSampul = $fileSampul->getRandomName();
            // Pindahkan gambar ke folder img
            $fileSampul->move('img', $namaSampul);
        }

        $this->AdminModel->update($id, [
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'fullname' => $this->request->getVar('nama'),
            'user_image' => $namaSampul




        ]);
        // Menampilkan pesan bahwa data berhasil ditambahkan
        session()->setFlashdata('pesan', 'Data Berhasil Diubah');

        return redirect()->to('/user');
    }

    public function utama()
    {

        // Menampilkan Jumlah Pengguna
        $sql = "SELECT COUNT(*) as Count FROM users";
        $result = $this->db->query($sql);
        $row = $result->getRowArray();

        $sql_pesan = "SELECT COUNT(*) as Count FROM contact";
        $result_pesan = $this->dba->query($sql_pesan);
        $row_pesan = $result_pesan->getRowArray();

        // Menampilkan Jumlah Pengguna biasa (User)
        $sql_user = "SELECT COUNT(*) as Count FROM users INNER JOIN auth_groups_users ON users.id = auth_groups_users.user_id INNER JOIN auth_groups ON auth_groups_users.group_id = auth_groups.id WHERE auth_groups.name = 'user' ";
        $result_user = $this->db->query($sql_user);
        $row_user = $result_user->getRowArray();

        // Menampilkan Jumlah Pengguna admin
        $sql_admin = "SELECT COUNT(*) as Count FROM users INNER JOIN auth_groups_users ON users.id = auth_groups_users.user_id INNER JOIN auth_groups ON auth_groups_users.group_id = auth_groups.id WHERE auth_groups.name = 'admin' ";
        $result_admin = $this->db->query($sql_admin);
        $row_admin = $result_admin->getRowArray();

        // Menampilkan Jumlah Pengguna Superuser
        $sql_super_user = "SELECT COUNT(*) as Count FROM users INNER JOIN auth_groups_users ON users.id = auth_groups_users.user_id INNER JOIN auth_groups ON auth_groups_users.group_id = auth_groups.id WHERE auth_groups.name = 'admin' ";
        $result_super_user = $this->db->query($sql_super_user);
        $row_super_user = $result_super_user->getRowArray();

        $count = $row['Count'];
        $count_user = $row_user['Count'];
        $count_admin = $row_admin['Count'];
        $count_super_user = $row_super_user['Count'];
        $count_pesan = $row_pesan['Count'];
        if ($count > 0) {
            $count;
        } else {
            $count = 0;
        }

        if ($count_pesan > 0) {
            $count_pesan;
        } else {
            $count_pesan = 0;
        }


        $data = [
            'judul' => 'Dashboard',
            'total_user' => $count,
            'user' => $count_user,
            'admin' => $count_admin,
            'super_user' => $count_super_user,
            'pesan' => $count_pesan
        ];

        return view('user/utama', $data);
    }
}
