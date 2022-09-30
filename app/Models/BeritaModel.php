<?php

namespace App\Models;

use CodeIgniter\Model;

class BeritaModel extends Model
{
    protected $table = 'informasi';

    protected $primaryKey = 'info_id';

    protected $allowedFields = ['judul', 'deskripsi', 'sampul', 'id', 'user_id', 'date', 'tautan'];

    public function getRelasi($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
    }
}
