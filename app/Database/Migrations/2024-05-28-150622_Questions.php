<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Questions extends Migration
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
            'question'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'a'          => [
                'type'           => 'TEXT',
            ],
            'b'      => [
                'type'           => 'TEXT',
            ],
            'c'      => [
                'type'           => 'TEXT',
            ],
            'd'      => [
                'type'           => 'TEXT',
            ],
            'correct'      => [
                'type'           => 'TEXT',
            ],
            'course_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->addForeignKey('course_id', 'courses', 'id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('questions', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('questions');
    }
}
