<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * @suppress PHP6609
 */

class CreateAkun2s extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_akun2' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'kode_akun2' => [
                'type'       => 'VARCHAR',
                'constraint' => 10,
            ],
            'nama_akun2' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'id_akun1' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
        ]);

        $this->forge->addKey('id_akun2', true); // Primary Key

        // Menambahkan Foreign Key ke tabel akun1s (Strict Referential Integrity)
        $this->forge->addForeignKey('id_akun1', 'akun1s', 'id_akun1', 'CASCADE', 'CASCADE');

        $this->forge->createTable('akun2s');
    }

    public function down()
    {
        $this->forge->dropTable('akun2s');
    }
}
