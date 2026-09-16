<?php

namespace App\Models;

use CodeIgniter\Model;

class Akun3Model extends Model
{
    protected $table            = 'akun3s';
    protected $primaryKey       = 'id_akun3';
    protected $allowedFields    = ['kode_akun3', 'nama_akun3', 'id_akun1', 'id_akun2'];
    protected $useTimestamps     = false;

    // Rules Validasi Server-Side
    protected $validationRules = [
        'id_akun1'   => 'required|numeric|is_not_unique[akun1s.id_akun1]',
        'id_akun2'   => 'required|numeric|is_not_unique[akun2s.id_akun2]',
        'kode_akun3' => 'required|max_length[20]',
        'nama_akun3' => 'required|max_length[100]',
    ];

    /**
     * Mengambil data Akun 3 beserta data Akun 1 & Akun 2 (Multi-JOIN Query)
     * 
     * @return array
     */
    public function getAkun3WithRelations()
    {
        return $this->select('akun3s.*, akun1s.kode_akun1, akun1s.nama_akun1, akun2s.kode_akun2, akun2s.nama_akun2')
            ->join('akun1s', 'akun1s.id_akun1 = akun3s.id_akun1')
            ->join('akun2s', 'akun2s.id_akun2 = akun3s.id_akun2')
            ->orderBy('akun3s.kode_akun3', 'ASC')
            ->findAll();
    }
}
