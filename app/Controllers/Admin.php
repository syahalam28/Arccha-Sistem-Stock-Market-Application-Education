<?php

namespace App\Controllers;

use App\Models\AksesModel;
use App\Models\UserAksesModel;
use App\Models\AdminModel;

class Admin extends BaseController
{
    // Dibuat protected karena $db dan $buider harus menjadi variabel global sehingga nanti diberikan this
    protected $db, $buidler;
    protected $AksesModel;
    protected $UserAksesModel;
    protected $AdminModel;
    // agar tidak selalu membuat $db dan $buidler tiap public function maka dibuat constrac
    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('users');
        $this->AksesModel = new AksesModel();
        $this->UserAksesModel = new UserAksesModel();
        $this->AdminModel = new AdminModel();
    }
    public function index()
    {

        $currentPage = $this->request->getVar('page_validasi') ? $this->request->getVar('page_validasi') : 1;
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $page = $this->AdminModel->select('users.id as userid, username, email, name, fullname')->join('auth_groups_users', 'auth_groups_users.user_id = users.id')->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')->like('name', $keyword)->orLike('email', $keyword);
        } else {
            $page = $this->AdminModel->select('users.id as userid, username, email, name, fullname')->join('auth_groups_users', 'auth_groups_users.user_id = users.id')->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')->orderBy('users.id', 'DECS');
        }

        $data = [
            'judul' => 'Users list',
            'users' => $page->paginate(5, 'users'),
            'pager' => $this->AdminModel->pager,
            'currentPage' => $currentPage

        ];
        // Untuk mengambil Hanya data dari satu table 
        // $users = new \Myth\Auth\Models\UserModel();
        // $data['users'] = $users->findAll();


        // menggunakan query builders untuk mengambil data dari banyak table
        // $db      = \Config\Database::connect();
        // $builder = $db->table('users');
        // $this->builder->select('users.id as userid, username, email, name, fullname');
        // $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        // $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        // $query = $this->builder->get();
        // // getResult mengambil semua data
        // $data['users'] = $query->getResult();

        return view('admin/index', $data);
    }

    // $id=0 apbila parameter kosong maka akan dikembalikan ke halaman admin detail
    public function detail($id = 0)
    {
        $data['judul'] = 'User Detail';
        // Untuk mengambil Hanya data dari satu table 
        // $users = new \Myth\Auth\Models\UserModel();
        // $data['users'] = $users->findAll();

        // menggunakan query builders untuk mengambil data dari banyak table
        // $db      = \Config\Database::connect();
        // $builder = $db->table('users');
        $this->builder->select('users.id as userid, username, user_image, fullname, email, name, ');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();
        // getRow hanya mengambil satu saja data
        $data['user'] = $query->getRow();

        // Apabila data berdasarkan id user tidak ada di database maka akan di kembalikan ke halaman admin index
        if (empty($data['user'])) {
            return redirect()->to('/admin');
        }

        return view('admin/detail', $data);
    }

    public function edit($id = 0)
    {
        $data['judul'] = 'Edit Data';
        $this->builder->select('users.id as userid, username, email, name, fullname, user_image, group_id');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();



        // getResult mengambil semua data
        $data['users'] = $query->getRow();
        $data['akses'] = $this->AksesModel->getRelasi();

        // Apabila data berdasarkan id user tidak ada di database maka akan di kembalikan ke halaman admin index
        if (empty($data['users'])) {
            return redirect()->to('admin/index');
        }

        return view('admin/edit', $data);
    }

    public function update($id = 0)
    {
        $this->UserAksesModel->update($id, [
            'group_id' => $this->request->getVar('category_name')
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah');

        return redirect()->to('/admin');
    }

    public function delete($id)
    {

        $dataMhs = $this->AdminModel->find($id);

        if ($dataMhs['user_image'] != 'default.svg') {
            unlink('img/' . $dataMhs['user_image']);
        }
        if (empty($dataMhs)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data User Tidak Ditemukan');
        }
        $this->AdminModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('/admin');
    }
}
