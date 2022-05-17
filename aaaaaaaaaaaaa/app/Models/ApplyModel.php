<?php

namespace App\Models;

use  CodeIgniter\Model;

class ApplyModel extends Model
{
    protected $table = 'tbl_apply';

    protected $primaryKey = 'apply_id';

    protected $allowedFields = ['apply_name', 'apply_position', 'apply_salary', 'address_apply', 'apply_email', 'apply_phone', 'residence_apply', 'birtday_apply', 'age_apply', 'ethnicity_apply', 'nationality_apply', 'religion_apply', 'card_apply', 'expired_apply', 'height_apply', 'weight_apply', 'military_apply', 'status_apply', 'sex_apply', 'apply_education', 'apply_exper', 'apply_resume', 'pic_apply'];
}
