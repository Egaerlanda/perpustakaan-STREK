<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Bahasa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'    =>['type'=>'int', 'constraint'=>10, 'unsigned'=>true, 'auto_increment'=>true],
            'kode'  =>['type'=>'varchar', 'constraint'=>2, 'null'=>false],
            'nama'  =>['type'=>'varchar', 'constraint'=>50, 'null'=>false],
        ]);
        $this->forge->addKey('id');
        $this->forge->addPrimaryKey('kode');
        $this->forge->createTable('Bahasa'); 
    }

    public function down()
    {
        $this->forge->dropTable('Bahasa');
    }
}
