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
}
