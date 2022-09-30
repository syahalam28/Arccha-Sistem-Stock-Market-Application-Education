<?php

namespace App\Controllers;

use App\Models\BeritaModel;
use App\Models\ContactModel;

class Utama extends BaseController
{
    protected $BeritaModel;
    protected $ContactModel;
    public function __construct()
    {
        $this->BeritaModel = new BeritaModel();
        $this->ContactModel = new ContactModel();
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('informasi');
    }
    public function index()
    {
        $data['judul'] = 'Arccha Solve Group';
        return view('utama/index', $data);
    }
    public function info()
    {
        $currentPage = $this->request->getVar('page_user') ? $this->request->getVar('page_user') : 1;
        $keyword = $this->request->getVar('keyword');
        $angka = 2;
        $berita = $this->BeritaModel->select('id, user_id, judul, deskripsi, sampul, date, info_id')->where('id', $angka)->orderBy('date', 'DESC');


        // Untuk mengambil Hanya data dari satu table 
        // $users = new \Myth\Auth\Models\UserModel();
        // $data['users'] = $users->findAll();

        // menggunakan query builders untuk mengambil data dari banyak table
        // $db      = \Config\Database::connect();
        // $builder = $db->table('users');
        // $this->builder->select('id, user_id, judul, deskripsi, sampul');
        // $this->builder->where('id', $angka);
        // $query = $this->builder->get();
        // // getRow hanya mengambil satu saja data
        // $data['berita'] = $query->getResult();
        $data = [
            'judul' => 'News',
            'berita' => $berita->paginate(6, 'informasi'),
            'pager' => $this->BeritaModel->pager,
            'currentPage' => $currentPage
        ];
        return view('utama/information', $data);
    }
    public function infoview()
    {
        $data['judul'] = 'Class Information';
        return view('utama/informationview', $data);
    }

    public function berita()
    {
        $currentPage = $this->request->getVar('page_user') ? $this->request->getVar('page_user') : 1;
        $keyword = $this->request->getVar('keyword');
        $angka = 1;
        $berita = $this->BeritaModel->select('id, user_id, judul, deskripsi, sampul, date, info_id')->where('id', $angka)->orderBy('date', 'DESC');


        // Untuk mengambil Hanya data dari satu table 
        // $users = new \Myth\Auth\Models\UserModel();
        // $data['users'] = $users->findAll();

        // menggunakan query builders untuk mengambil data dari banyak table
        // $db      = \Config\Database::connect();
        // $builder = $db->table('users');
        // $this->builder->select('id, user_id, judul, deskripsi, sampul');
        // $this->builder->where('id', $angka);
        // $query = $this->builder->get();
        // // getRow hanya mengambil satu saja data
        // $data['berita'] = $query->getResult();
        $data = [
            'judul' => 'News',
            'berita' => $berita->paginate(6, 'informasi'),
            'pager' => $this->BeritaModel->pager,
            'currentPage' => $currentPage
        ];

        return view('utama/news', $data);
    }


    public function kontak()
    {
        $data['judul'] = 'Contact';
        return view('utama/contact', $data);
    }

    public function save()
    {

        date_default_timezone_set('Asia/Jakarta');
        $waktu =  date('Y-m-d H:i:s');


        $this->ContactModel->save([
            'nama' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'subject' => $this->request->getVar('subject'),
            'pesan' => $this->request->getVar('message'),
            'time' => $waktu
        ]);
        session()->setFlashdata('pesan', 'Terimakasih Atas Pertanyaan Anda. Pesan Balasan Akan Kami Kirim Melalui Email Anda');

        return redirect()->to('/utama/kontak');
    }

    public function pesan()
    {
        $currentPage = $this->request->getVar('page_user') ? $this->request->getVar('page_user') : 1;
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $pesan =  $this->ContactModel->serach($keyword);
        } else {
            $pesan = $this->ContactModel;
        }
        $data = [
            'judul' => 'Pesan Masuk',
            // Ketika sudah diletakan di model
            'pesan' => $pesan->paginate(3, 'contact'),
            'pager' =>  $this->ContactModel->pager,
            'currenPage' => $currentPage
            // Ketika menggunakan $komik dalam kontroler
            // 'komik' => $komik


        ];
        return view('daily/pesan', $data);
    }

    public function detail($contact_id)
    {
        $data  = [
            'judul' => 'Detail Pesan',
            // Select * where komik
            'pesan' => $this->ContactModel->getRelasi($contact_id)
        ];
        if (empty($data['pesan'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Pesan ' . $contact_id . ' tidak ditemukan');
        }
        return view('daily/pesanDetail', $data);
    }

    public function delete($contact_id)
    {
        $this->ContactModel->delete($contact_id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('/utama/pesan');
    }
}
