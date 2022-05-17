<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\VideoModel;

class Video extends Controller
{
    public function admin_view()
    {
        $VideoModel = new VideoModel();
        $data['video'] = $VideoModel->orderBy('video_id', 'ASC')->findAll();
        echo view('templatesAdmin/header');
        echo view('video/index', $data);
        echo view('templatesAdmin/footer');
    }

    public function create()
    {
        echo view('templatesAdmin/header');
        echo view('video/add_video');
        echo view('templatesAdmin/footer');
    }

    public function insert()
    {
        $VideoModel = new VideoModel();
        $file = $this->request->getFile('video_pic');
        $pic = $file->getRandomName();
        $file->move('uploads/picvideo', $pic);

        $data = [
            'video_name' => $this->request->getVar('video_name'),
            'videot_link' => $this->request->getVar('videot_link'),
            'video_pic' => 'uploads/picvideo/' . $file->getName(),
            'video_detail' => $this->request->getVar('video_detail')
        ];

        $VideoModel->insert($data);
        return $this->response->redirect(base_url('Video'));
    }

    public function delete($id = null)
    {
        $VideoModel = new VideoModel();
        $data['video'] = $VideoModel->where('video_id', $id)->delete($id);
        return $this->response->redirect(site_url('/Video'));
    }

    public function getVideoupdate($id = null)
    {
        $VideoModel = new VideoModel();
        $data['video_obj'] = $VideoModel->where('video_id', $id)->first();
        echo view('templatesAdmin/header');
        echo view('video/edit', $data);
        echo view('templatesAdmin/footer');
    }

    public function update()
    {
        $VideoModel = new VideoModel();
        $id = $this->request->getVar('video_id');
        $file = $this->request->getFile('video_pic');
        $dataID[] = $VideoModel->where('video_id', $id)->first();

        //check image null
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move('uploads/picvideo', $newName);
            $data = [
                'video_name' => $this->request->getVar('video_name'),
                'videot_link' => $this->request->getVar('videot_link'),
                'video_pic' => 'uploads/picvideo/' . $newName,
                'video_detail' => $this->request->getVar('video_detail')
            ];
        } else {
            $data = [
                'video_name' => $this->request->getVar('video_name'),
                'videot_link' => $this->request->getVar('videot_link'),
                'video_pic' => $dataID[0]['video_pic'],
                'video_detail' => $this->request->getVar('video_detail')
            ];
        }

        $VideoModel->update($id, $data);
        return $this->response->redirect(site_url('/Video'));
    }
}
