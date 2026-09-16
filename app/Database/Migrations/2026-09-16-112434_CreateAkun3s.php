<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * @suppress PHP6609
 */
class CreateAkun3s extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_akun3' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'kode_akun3' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
            ],
            'nama_akun3' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'id_akun1' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'id_akun2' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
        ]);

        $this->forge->addKey('id_akun3', true); // Primary Key
        
        // Foreign Keys ke akun1s dan akun2s (Strict Referential Integrity)
        $this->forge->addForeignKey('id_akun1', 'akun1s', 'id_akun1', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_akun2', 'akun2s', 'id_akun2', 'CASCADE', 'CASCADE');

        $this->forge->createTable('akun3s');
    }

    public function down()
    {
        $this->forge->dropTable('akun3s');
    }
}