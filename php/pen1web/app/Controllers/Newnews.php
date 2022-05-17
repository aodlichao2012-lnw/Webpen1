<?php
namespace App\Controllers;

use App\Models\NewnewsModel;
use CodeIgniter\Controller;

class Newnews extends Controller
{
    public function index(){
        $NewsModel = new NewnewsModel();
        $data['newnews'] = $NewsModel->orderBy('news_id','DESC')->findAll();
        echo view('templatesAdmin/header');
        echo view('news/index',$data);
        echo view('templatesAdmin/footer');
    }

    public function create(){
        echo view('templatesAdmin/header');
        echo view('news/add');
        echo view('templatesAdmin/footer');
    }

    public function insert(){
        $NewsModel = new NewnewsModel();
        $file = $this->request->getFile('news_image');
        if($file->isValid() && !$file->hasMoved()){
            $newName = $file->getRandomName();
            $file->move('uploads/news', $newName);
            $data = [
                'news_name'=> $this->request->getVar('news_name'),
                'news_detail'=> $this->request->getVar('news_detail'),
                'news_image'=> 'uploads/news/'.$file->getName(),
            ];
        }else{            
            $data = [
                'news_name'=> $this->request->getVar('news_name'),
                'news_detail'=> $this->request->getVar('news_detail'),
                'news_image'=> "",
            ];
        }
        $NewsModel->insert($data);
        return $this->response->redirect(site_url('/Newnews'));
    }

    public function getNewsUpdate($id = null){
        $NewsModel = new NewnewsModel();
        $data['news_obj'] = $NewsModel->where('news_id', $id)->first();
        echo view('templatesAdmin/header');
        echo view('news/edit',$data);
        echo view('templatesAdmin/footer');
    }

    public function update(){
        $NewsModel = new NewnewsModel();
        $id = $this->request->getVar('news_id');
        $file = $this->request->getFile('news_image');
        $dataID[] = $NewsModel->where('news_id', $id)->first();
        //check image null
        if($file->isValid() && !$file->hasMoved()){
            $newName = $file->getRandomName();
            $file->move('uploads/news', $newName);
            $data = [
                'news_name'=> $this->request->getVar('news_name'),
                'news_detail'=> $this->request->getVar('news_detail'),
                'news_image'=> 'uploads/news/'.$newName,
            ];
        }else{            
            $data = [
                'news_name'=> $this->request->getVar('news_name'),
                'news_detail'=> $this->request->getVar('news_detail'),
                'news_image'=> $dataID[0]['news_image'],
            ];
        }

        $NewsModel->update($id,$data);
        return $this->response->redirect(site_url('/Newnews'));
    }

    public function delete($id = null){
        $NewsModel = new NewnewsModel();
        $data['newnews'] = $NewsModel->where('news_id', $id)->delete($id);
        return $this->response->redirect(site_url('/Newnews'));
    }
}
