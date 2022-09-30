<?php

namespace App\Models;

use CodeIgniter\Model;

class AksesModel extends Model
{
    protected $table = 'auth_groups';

    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'description', 'id'];

    public function getRelasi($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
    }
}
