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
                'password' => 'password'
            ],
        ];

        foreach ($users as $data) {
            $this->db->table('users')->insert($data);
        }
    }
}
