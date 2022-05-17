<?php

namespace App\Models;

use  CodeIgniter\Model;

class VideoModel extends Model
{
    protected $table = 'tbl_video';

    protected $primaryKey = 'video_id';

    protected $allowedFields = ['video_name', 'videot_link', 'video_pic', 'video_detail'];
}
