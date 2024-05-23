<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Course;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    public function index()
    {

        // buat object model $news
        $courses = new Course();

        /*
     siapkan data untuk dikirim ke view dengan nama $newses
     dan isi datanya dengan news yang sudah terbit
    */
        $data['courses'] = $courses->findAll();

        return view("DashboardView", $data);
    }
}
