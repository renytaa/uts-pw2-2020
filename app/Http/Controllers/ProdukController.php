<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        //tampilkan daftar produk yang berisi tabel untuk menampilkan produk dari array berikut ini
        $produk  = [
            [
                'nama_produk'=>'Susu Cap Sisfo',
                'kategori'=>'Minuman',
                'harga'=>40000
            ],
            [
                'nama_produk'=>'SisfoMie',
                'kategori'=>'Makanan',
                'harga'=>13000
            ],
            [
                'nama_produk'=>'Sisfo Biskuit',
                'kategori'=>'Makanan',
                'harga'=>16000
            ],
            [
                'nama_produk'=>'SisfoPaper A4 80g',
                'kategori'=>'Alat Tulis',
                'harga'=>35000
            ]
        ];
        return view('depan.index',["produk"=>$produk]);

        //kemudian tampilkan dalam view
    }
    
    public function tambah()
    {
        return view('depan.form');
        // tampilkan form seperti yang ada di template
    }

    public function detail(request $request)
    {
        return view('depan.success',['request'=>$request]);
        
        // tampilkan halaman success seperti yang ada di template
    }
}
