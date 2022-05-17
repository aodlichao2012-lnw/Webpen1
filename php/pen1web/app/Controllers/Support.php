<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\SupportModel;

class Support extends Controller
{
    public function index()
    {

        $SupportModel = new SupportModel();
        $data['problem'] = $SupportModel->orderBy('problem_id', 'ASC')->findAll();
        echo view('templatesAdmin/header');
        echo view('support/index', $data);
        echo view('templatesAdmin/footer');
    }

    public function getIDupdate($id = null)
    {
        $SupportModel = new SupportModel();
        $data['problem_obj'] = $SupportModel->where('problem_id', $id)->first();
        echo view('templatesAdmin/header');
        echo view('support/edit', $data);
        echo view('templatesAdmin/footer');
        // return view('product/edit',$data);
    }

    public function update()
    {
        $SupportModel = new SupportModel();
        $id = $this->request->getVar('problem_id');
        $dataID[] = $SupportModel->where('problem_id', $id)->first();
        //check image null 
        $data = [
            'problem_email' => $this->request->getVar('problem_email'),
            'problem_name' => $this->request->getVar('problem_name'),
            'problem_sub' => $this->request->getVar('problem_sub'),
            'problem_details' => $this->request->getVar('problem_details'),
            'problem_status' => $this->request->getVar('problem_status')
        ];

        $SupportModel->update($id, $data);
        return $this->response->redirect(site_url('/Supports'));
    }

    public function delete($id = null)
    {
        $SupportModel = new SupportModel();
        $data['problem'] = $SupportModel->where('problem_id', $id)->delete($id);
        return $this->response->redirect(site_url('/Supports'));
    }
}
