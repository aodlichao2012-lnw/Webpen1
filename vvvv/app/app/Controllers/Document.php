<?php

namespace App\Controllers;

use App\Models\SupportModel;

class Document extends BaseController
{
    public function index()
    {
        $SupportModel = new SupportModel();
        $data = [
            'problem_email' => $this->request->getVar('problem_email'),
            'problem_name' => $this->request->getVar('problem_name'),
            'problem_company' => $this->request->getVar('problem_company'),
            'problem_phone' => $this->request->getVar('problem_phone'),
            'problem_sub' => $this->request->getVar('problem_sub'),
            'problem_details' => $this->request->getVar('problem_details'),
            'problem_status' => $this->request->getVar('problem_status')
        ];

        $SupportModel->insert($data);
        //return $this->response->redirect(base_url('support'));

        $email_cus = $this->request->getVar('problem_email');
        $name_cus = $this->request->getVar('problem_name');
        $company_cus = $this->request->getVar('problem_company');
        $phone_cus = $this->request->getVar('problem_phone');
        $sub_cus = $this->request->getVar('problem_sub');
        $details_cus = $this->request->getVar('problem_details');
        $date =  date("d/m/Y");

        $email = \Config\Services::email();

        $email->setFrom('no.replylocker@gmail.com', 'Support Pennueng');
        $email->setTo('sales@pen1.biz');
        /* $email->setCC('another@another-example.com');
        $email->setBCC('them@their-example.com'); */

        $email->setSubject('Support Web');
        $email->setMessage('<b>Email Customer : </b>' . $email_cus . '<br>
        <b>Name Customer : </b>' . $name_cus . '<br>
        <b>Company Customer : </b>' . $company_cus . '<br>
        <b>Phone Customer : </b>' . $phone_cus . '<br>
        <b>Subject : </b>' . $sub_cus . '<br>
        <b>Details : </b>' . $details_cus . '<br>
        <b>Requested Date : </b>' . $date);


        if ($email->send()) {
            return $this->response->redirect(base_url('support'));
        } else {
            echo "Send not success Please ! send again.";
        }
    }
}
