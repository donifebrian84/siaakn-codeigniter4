<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeederAkun3 extends Seeder
{
    public function run()
    {
        $data = [
            ['kode_akun3' => '1.1.01', 'nama_akun3' => 'Kas Utama', 'id_akun1' => 1, 'id_akun2' => 1],
            ['kode_akun3' => '1.1.02', 'nama_akun3' => 'Bank BCA', 'id_akun1' => 1, 'id_akun2' => 1],
            ['kode_akun3' => '1.1.03', 'nama_akun3' => 'Piutang Usaha', 'id_akun1' => 1, 'id_akun2' => 1],
            ['kode_akun3' => '1.2.01', 'nama_akun3' => 'Peralatan Kantor', 'id_akun1' => 1, 'id_akun2' => 2],
            ['kode_akun3' => '2.1.01', 'nama_akun3' => 'Hutang Dagang', 'id_akun1' => 2, 'id_akun2' => 3],
            ['kode_akun3' => '3.1.01', 'nama_akun3' => 'Modal Disetor', 'id_akun1' => 3, 'id_akun2' => 5],
            ['kode_akun3' => '4.1.01', 'nama_akun3' => 'Pendapatan Jasa', 'id_akun1' => 4, 'id_akun2' => 6],
            ['kode_akun3' => '5.1.01', 'nama_akun3' => 'Beban Gaji Karyawan', 'id_akun1' => 5, 'id_akun2' => 7],
        ];

        $this->db->table('akun3s')->insertBatch($data);
    }
}
