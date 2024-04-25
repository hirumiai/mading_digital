<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class UngggahAgendaController extends BaseController
{
    public function index()
    {
        return view('backend/agenda/unggah_agenda');
    }
}
