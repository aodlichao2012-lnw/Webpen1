<?php namespace App\Models;

use  CodeIgniter\Model;

class UsersModel extends Model {
    protected $table = 'tbl_users';

    protected $primaryKey ='user_id ';

    protected $allowedFields = [
        'user_firstname',
        'user_lastname',
        'user_username',
        'user_password',
        'user_create_at'
    ];
}