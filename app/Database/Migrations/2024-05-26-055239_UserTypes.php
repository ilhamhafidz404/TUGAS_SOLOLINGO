<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserTypes extends Migration
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
            'name'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
        ]);

        $this->forge->addKey('id', TRUE);

        $this->forge->createTable('user_types', TRUE);
    }

    public function down()
    {
        // menghapus tabel user_types
        $this->forge->dropTable('user_types');
    }
}
