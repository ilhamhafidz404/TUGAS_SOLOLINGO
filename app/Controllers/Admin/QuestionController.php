<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Question;
use CodeIgniter\HTTP\ResponseInterface;

class QuestionController extends BaseController
{
    public function store()
    {
        $correct = $this->request->getVar('correct');

        if ($correct == "a") {
            $correctValue = $this->request->getVar('a');
        } else if ($correct == "b") {
            $correctValue = $this->request->getVar('b');
        } else if ($correct == "c") {
            $correctValue = $this->request->getVar('c');
        } else {
            $correctValue = $this->request->getVar('d');
        }

        $model = new Question();
        $data = [
            'question'   => $this->request->getVar('question'),
            'a'          => $this->request->getVar('a'),
            'b'          => $this->request->getVar('b'),
            'c'          => $this->request->getVar('c'),
            'd'          => $this->request->getVar('d'),
            "correct"    => $correctValue,
            "course_id"  => intval($this->request->getVar('course_id'))
        ];
        $model->save($data);

        return redirect()->back();
    }
}
