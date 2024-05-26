<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'name' => 'Ilham Hafidz',
                'username'  => 'xxhamz',
                'password' => 'password',
                "user_type_id" => 1
            ],
            [
                'name' => 'Ira Irwanti',
                'username'  => 'irawan',
                'password' => 'password',
                "user_type_id" => 2
            ],
            [
                'name' => 'admin',
                'username'  => 'admin',
                'password' => 'password',
                "user_type_id" => 3
            ],
        ];

        foreach ($users as $data) {
            $this->db->table('users')->insert($data);
        }
    }
}
