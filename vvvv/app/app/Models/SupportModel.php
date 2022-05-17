<?php

namespace App\Models;

use  CodeIgniter\Model;

class SupportModel extends Model
{
    protected $table = 'tbl_problem';

    protected $primaryKey = 'problem_id';

    protected $allowedFields = ['problem_email', 'problem_name', 'problem_company', 'problem_phone', 'problem_sub', 'problem_details', 'problem_status'];
}
