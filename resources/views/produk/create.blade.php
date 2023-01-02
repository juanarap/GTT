@extends('layouts.master')
@section('content')
<div class="container">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Produk</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <form method="post" enctype="multipart/form-data" action="{{route('produk.store')}} "> 
    {{ csrf_field() }}
        <div class="container">
            <div class="form-group row">
            <label for="nama_barang" class="col-sm-2 col-form-label">Nama Produk</label>
                <div class="col-sm-5">
                <input type="text" class="form-control" name="nama" id="nama">
                </div>
            </div>  
            <div class="form-group row">
            <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                <div class="col-sm-5">
                <input type="file" name="gambar" id="gambar">
                </div>
            </div>
            <div class="form-group row">
              <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-5">
                <input type="text" class="form-control" name="harga" id="harga">
                </div>
            </div>
            <div class="form-group row">
              <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                <div class="col-sm-5">
                <input type="text" class="form-control" name="stok" id="stok">
                </div>
            </div>
            <div class="form-group row">
             <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-5">
                <input type="text" class="form-control" name="keterangan" id="keterangan">
                </div>
            </div>
            <!-- <div class="form-group row">
              <label for="stock" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-5">
                <input type="text" class="form-control" name="stock" id="stock">
                </div>
            </div> -->
            <div><button type="submit" class="btn btn-sm btn-primary">Simpan</button></div>
            </div>
        </form>

    </section>
</div>
@endsection