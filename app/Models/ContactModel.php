<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table = 'contact';

    protected $primaryKey = 'contact_id';

    protected $allowedFields = ['nama', 'email', 'subject', 'pesan', 'time'];

    public function getRelasi($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['contact_id' =>  $id])->first();
    }

    public function serach($keyword)
    {
        // Pembuatan dalam 3 baris

        // Berdasarkan dokumentasi CI builder for similar data
        // Memanggil table orang
        // $builder =  $this->table('orang');
        // // Melakukan proses simillar data
        // $builder->like('nama', $keyword);


        // return $builder;

        // // Pembuatan dalam satu baris
        return $this->table('contact')->like('email', $keyword)->orLike('time', $keyword);
    }
}
