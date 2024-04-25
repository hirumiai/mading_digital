<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class VideoController extends BaseController
{
    public function index()
    {
        return view('backend/video/list_video');
    }
}
