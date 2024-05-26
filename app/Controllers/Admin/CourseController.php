<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Course;
use App\Models\Question;
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

    public function show()
    {

        $course = new Course();

        $data["course"] =
            $course
            ->where('slug', $_GET["slug"])
            ->join('users', 'users.id = courses.user_id')
            ->select('courses.*, users.name as created_by')
            ->first();

        $questions = new Question();

        $data["questions"] =
            $questions
            ->where("course_id", intval($data["course"]["id"]))
            ->findAll();

        return view("admin/DetailCourseView", $data);
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
