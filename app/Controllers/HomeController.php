<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\VideoModel;
use CodeIgniter\HTTP\ResponseInterface;
use PhpParser\Node\Stmt\Foreach_;

class HomeController extends BaseController
{

    protected $videoModel;

    public function __construct()
    {
        $this->videoModel = new VideoModel();
    }


    public function index(): string
    {

        return view('frontend/index');
    }

    // get video
    public function getVideo()
    {
        $data = $this->videoModel->getAllVideoOnly();

        foreach ($data as $videos) {
            foreach ($videos as $item) {
                $itemVideos[] = $item;
            }
        }

        return $this->response->setJSON($itemVideos);
    }
}
