<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBMIHistoryTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'height' => [
                'type' => 'DOUBLE',
            ],
            'weight' => [
                'type' => 'DOUBLE',
            ],
            'bmi' => [
                'type' => 'DOUBLE',
            ],
            'gender' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
            ],
            'category' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'created_at' => [
                'type' => 'DATETIME',
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('bmi_history');
    }

    public function down()
    {
        $this->forge->dropTable('bmi_history');
    }
}
