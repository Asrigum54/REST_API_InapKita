<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Resepsionis extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'resepsionis_id' => [
                'type' => 'INT',
                'auto_increment' => true,
            ],
            'nama' => [
                'type' =>'varchar',
                'constraint' => 100,
            ],
            'email' => [
                'type' => 'varchar',
                'constraint' => 100,
            ],
            'no_hp' => [
                'type' => 'varchar',
                'constraint' => 20,
            ],
            'password' => [
                'type' => 'varchar',
                'constraint' => 10,
            ],

        ]);
        $this->forge->addKey('resepsionis_id', true);
        $this->forge->createTable('resepsionis');
        //
    }

    public function down()
    {
      $this->forge->dropTable('resepsionis');  //
    }
}

