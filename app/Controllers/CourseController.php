<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Course;
use App\Models\Question;
use CodeIgniter\HTTP\ResponseInterface;

class CourseController extends BaseController
{
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

        return view("student/DetailCourseView", $data);
    }
}
