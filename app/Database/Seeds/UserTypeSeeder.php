<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserTypeSeeder extends Seeder
{
    public function run()
    {
        $types = [
            [
                'name' => 'student',
            ],
            [
                'name' => 'teacher',
            ],
            [
                'name' => 'admin',
            ],
        ];

        foreach ($types as $data) {
            $this->db->table('user_types')->insert($data);
        }
    }
}
