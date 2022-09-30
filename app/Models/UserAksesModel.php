<?php

namespace App\Models;

use CodeIgniter\Model;

class UserAksesModel extends Model
{
    protected $table = 'auth_groups_users';

    protected $primaryKey = 'user_id';

    protected $allowedFields = ['group_id', 'user_id'];

    public function getRelasi($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
    }
}
