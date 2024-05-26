<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class QuestionSeeder extends Seeder
{
    public function run()
    {
        $questions = [
            [
                'question' => 'Apa itu algoritma',
                'a'  => 'algo',
                'b'  => 'algi',
                'c'  => 'alge',
                'd'  => 'algo',
                "correct" => "algo",
                "course_id" => 1
            ],
        ];

        foreach ($questions as $data) {
            $this->db->table('questions')->insert($data);
        }
    }
}
