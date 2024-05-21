<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBMRHistory extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'height' => [
                'type' => 'FLOAT',
                'null' => false,
            ],
            'weight' => [
                'type' => 'FLOAT',
                'null' => false,
            ],
            'age' => [
                'type' => 'INT',
                'null' => false,
            ],
            'gender' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
                'null' => false,
            ],
            'activity_level' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => false,
            ],
            'goal' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => false,
            ],
            'bmr' => [
                'type' => 'FLOAT',
                'null' => false,
            ],
            'tdee' => [
                'type' => 'FLOAT',
                'null' => false,
            ],
            'calories' => [
                'type' => 'FLOAT',
                'null' => false,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => false,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('bmr_history');
    }

    public function down()
    {
        $this->forge->dropTable('bmr_history');
    }
}
