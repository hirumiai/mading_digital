<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class UnggahVideoController extends BaseController
{
    public function index()
    {
        return view('backend/video/unggah_video');
    }
}
