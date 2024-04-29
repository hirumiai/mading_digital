<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\VideoModel;


class UpdateVideoController extends BaseController
{
    protected $videoModel;
    public function __construct()
    {
        $this->videoModel = new VideoModel();
    }


    public function index($id)
    {

        $data = [
            'data_video' => $this->videoModel->getDataVideoById($id)
        ];

        return view('backend/video/update_video', $data);
    }


    public function actionUpdateVideo()
    {

        $session = session();
        // menggunakan library validation 
        $validate = \Config\Services::validation();

        $id_video = $this->request->getPost('id_video');
        $validate->setRules([
            'nama_video' => 'required',
        ]);

        // menjalankan rule 

        if (!$validate->withRequest($this->request)->run()) {
            // jika validasi gagal 
            $session->setFlashdata('errors', 'wrong_rule');
            return redirect()->to('update_video/' . $id_video);
        }

        // get file from input form
        $dataVideo = $this->request->getFile('file_video');

        // pengguna megupdate video
        if ($dataVideo->isValid()) { // if pengguna upload video
            // upload video 
            $fileUploaded = $this->uploadVideo($dataVideo);

            if (!$fileUploaded) {
                session()->setFlashdata('errors', 'type_file');
                return redirect()->to('update_video/' . $id_video);
            }

            // delete existing video in assets file 
            $this->deleteVideoExsist($id_video);

            // Get input data
            $data = [
                'nama_video' => esc($this->request->getPost('nama_video')),
                'status_video' => $this->request->getPost('status_video'),
                'file_video' => $fileUploaded
            ];

            // update data into the database
            $this->videoModel->updateVideoById($id_video, $data);

            // Redirect to the list of videos
            return redirect()->to('list_video');
        } else {
            // jika pengguna tidak upload file video atau memperbarui video 
            // Get input data
            $data = [
                'nama_video' => esc($this->request->getPost('nama_video')),
                'status_video' => $this->request->getPost('status_video'),
            ];

            // update  data into the database
            $this->videoModel->updateVideoById($id_video, $data);
            // Redirect to the list of videos
            return redirect()->to('list_video');
        }

        $session->setFlashdata('errors', 'upload_error');
        return redirect()->to('update_video/' . $id_video);
    }


    private function uploadVideo($fileVideo)
    {

        // Define upload directory
        $uploadPath = './assets/video';

        // Validate file type
        $allowedTypes = ['mp4'];
        $fileExtension = $fileVideo->guessExtension();
        if (!in_array($fileExtension, $allowedTypes)) {
            return false;
        }

        // Generate unique filename
        $videoName = (string)md5($fileVideo->getClientName()) . '.' . $fileExtension;

        // Move uploaded file to upload directory
        $fileVideo->move($uploadPath, $videoName);

        return $videoName;
    }

    private function deleteVideoExsist($id_video)
    {
        // get data video from database
        $fileVideoDatabase = $this->videoModel->getDataVideoById($id_video);
        // menghapus file yang ada 
        // check file jika ada 
        $fileVideoExist = './assets/video/' . $fileVideoDatabase->file_video;
        if (file_exists($fileVideoExist)) {
            // delete the file 
            unlink($fileVideoExist);
        }
    }
}
