<?php

namespace App\Models;

use  CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table = 'tbl_order';

    protected $primaryKey = 'order_id';

    protected $allowedFields = ['order_num', 'order_date', 'product_name', 'product_num', 'customer_fname', 'customer_lname', 'customer_email', 'customer_phone', 'customer_phone2', 'customer_num', 'customer_m', 'customer_soi', 'customer_department', 'customer_road', 'customer_subdistrict', 'customer_district', 'customer_province', 'customer_post'];
}
