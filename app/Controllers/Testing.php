<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Testing extends BaseController
{
    public function home()
    {
        return view('backend/testing');
    }
}
