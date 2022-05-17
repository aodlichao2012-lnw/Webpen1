<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProductModel;

class Product extends Controller
{
    public function index()
    {
        $ProductModel = new ProductModel();
        $data['product'] = $ProductModel->orderBy('product_id', 'DESC')->findAll();
        echo view('templatesAdmin/header');
        echo view('product/index', $data);
        echo view('templatesAdmin/footer');
    }

    public function create()
    {
        echo view('templatesAdmin/header');
        echo view('product/add');
        echo view('templatesAdmin/footer');
    }

    public function insert()
    {
        $ProductModel = new ProductModel();
        $file = $this->request->getFile('product_image');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move('uploads/product', $newName);
            $data = [
                'product_name' => $this->request->getVar('product_name'),
                'product_detail' => $this->request->getVar('product_detail'),
                'product_image' => 'uploads/product/' . $newName,
            ];
        } else {
            $data = [
                'product_name' => $this->request->getVar('product_name'),
                'product_detail' => $this->request->getVar('product_detail'),
                'product_image' => "",
            ];
        }
        $ProductModel->insert($data);
        return $this->response->redirect(site_url('/Product'));
    }

    public function getIDupdate($id = null)
    {
        $ProductModel = new ProductModel();
        $data['product_obj'] = $ProductModel->where('product_id', $id)->first();
        echo view('templatesAdmin/header');
        echo view('product/edit', $data);
        echo view('templatesAdmin/footer');
        // return view('product/edit',$data);
    }

    public function update()
    {
        $ProductModel = new ProductModel();
        $id = $this->request->getVar('product_id');
        $file = $this->request->getFile('product_image');
        $dataID[] = $ProductModel->where('product_id', $id)->first();
        //check image null
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move('uploads/product', $newName);
            $data = [
                'product_name' => $this->request->getVar('product_name'),
                'product_detail' => $this->request->getVar('product_detail'),
                'product_image' => 'uploads/product/' . $newName,
            ];
        } else {
            $data = [
                'product_name' => $this->request->getVar('product_name'),
                'product_detail' => $this->request->getVar('product_detail'),
                'product_image' => $dataID[0]['product_image'],
            ];
        }

        $ProductModel->update($id, $data);
        return $this->response->redirect(site_url('/Product'));
    }

    public function delete($id = null)
    {
        $ProductModel = new ProductModel();
        $data['product'] = $ProductModel->where('product_id', $id)->delete($id);
        return $this->response->redirect(site_url('/Product'));
    }
}
