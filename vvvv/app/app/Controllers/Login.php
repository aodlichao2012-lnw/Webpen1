<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsersModel;

class Login extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('users/login');
    }

    public function auth()
    {
        $session = session();
        $model = new UsersModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $model->where('user_username', $username)->first();

        if ($data) {
            $pass = $data['user_password'];
            $verify_password = password_verify($password, $pass);
            if ($verify_password) {
                $ses_data = [
                    'user_id' => $data['user_id'],
                    'user_firstname' => $data['user_firstname'],
                    'user_lastname' => $data['user_lastname'],
                    'logged_in' => TRUE,
                ];
                $session->set($ses_data);
                return redirect()->to('index');
            } else {
                $session->setFlashdata('msg', 'Wrong password');
                return redirect()->to('Login');
            }
        } else {
            $session->setFlashdata('msg', 'username not found');
            return redirect()->to('Login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('Login');
    }
}
