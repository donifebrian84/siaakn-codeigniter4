<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Akun1Model;

class Akun1 extends BaseController
{
    /**
     * @var Akun1Model
     */
    protected $akun1Model;

    public function __construct()
    {
        $this->akun1Model = new Akun1Model();
    }

    public function index()
    {
        $data = [
            'title'   => 'Kode Akun 1',
            'dtakun1' => $this->akun1Model->findAll(), // Mengambil data via Model
        ];

        return view('akun1/index', $data);
    }

    // Menampilkan Halaman Form Tambah Data
    public function new()
    {
        return view('akun1/new', [
            'validation' => \Config\Services::validation(),
        ]);
    }

    // Memproses Simpan Data Baru
    public function create()
    {
        $data = [
            'kode_akun1' => $this->request->getPost('kode_akun1'),
            'nama_akun1' => $this->request->getPost('nama_akun1'),
        ];

        // Memanfaatkan validasi dan insert dari Model
        if (! $this->akun1Model->save($data)) {
            // Jika validasi gagal, kembalikan ke form beserta pesan eror
            return redirect()->back()->withInput()->with('errors', $this->akun1Model->errors());
        }

        return redirect()->to(site_url('akun1'))->with('success', 'Data Berhasil Disimpan!');
    }

    // Menampilkan Form Edit berdasarkan ID
    public function edit($id = null)
    {
        $akun1 = $this->akun1Model->find($id);

        if (! $akun1) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Data Kode Akun 1 tidak ditemukan.');
        }

        return view('akun1/edit', [
            'title' => 'Edit Kode Akun 1',
            'akun1' => $akun1,
        ]);
    }

    // Memproses Perubahan Data (Update)
    // Memproses Perubahan Data (Update) - Professional Way
    public function update($id = null)
    {
        // 1. Pastikan data ada di database
        $akun1 = $this->akun1Model->find($id);
        if (!$akun1) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Data Kode Akun 1 tidak ditemukan.');
        }

        // 2. Validasi Server Side (Gunakan getVar agar membaca data PUT)
        $rules = [
            'kode_akun1' => "required|is_unique[akun1s.kode_akun1,id_akun1,{$id}]|max_length[6]",
            'nama_akun1' => 'required|max_length[50]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // 3. Ambil data inputan menggunakan getVar() (Bukan getPost)
        $data = [
            'kode_akun1' => $this->request->getVar('kode_akun1'),
            'nama_akun1' => $this->request->getVar('nama_akun1'),
        ];

        // 4. Update data via Model
        $this->akun1Model->skipValidation(true)->update($id, $data);

        return redirect()->to(site_url('akun1'))->with('success', 'Data Berhasil Diperbarui!');
    }

    /**
     * Memproses Hapus Data berdasarkan ID (RESTful DELETE)
     * 
     * @param int|string|null $id
     * @return \CodeIgniter\HTTP\RedirectResponse
     */
    public function delete($id = null)
    {
        // 1. Pastikan data ada di database
        $akun1 = $this->akun1Model->find($id);

        if (!$akun1) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Data Kode Akun 1 tidak ditemukan.');
        }

        // 2. Eksekusi Hapus via Model
        $this->akun1Model->delete($id);

        // 3. Return Redirect dengan Flash Message Sukses
        return redirect()->to(site_url('akun1'))->with('success', 'Data Berhasil Dihapus!');
    }
}
