<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;
use App\Models\M_produk_kategori;
use CodeIgniter\HTTP\ResponseInterface;

class ProdukKategori extends BaseController
{
    public function __construct()
    {
        $this->kategori = new M_produk_kategori();
    }

    public function index()
    {
        // $valData = $this->request->getPost();
        // dd($valData);
        $btnCari = $this->request->getPost('btnCari');
        if (isset($btnCari)) {
            $cari = $this->request->getPost('txtCariKategori');
            session()->set('carikategori', $cari);
            redirect()->to('/kategori');
        } else {
            $cari = session()->get('carikategori');
        }

        $dataKategori = $cari ? $this->kategori->cariNamaKategori($cari) : $this->kategori;

        $perPage = 10;
        $noHal = $this->request->getVar('page_kategori') ? $this->request->getVar('page_kategori') : 1;
        $data = [
            'data_kategori' => $dataKategori->paginate($perPage, 'kategori'),
            'pager' => $this->kategori->pager,
            'perpage' => $perPage,
            'nohalaman' => $noHal
        ];

        return view('pages/backend/kategori/index', $data);
    }

    public function new()
    {
        if ($this->request->isAJAX()) {
            $msg = [
                'data' => view('pages/backend/kategori/new')
            ];
            echo json_encode($msg);
        } else {
            exit('Maaf tidak ada halaman yang bisa ditampilkan');
        }
    }

    public function create()
    {
        $namaKategori = strtoupper($this->request->getVar('txtNamaKategori'));
        $this->kategori->insert([
            'kategori' => $namaKategori
        ]);

        $msg = [
            'sukses' => 'Kategori berhasil ditambahkan'
        ];

        echo json_encode($msg);
    }
}
