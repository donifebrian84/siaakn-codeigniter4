<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\Akun3Model;
use App\Models\Akun2Model;
use App\Models\Akun1Model;

class Akun3 extends ResourceController
{
    /** @var Akun3Model */
    protected $akun3Model;

    /** @var Akun2Model */
    protected $akun2Model;

    /** @var Akun1Model */
    protected $akun1Model;

    public function __construct()
    {
        $this->akun3Model = new Akun3Model();
        $this->akun2Model = new Akun2Model();
        $this->akun1Model = new Akun1Model();
    }

    /**
     * Menampilkan Daftar Data Akun 3
     */
    public function index()
    {
        $data = [
            'title'   => 'Kode Akun 3',
            'dtakun3' => $this->akun3Model->getAkun3WithRelations(),
        ];

        return view('akun3/index', $data);
    }

    /**
     * Menampilkan Form Tambah Data
     */
    public function new()
    {
        $data = [
            'title'   => 'Tambah Kode Akun 3',
            'dtakun1' => $this->akun1Model->findAll(),
            'dtakun2' => $this->akun2Model->getAkun2WithAkun1(),
        ];

        return view('akun3/new', $data);
    }

    /**
     * Memproses Simpan Data Baru
     */
    public function create()
    {
        $data = [
            'id_akun1'   => $this->request->getPost('id_akun1'),
            'id_akun2'   => $this->request->getPost('id_akun2'),
            'kode_akun3' => $this->request->getPost('kode_akun3'),
            'nama_akun3' => $this->request->getPost('nama_akun3'),
        ];

        if (! $this->akun3Model->save($data)) {
            return redirect()->back()->withInput()->with('errors', $this->akun3Model->errors());
        }

        return redirect()->to(site_url('akun3'))->with('success', 'Data Akun 3 Berhasil Disimpan!');
    }

    /**
     * Menampilkan Form Edit Data
     */
    public function edit($id = null)
    {
        $akun3 = $this->akun3Model->find($id);

        if (! $akun3) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Data Akun 3 tidak ditemukan.');
        }

        $data = [
            'title'   => 'Edit Kode Akun 3',
            'akun3'   => $akun3,
            'dtakun1' => $this->akun1Model->findAll(),
            'dtakun2' => $this->akun2Model->getAkun2WithAkun1(),
        ];

        return view('akun3/edit', $data);
    }

    /**
     * Memproses Update Data
     */
    public function update($id = null)
    {
        $data = [
            'id_akun3'   => $id,
            'id_akun1'   => $this->request->getPost('id_akun1'),
            'id_akun2'   => $this->request->getPost('id_akun2'),
            'kode_akun3' => $this->request->getPost('kode_akun3'),
            'nama_akun3' => $this->request->getPost('nama_akun3'),
        ];

        if (! $this->akun3Model->save($data)) {
            return redirect()->back()->withInput()->with('errors', $this->akun3Model->errors());
        }

        return redirect()->to(site_url('akun3'))->with('success', 'Data Akun 3 Berhasil Diperbarui!');
    }

    /**
     * Memproses Hapus Data (DELETE)
     */
    public function delete($id = null)
    {
        $this->akun3Model->delete($id);
        return redirect()->to(site_url('akun3'))->with('success', 'Data Akun 3 Berhasil Dihapus!');
    }
}
