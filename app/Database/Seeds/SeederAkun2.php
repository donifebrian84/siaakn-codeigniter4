<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeederAkun2 extends Seeder
{
    public function run()
    {
        $data = [
            ['kode_akun2' => '1.1', 'nama_akun2' => 'Aktiva Lancar', 'id_akun1' => 1],
            ['kode_akun2' => '1.2', 'nama_akun2' => 'Aktiva Tetap', 'id_akun1' => 1],
            ['kode_akun2' => '2.1', 'nama_akun2' => 'Hutang Jangka Pendek', 'id_akun1' => 2],
            ['kode_akun2' => '2.2', 'nama_akun2' => 'Hutang Jangka Panjang', 'id_akun1' => 2],
            ['kode_akun2' => '3.1', 'nama_akun2' => 'Modal Pemilik', 'id_akun1' => 3],
            ['kode_akun2' => '4.1', 'nama_akun2' => 'Pendapatan Usaha', 'id_akun1' => 4],
            ['kode_akun2' => '5.1', 'nama_akun2' => 'Beban Gaji', 'id_akun1' => 5],
        ];

        $this->db->table('akun2s')->insertBatch($data);
    }
}
