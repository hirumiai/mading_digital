<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\VideoModel;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    protected $videoModel;
    public function __construct()
    {
        $this->videoModel = new VideoModel();
    }
    public function index()
    {
        $data = [
            'number_rows' => $this->videoModel->getNumberRowVideos()
        ];
        return view('backend/dashboard', $data);
    }
}
