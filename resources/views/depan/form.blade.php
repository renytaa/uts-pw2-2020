@extends('layouts.utama')
@section('content')
                                            <div class="card-body"><h5 class="card-title">Tambah Produk</h5>
                                                <form class="" action= "<?= route('success-form')?> ">
                                                    <div class="position-relative form-group"><label for="nama-produk" class="">Nama Produk</label><input name="nama-produk" id="nama-produk" placeholder="Masukkan nama produk" type="text" class="form-control"></div>
                                                    
                                                    <div class="position-relative form-group"><label for="kategori" class="">Kategori</label><select name="kategori" id="kategori" class="form-control">
                                                        <option>Makanan</option>
                                                        <option>Minuman</option>
                                                        <option>Alat Tulis</option>
                                                    </select>
                                                </div>
                                                <div class="position-relative form-group"><label for="harga" class="">Harga</label><input name="harga" id="harga" placeholder="Harga" type="text" class="form-control"></div>
                                                    
                                                    
                                                    <button class="mt-1 btn btn-primary">Tambahkan</button>
                                                </form>
                                            </div>
@endsection