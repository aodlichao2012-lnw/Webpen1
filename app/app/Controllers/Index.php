<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CountModel;
use App\Models\ApplyModel;
use App\Models\SupportModel;
use DateTimeZone;

class Index extends Controller
{
    public function index()
    {
        $CountModel = new CountModel();
        $ApplyModel = new ApplyModel();
        $SupportModel = new SupportModel();
        date_default_timezone_set('UTC');
        $date = date("Y-m-d");

        $CountModel->where('countweb_date', $date);
        $count = $CountModel->countAllResults();
        $count_all = $CountModel->countAll();
        $count_apply = $ApplyModel->countAll();
        $count_support = $SupportModel->countAll();

        $data = [
            'count' => $count,
            'count_all' => $count_all,
            'count_apply' => $count_apply,
            'count_support' => $count_support
        ];

        echo view('templatesAdmin/header');
        echo view('index/index', $data);
    }
}
