<?php namespace App\Models;

use  CodeIgniter\Model;

class CountModel extends Model {
    protected $table = 'tbl_countweb';

    protected $primaryKey ='countweb_id';

    protected $allowedFields = [
        'countweb_num',
        'countweb_date'
    ];
}