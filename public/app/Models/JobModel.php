<?php namespace App\Models;

use  CodeIgniter\Model;

class JobModel extends Model {
    protected $table = 'tbl_job';

    protected $primaryKey = 'job_id';

    protected $allowedFields = ['job_title', 'job_details', 'job_status'];
}
