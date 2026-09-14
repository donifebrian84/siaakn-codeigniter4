<?php

namespace App\Models;

use CodeIgniter\Model;

class Akun1Model extends Model
{
    protected $table            = 'akun1s';
    protected $primaryKey       = 'id_akun1';
    protected $allowedFields    = ['kode_akun1', 'nama_akun1'];
    protected $useTimestamps     = false;

    // Rules validasi bawaan di tingkat Model
    protected $validationRules = [
        'kode_akun1' => 'required|is_unique[akun1s.kode_akun1]|max_length[6]',
        'nama_akun1' => 'required|max_length[50]',
    ];
    

    protected $validationMessages = [
        'kode_akun1' => [
            'required'  => 'Kode Akun 1 wajib diisi.',
            'is_unique' => 'Kode Akun 1 sudah terdaftar.',
        ],
        'nama_akun1' => [
            'required' => 'Nama Akun 1 wajib diisi.',
        ],
    ];
}
