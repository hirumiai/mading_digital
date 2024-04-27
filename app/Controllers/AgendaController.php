<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AgendaController extends BaseController
{
    public function index()
    {
        return view('backend/agenda/list_agenda');
    }
}
