<?php

namespace App\Controllers;

use App\Models\BeritaModel;

class Berita extends BaseController
{
    protected $BeritaModel;
    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->BeritaModel = new BeritaModel();
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('informasi');
    }
    public function index()
    {
        $data['judul'] = 'Tambah Berita';
        return view('daily/berita', $data);
    }
    public function indexInfo()
    {
        $data['judul'] = 'Tambah Berita';
        return view('daily/beritaInfo', $data);
    }


    public function save()
    {
        // Mengambil data dari inputan dari id/name 
        $fileSampul = $this->request->getFile('zaaz');
        // Check Gambar, apakah tetap gambar lama
        // File Baru
        $namaSampul = $fileSampul->getRandomName();
        // Pindahkan gambar ke folder img
        $fileSampul->move('img', $namaSampul);
        $user = user()->id;
        $tanggal =  date('Y-m-d H:i:s ');

        $this->BeritaModel->save([
            'judul' => $this->request->getVar('judul'),
            'deskripsi' => $this->request->getVar('isi_berita'),
            'sampul' => $namaSampul,
            'id' => $this->request->getVar('kategori'),
            'user_id' => $user,
            'date' => $tanggal


            // 'id_jabatan' => $this->request->getVar('id_jabatan')



        ]);
        // Menampilkan pesan bahwa data berhasil ditambahkan
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');

        return redirect()->to('/Utama/berita');
    }
    public function saveInfo()
    {
        // Mengambil data dari inputan dari id/name 
        $fileSampul = $this->request->getFile('zaaz');
        // Check Gambar, apakah tetap gambar lama
        // File Baru
        $namaSampul = $fileSampul->getRandomName();
        // Pindahkan gambar ke folder img
        $fileSampul->move('img', $namaSampul);
        $user = user()->id;
        $tanggal =  date(' Y-m-d H:i:s ');

        $this->BeritaModel->save([
            'judul' => $this->request->getVar('judul'),
            'deskripsi' => $this->request->getVar('isi_berita'),
            'sampul' => $namaSampul,
            'id' => $this->request->getVar('kategori'),
            'user_id' => $user,
            'date' => $tanggal,
            'tautan' => $this->request->getVar('link')


            // 'id_jabatan' => $this->request->getVar('id_jabatan')



        ]);
        // Menampilkan pesan bahwa data berhasil ditambahkan
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');

        return redirect()->to('/Utama/info');
    }

    public function detail($id = 0)
    {
        $data  = [
            'judul' => 'Detail Berita'
        ];

        $this->builder->select('info_id,judul,deskripsi,sampul,date');
        $this->builder->where('info_id', $id);
        $query = $this->builder->get();
        $data['berita'] = $query->getRow();


        if (empty($data['berita'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Mohon Maaf Berita Ini Sudah Di Hapus');
        }

        return view('daily/detail', $data);
    }
    public function detailInfo($id = 0)
    {
        $data  = [
            'judul' => 'Detail Berita'
        ];

        $this->builder->select('info_id,judul,deskripsi,sampul,date,tautan');
        $this->builder->where('info_id', $id);
        $query = $this->builder->get();
        $data['berita'] = $query->getRow();


        if (empty($data['berita'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Mohon Maaf Berita Ini Sudah Di Hapus');
        }

        return view('daily/detailInfo', $data);
    }

    public function edit($id = 0)
    {
        $data  = [
            'judul' => 'Detail Berita'
        ];

        $this->builder->select('info_id,judul,deskripsi,sampul,date');
        $this->builder->where('info_id', $id);
        $query = $this->builder->get();
        $data['berita'] = $query->getRow();


        if (empty($data['berita'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Mohon Maaf Berita Ini Sudah Di Hapus');
        }

        return view('daily/edit', $data);
    }
    public function editInfo($id = 0)
    {
        $data  = [
            'judul' => 'Detail Berita'
        ];

        $this->builder->select('info_id,judul,deskripsi,sampul,date,tautan');
        $this->builder->where('info_id', $id);
        $query = $this->builder->get();
        $data['berita'] = $query->getRow();


        if (empty($data['berita'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Mohon Maaf Berita Ini Sudah Di Hapus');
        }

        return view('daily/editInfo', $data);
    }


    public function update($id = 0)
    {

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
        $user = user()->id;
        $tanggal =  date(' Y-m-d H:i:s ');


        $this->BeritaModel->update($id, [
            'judul' => $this->request->getVar('judul'),
            'deskripsi' => $this->request->getVar('isi_berita'),
            'sampul' => $namaSampul,
            'user_id' => $user,
            'date' => $tanggal,
            'id' => $this->request->getVar('kategori')




        ]);
        // Menampilkan pesan bahwa data berhasil ditambahkan
        session()->setFlashdata('pesan', 'Data Berhasil Diubah');

        return redirect()->to('/utama/berita');
    }
    public function updateInfo($id = 0)
    {

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
        $user = user()->id;
        $tanggal =  date(' Y-m-d H:i:s ');


        $this->BeritaModel->update($id, [
            'judul' => $this->request->getVar('judul'),
            'deskripsi' => $this->request->getVar('isi_berita'),
            'sampul' => $namaSampul,
            'user_id' => $user,
            'date' => $tanggal,
            'id' => $this->request->getVar('kategori'),
            'tautan' => $this->request->getVar('link')




        ]);
        // Menampilkan pesan bahwa data berhasil ditambahkan
        session()->setFlashdata('pesan', 'Data Berhasil Diubah');

        return redirect()->to('/utama/info');
    }

    public function delete($id)
    {

        $dataMhs = $this->BeritaModel->find($id);


        unlink('img/' . $dataMhs['sampul']);

        if (empty($dataMhs)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Berita  Tidak Ditemukan');
        }
        $this->BeritaModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('/utama/berita');
    }
    public function deleteInfo($id)
    {

        $dataMhs = $this->BeritaModel->find($id);


        unlink('img/' . $dataMhs['sampul']);

        if (empty($dataMhs)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Berita  Tidak Ditemukan');
        }
        $this->BeritaModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('/utama/info');
    }
}
