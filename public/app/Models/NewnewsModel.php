<?php namespace App\Models;

use  CodeIgniter\Model;

class NewnewsModel extends Model {
    protected $table = 'tbl_news';

    protected $primaryKey ='news_id ';

    protected $allowedFields = ['news_name','news_detail','news_image'];
}