<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Course;
use CodeIgniter\HTTP\ResponseInterface;

class CourseController extends BaseController
{
    public function index()
    {

        $courses = new Course();

        $data["courses"] =
            $courses
            ->join('users', 'users.id = courses.user_id')
            ->select('courses.*, users.name as created_by')
            ->findAll();

        return view("admin/courseView", $data);
    }

    public function store()
    {
        helper('slug');

        $title = $this->request->getVar('title');
        $slug = string_to_slug($title);

        $session = session();

        $model = new Course();
        $data = [
            'title'             => $this->request->getVar('title'),
            'slug'              => $slug,
            'description'       => $this->request->getVar('description'),
            'user_id'           => intval($session->get('id')),
        ];
        $model->save($data);

        return redirect()->back();
    }
}
