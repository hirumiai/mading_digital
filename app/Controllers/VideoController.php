<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\VideoModel;
use CodeIgniter\HTTP\ResponseInterface;

class VideoController extends BaseController
{
    protected $videoModel;
    public function __construct()
    {
        $this->videoModel = new VideoModel();
    }
    public function index()
    {
        $data = [
            'videos' => $this->videoModel->getAllVideo(),
            'pager' => $this->videoModel->pager
        ];

        return view('backend/video/list_video', $data);
    }

    public function actionDelete($id)
    {
        $dataVideo = $this->videoModel->getDataVideoById($id);

        // menghapus file yang ada 
        // check file jika ada 
        $fileVideoExist = './assets/video/' . $dataVideo->file_video;
        if (file_exists($fileVideoExist)) {
            // delete the file 
            unlink($fileVideoExist);
        }

        // delete data in database
        $this->videoModel->deleteVideoById($id);

        // redirect to list video
        return redirect()->to('list_video');
    }
}
