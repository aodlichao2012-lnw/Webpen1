<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\JobModel;
use App\Models\ApplyModel;

class apply extends Controller
{
    public function admin_view()
    {
        $ApplyModel = new ApplyModel();
        $data['apply'] = $ApplyModel->orderBy('apply_id', 'ASC')->findAll();
        echo view('templatesAdmin/header');
        echo view('apply_work/index', $data);
        echo view('templatesAdmin/footer');
    }

    public function admin_viewjob()
    {
        $JobModel = new JobModel();
        $data['job'] = $JobModel->orderBy('job_id', 'ASC')->findAll();
        echo view('templatesAdmin/header');
        echo view('apply_work/index_job', $data);
        echo view('templatesAdmin/footer');
    }

    public function test()
    {
        $JobModel = new JobModel();
        $data['works'] = $JobModel->orderBy('job_id', 'ASC')->findAll();
        echo view('templates/header');
        echo view('pages/works', $data);
        echo view('templates/footer');
    }

    public function create()
    {
        echo view('templatesAdmin/header');
        echo view('apply_work/add_job');
        echo view('templatesAdmin/footer');
    }

    public function insertJob()
    {
        $JobModel = new JobModel();

        $data = [
            'job_title' => $this->request->getVar('job_title'),
            'job_details' => $this->request->getVar('job_details'),
            'job_status' => $this->request->getVar('job_status'),
        ];

        $JobModel->insert($data);
        return $this->response->redirect(site_url('/job'));
    }

    public function getJobupdate($id = null)
    {
        $JobModel = new JobModel();
        $data['job_obj'] = $JobModel->where('job_id', $id)->first();
        echo view('templatesAdmin/header');
        echo view('apply_work/edit', $data);
        echo view('templatesAdmin/footer');
    }

    public function update()
    {
        $JobModel = new JobModel();
        $id = $this->request->getVar('job_id');
        $dataID[] = $JobModel->where('job_id', $id)->first();

        $data = [
            'job_title' => $this->request->getVar('job_title'),
            'job_details' => $this->request->getVar('job_details'),
            'job_status' => $this->request->getVar('job_status')
        ];


        $JobModel->update($id, $data);
        return $this->response->redirect(site_url('/job'));
    }

    public function view_apply($id = null)
    {
        $JobModel = new JobModel();
        $data['job_obj'] = $JobModel->where('job_id', $id)->first();

        echo view('templates/header');
        echo view('apply_work/add', $data);
        echo view('templates/footer');
    }

    public function insert()
    {
        $ApplyModel = new ApplyModel();
        $file = $this->request->getFile('resume_image');
        $resume = $file->getRandomName();
        $file->move('uploads/resume', $resume);

        $file2 = $this->request->getFile('pic_apply');
        $pic = $file2->getRandomName();
        $file2->move('uploads/pic', $pic);

        $data = [
            'apply_name' => $this->request->getVar('name_apply'),
            'apply_position' => $this->request->getVar('position_apply'),
            'apply_salary' => $this->request->getVar('salary_apply'),
            'address_apply' => $this->request->getVar('address_apply'),
            'apply_email' => $this->request->getVar('email_apply'),
            'apply_phone' => $this->request->getVar('phone_apply'),
            'residence_apply' => $this->request->getVar('residence_apply'),
            'birtday_apply' => $this->request->getVar('birtday_apply'),
            'age_apply' => $this->request->getVar('age_apply'),
            'ethnicity_apply' => $this->request->getVar('ethnicity_apply'),
            'nationality_apply' => $this->request->getVar('nationality_apply'),
            'religion_apply' => $this->request->getVar('religion_apply'),
            'card_apply' => $this->request->getVar('card_apply'),
            'expired_apply' => $this->request->getVar('expired_apply'),
            'height_apply' => $this->request->getVar('height_apply'),
            'weight_apply' => $this->request->getVar('weight_apply'),
            'military_apply' => $this->request->getVar('military_apply'),
            'status_apply' => $this->request->getVar('status_apply'),
            'sex_apply' => $this->request->getVar('sex_apply'),
            'apply_education' => $this->request->getVar('education_apply'),
            'apply_exper' => $this->request->getVar('exper_apply'),
            'apply_resume'=> 'uploads/resume/'.$file->getName(),
            'pic_apply'=> 'uploads/pic/'.$file2->getName()
        ];
        
        $ApplyModel->insert($data);
        return $this->response->redirect(base_url('works'));
    }

    public function delete($id = null)
    {
        $ApplyModel = new ApplyModel();
        $data['apply'] = $ApplyModel->where('apply_id', $id)->delete($id);
        return $this->response->redirect(site_url('/Apply'));
    }

    public function detail($id = null)
    {
        $ApplyModel = new ApplyModel();
        $data['apply_obj'] = $ApplyModel->where('apply_id', $id)->first();

        echo view('templatesAdmin/header');
        echo view('apply_work/apply_detail', $data);
        echo view('templatesAdmin/footer');
    }
}
