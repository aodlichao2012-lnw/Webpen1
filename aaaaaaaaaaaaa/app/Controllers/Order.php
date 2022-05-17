<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\OrderModel;
use App\Models\ProductModel;

class Order extends Controller
{
    public function index()
    {
        $OrderModel = new OrderModel();
        $data['order'] = $OrderModel->orderBy('order_id', 'DESC')->findAll();
        echo view('templatesAdmin/header');
        echo view('order/index', $data);
        echo view('templatesAdmin/footer');
    }

    public function insert()
    {
        $OrderModel = new OrderModel();
        $data = [
            'product_name' => $this->request->getVar('product_name'),
            'product_num' => $this->request->getVar('product_num'),
            'order_num' => $this->request->getVar('order_num'),
            'order_date' => $this->request->getVar('order_date'),
            'customer_fname' => $this->request->getVar('customer_fname'),
            'customer_lname' => $this->request->getVar('customer_lname'),
            'customer_email' => $this->request->getVar('customer_email'),
            'customer_phone' => $this->request->getVar('customer_phone'),
            'customer_phone2' => $this->request->getVar('customer_phone2'),
            'customer_num' => $this->request->getVar('customer_num'),
            'customer_m' => $this->request->getVar('customer_m'),
            'customer_soi' => $this->request->getVar('customer_soi'),
            'customer_department' => $this->request->getVar('customer_department'),
            'customer_road' => $this->request->getVar('customer_road'),
            'customer_subdistrict' => $this->request->getVar('customer_subdistrict'),
            'customer_district' => $this->request->getVar('customer_district'),
            'customer_province' => $this->request->getVar('customer_province'),
            'customer_post' => $this->request->getVar('customer_post')
        ];

        //print_r($data);
        $OrderModel->insert($data);
        return $this->response->redirect(base_url('/article'));
    }

    public function detail($id = null)
    {
        $OrderModel = new OrderModel();
        $data['order_obj'] = $OrderModel->where('order_id', $id)->first();

        echo view('templatesAdmin/header');
        echo view('order/order_detail', $data);
        echo view('templatesAdmin/footer');
    }

    public function buy($id = null)
    {
        $ProductModel = new ProductModel();
        $data['buys'] = $ProductModel->where('product_id', $id)->first();

        //print_r($data);

        echo view('templates/header');
        echo view('pages/article', $data);
        echo view('templates/footer');
    }

    public function delete($id = null)
    {
        $OrderModel = new OrderModel();
        $data['order'] = $OrderModel->where('order_id', $id)->delete($id);
        return $this->response->redirect(site_url('/Order'));
    }
}
