<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Course;

class DashboardController extends BaseController
{
    public function index()
    {
        $courses = new Course();

        $data['courses'] = $courses->findAll();

        return view("DashboardView", $data);
    }
}
