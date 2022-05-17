<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsersModel;

class Register extends Controller
{
    public function index(){
        echo view('users/register');
    }

    public function save(){
        $model = new UsersModel();
        $data =[
            'user_firstname'=>$this->request->getVar('firstname'),
            'user_lastname'=>$this->request->getVar('lastname'),
            'user_username'=>$this->request->getVar('username'),
            'user_password'=>password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
        ];
        $model->save($data);
        return redirect('')->to('Login');
    }
}