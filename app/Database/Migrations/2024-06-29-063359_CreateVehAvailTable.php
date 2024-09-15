<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateVehAvailTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'json_data' => [
                'type' => 'TEXT',
                'null' => false,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('veh_avail');
    }

    public function down()
    {
        $this->forge->dropTable('veh_avail');
    }
}
