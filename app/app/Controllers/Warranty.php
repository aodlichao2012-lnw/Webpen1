<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Warranty extends Controller
{

    public function once(){
        echo view('templates/header');
        echo view('warranty/once');
        echo view('templates/footer');
    }

    public function yearly(){
        echo view('templates/header');
        echo view('warranty/yearly');
        echo view('templates/footer');
    }

    public function warran(){    
        echo view('templates/header');
        echo view('warranty/warran');
        echo view('templates/footer');
    }

    public function out_warran(){  
        echo view('templates/header');
        echo view('warranty/out_warran');
        echo view('templates/footer');
    }

}