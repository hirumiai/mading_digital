<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\VideoModel;
use CodeIgniter\HTTP\ResponseInterface;

class UnggahVideoController extends BaseController
{
    protected $videoModel;

    public function __construct()
    {
        $this->videoModel = new VideoModel();
    }

    public function index()
    {
        return view('backend/video/unggah_video');
    }

    public function actionUnggahVideo()
    {
        $session = session();
        // menggunakan library validation 
        $validate = \Config\Services::validation();

        $validate->setRules([
            'nama_video' => 'required',
        ]);

        // menjalankan rule 
        if (!$validate->withRequest($this->request)->run()) {
            // jika validasi gagal 
            $session->setFlashdata('errors', 'wrong_rule');
            return redirect()->to('/unggah_video');
        }

        $fileVideo = $this->request->getFile('file_video');

        // Check if a file was uploaded
        if ($fileVideo === null || !$fileVideo->isValid()) {
            $session->setFlashdata('errors', 'no_file_uploaded');
            return redirect()->to('/unggah_video');
        }

        // upload file video 
        $nameVideo =  $this->uploadVideo($fileVideo);


        if (!$nameVideo) {
            session()->setFlashdata('errors', 'type_file');
            return redirect()->to('unggah_video');
        }

        // Get input data
        $data = [
            'nama_video' => esc($this->request->getPost('nama_video')),
            'status_video' => $this->request->getPost('status_video'),
            'file_video' => $nameVideo
        ];

        // Insert data into the database
        $this->videoModel->addNewVideo($data);

        // Redirect to the list of videos
        return redirect()->to('list_video');
    }


    private function uploadVideo($fileVideo)
    {

        // Define upload directory
        $uploadPath = './assets/video';

        // Validate file type
        $allowedTypes = ['mov', 'mpeg', 'mp3', 'avi', 'mp4'];
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
}
