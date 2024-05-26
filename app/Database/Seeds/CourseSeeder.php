<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run()
    {
        $courses = [
            [
                'title' => 'Mengenal Kata Kerja',
                'slug'  => 'mengenal-kata-kerja',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur eum placeat quam a, minima odio ullam voluptates ex maiores delectus tempore asperiores, at cum? Eius facilis vel ut ratione odio.',
                "user_id" => 2,
            ],
            [
                'title' => 'Mengenal Kata Benda',
                'slug' => 'mengenal-kata-benda',
                'description' =>
                'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur eum placeat quam a, minima odio ullam voluptates ex maiores delectus tempore asperiores, at cum? Eius facilis vel ut ratione odio.',
                "user_id" => 2,
            ],
            [
                'title' => 'Mengenal Kata Bantu',
                'slug'    => 'mengenal-kata-bantu',
                'description' =>
                'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur eum placeat quam a, minima odio ullam voluptates ex maiores delectus tempore asperiores, at cum? Eius facilis vel ut ratione odio.',
                "user_id" => 3,
            ]
        ];

        foreach ($courses as $data) {
            // insert semua data ke tabel
            $this->db->table('courses')->insert($data);
        }
    }
}
