<?php

namespace App\Models;

use CodeIgniter\Model;

class Akun2Model extends Model
{
    protected $table            = 'akun2s';
    protected $primaryKey       = 'id_akun2';
    protected $allowedFields    = ['kode_akun2', 'nama_akun2', 'id_akun1'];
    protected $useTimestamps     = false;

    // Rules Validasi Server-Side
    protected $validationRules = [
        'id_akun1'   => 'required|numeric|is_not_unique[akun1s.id_akun1]',
        'kode_akun2' => 'required|max_length[10]',
        'nama_akun2' => 'required|max_length[100]',
    ];

    /**
     * Mengambil data Akun 2 beserta nama Akun 1 (JOIN Query)
     * 
     * @return array
     */
    public function getAkun2WithAkun1()
    {
        return $this->select('akun2s.*, akun1s.kode_akun1, akun1s.nama_akun1')
            ->join('akun1s', 'akun1s.id_akun1 = akun2s.id_akun1')
            ->orderBy('akun2s.kode_akun2', 'ASC')
            ->findAll();
    }
}
