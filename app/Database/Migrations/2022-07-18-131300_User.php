<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'uid' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'auto_increment' => false,
            ],
            'role' => [
                'type'       => 'VARCHAR',
                'constraint' => 30,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'gender' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'contact_number' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
            ],
            'address' => [
                'type' => 'TEXT',
                'null' => true
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'password' => [
                'type' => 'TEXT',
            ]
        ]);

        $this->forge->addKey('uid', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
