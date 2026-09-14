<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\Akun2Model;
use App\Models\Akun1Model;

class Akun2 extends ResourceController
{
    /** @var Akun2Model */
    protected $akun2Model;

    /** @var Akun1Model */
    protected $akun1Model;

    public function __construct()
    {
        $this->akun2Model = new Akun2Model();
        $this->akun1Model = new Akun1Model();
    }

    /**
     * Menampilkan Daftar Data Akun 2
     */
    public function index()
    {
        $data = [
            'title'   => 'Kode Akun 2',
            'dtakun2' => $this->akun2Model->getAkun2WithAkun1(),
        ];

        return view('akun2/index', $data);
    }

    /**
     * Menampilkan Form Tambah Data
     */
    public function new()
    {
        $data = [
            'title'   => 'Tambah Kode Akun 2',
            'dtakun1' => $this->akun1Model->findAll(),
        ];

        return view('akun2/new', $data);
    }

    /**
     * Memproses Simpan Data Baru
     */
    public function create()
    {
        $data = [
            'id_akun1'   => $this->request->getPost('id_akun1'),
            'kode_akun2' => $this->request->getPost('kode_akun2'),
            'nama_akun2' => $this->request->getPost('nama_akun2'),
        ];

        if (! $this->akun2Model->save($data)) {
            return redirect()->back()->withInput()->with('errors', $this->akun2Model->errors());
        }

        return redirect()->to(site_url('akun2'))->with('success', 'Data Akun 2 Berhasil Disimpan!');
    }

    /**
     * Menampilkan Form Edit Data
     */
    public function edit($id = null)
    {
        $akun2 = $this->akun2Model->find($id);

        if (! $akun2) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Data Akun 2 tidak ditemukan.');
        }

        $data = [
            'title'   => 'Edit Kode Akun 2',
            'akun2'   => $akun2,
            'dtakun1' => $this->akun1Model->findAll(),
        ];

        return view('akun2/edit', $data);
    }

    /**
     * Memproses Update Data
     */
    public function update($id = null)
    {
        $data = [
            'id_akun2'   => $id,
            'id_akun1'   => $this->request->getPost('id_akun1'),
            'kode_akun2' => $this->request->getPost('kode_akun2'),
            'nama_akun2' => $this->request->getPost('nama_akun2'),
        ];

        if (! $this->akun2Model->save($data)) {
            return redirect()->back()->withInput()->with('errors', $this->akun2Model->errors());
        }

        return redirect()->to(site_url('akun2'))->with('success', 'Data Akun 2 Berhasil Diperbarui!');
    }

    /**
     * Memproses Hapus Data (DELETE)
     */
    public function delete($id = null)
    {
        $this->akun2Model->delete($id);
        return redirect()->to(site_url('akun2'))->with('success', 'Data Akun 2 Berhasil Dihapus!');
    }
}
