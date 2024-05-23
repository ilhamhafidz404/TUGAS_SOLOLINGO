<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Courses extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'title'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'slug'          => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'description'      => [
                'type'           => 'TEXT',
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
        ]);

        // Membuat primary key
        $this->forge->addKey('id', TRUE);

        // Membuat tabel courses
        $this->forge->createTable('courses', TRUE);
    }

    public function down()
    {
        // menghapus tabel courses
        $this->forge->dropTable('courses');
    }
}
