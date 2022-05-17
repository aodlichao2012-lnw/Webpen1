<?php namespace App\Models;

use  CodeIgniter\Model;

class ProductModel extends Model {
    protected $table = 'tbl_product';

    protected $primaryKey ='product_id ';

    protected $allowedFields = ['product_name','product_detail','product_image','product_views', 'product_lang', 'product_label'  ,'type_product'];
}