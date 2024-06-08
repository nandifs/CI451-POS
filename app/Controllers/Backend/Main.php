<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;

class Main extends BaseController
{
    public function dashboard(): string
    {
        return view('pages/backend/dashboard');
    }
}
