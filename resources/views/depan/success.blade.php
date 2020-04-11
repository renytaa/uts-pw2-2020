@extends('layouts.utama')
@section('content')
<div class="card-body"><h5 class="card-title">Detail Produk</h5>
                                                <ul>
                                                    <li>Nama Produk: <?=$request['nama-produk']?></li>
                                                    <li>Kategori: <?=$request['kategori']?></li>
                                                    <li>Harga: <?=$request['harga']?></li>
                                                </ul>
                                            </div>
@endsection