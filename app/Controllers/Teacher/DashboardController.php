<?php

namespace App\Controllers\Teacher;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    public function index()
    {
        return view("teacher/DashboardView");
    }
}
