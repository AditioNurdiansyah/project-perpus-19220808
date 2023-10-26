<?php

namespace App\Controllers;

use App\Controller\BaseController;

class KategoriController extends BaseController
{
    public function index(): string
    {
        // Membuat instance dari model KategoriModel
        $kategori = new ('kategori');

        // $KategoriModel untuk berinteraksi dengan data dalam model
        $data = [
            'kategori' => $kategori->findAll(),
        ];

        // Kirim data e tampilan (view)
        return view('kategori/index', $data);
    } 
}