<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProductModel;
use App\Models\NewnewsModel;
use App\Models\SupportModel;
use App\Models\JobModel;
use App\Models\CountModel;
use App\Models\VideoModel;

class Pages extends Controller
{
    public function index()
    {
        return view('welcome_message');
    }

    public function view($page = 'home')
    {
        if (!is_file(APPPATH . '/Views/pages/' . $page . '.php')) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        if ($page == 'products') {
            $ProductModel = new ProductModel();
            $data = [
                'product' => $ProductModel->orderBy('product_id', 'DESC')->paginate(9),
                'pager' => $ProductModel->pager
            ];
        }

        if ($page == 'news') {
            $NewsModel = new NewnewsModel();
            $data = [
                'newnews' => $NewsModel->orderBy('news_id', 'DESC')->paginate(9),
                'pager' => $NewsModel->pager
            ];
        }

        if ($page == 'works') {
            $JobModel = new JobModel();
            $data = [
                'works' => $JobModel->orderBy('job_id', 'DESC')->paginate(9),
                'pager' => $JobModel->pager
            ];
        }

        if ($page == 'article') {
            $ProductModel = new ProductModel();
            $data = [
                'product' => $ProductModel->orderBy('product_id', 'DESC')->paginate(9),
                'pager' => $ProductModel->pager
            ];
        }

        if ($page == 'video') {
            $VideoModel = new VideoModel();
            $data = [
                'video' => $VideoModel->orderBy('video_id', 'DESC')->paginate(9),
                'pager' => $VideoModel->pager
            ];
        }

        if ($page == 'home') {
            $CountModel = new CountModel();
            $num = 1;
            date_default_timezone_set('UTC');
            $date = date("Y-m-d");
            $count = [
                'countweb_num' => $num,
                'countweb_date' => $date,
            ];

            $CountModel->insert($count);
        }

        $data['title'] = ucfirst($page);
        echo view('templates/header', $data);
        echo view('pages/' . $page, $data);
        echo view('templates/footer', $data);
    }

    public function detail($id = null)
    {
        $ProductModel = new ProductModel();
        $data['product_obj'] = $ProductModel->where('product_id', $id)->first();

        $count =  $data['product_obj']['product_views'];;
        $total =  $count + 1;
        $data2 = [
            'product_views' => $total
        ];

        $ProductModel->update($id, $data2);

        echo view('templates/header');
        echo view('pages/p_detail', $data);
        echo view('templates/footer');
    }

    public function n_detail($id = null)
    {
        $NewsModel = new NewnewsModel();
        $data['newnews'] = $NewsModel->where('news_id', $id)->first();

        echo view('templates/header');
        echo view('pages/n_detail', $data);
        echo view('templates/footer');
    }

    public function send_mail()
    {
        $from_email = "no.replylocker@gmail.com";
        $to_email = $this->request->getVar('problem_email');
        //Load email library
        $this->load->library('email');
        $this->email->from($from_email, 'Identification');
        $this->email->to($to_email);
        $this->email->subject('Send Email Codeigniter');
        $this->email->message('The email send using codeigniter library');
        //Send mail
        if ($this->email->send())
            $this->session->set_flashdata("email_sent", "Congragulation Email Send Successfully.");
        else
            $this->session->set_flashdata("email_sent", "You have encountered an error");
        $this->load->view('contact_email_form');
    }

    public function insert_problem()
    {
        $SupportModel = new SupportModel();
        $data = [
            'problem_email' => $this->request->getVar('problem_email'),
            'problem_name' => $this->request->getVar('problem_name'),
            'problem_sub' => $this->request->getVar('problem_sub'),
            'problem_details' => $this->request->getVar('problem_details'),
            'problem_status' => $this->request->getVar('problem_status')
        ];

        $SupportModel->insert($data);
        return $this->response->redirect(base_url('support'));
    }
}
