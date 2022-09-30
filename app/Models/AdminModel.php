<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'users';

    protected $primaryKey = 'id';

    protected $allowedFields = ['email', 'username', 'fullname', 'user_image'];

    public function getRelasi($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
    }
}
