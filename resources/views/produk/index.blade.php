@extends('layouts.master')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <h3> <i class="fas fa-layer-group">Data Produk</i></h3>
                <p align="right"><a href="{{ route('produk.create') }}" class="btn btn-sm btn-primary pull-right"
                style="margin-top: -8px">Tambah Data</a></p>
      <div class="col-md-12">
            <div class="card">
                <div class="card-body p-0">
               
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Nama Produk</th>
                      <th>Gambar</th>
                      <th>Harga</th>
                      <th>Stok</th>
                      <th>Keterangan</th>
                      <!-- <th>Status</th> -->
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $no = $produk->firstItem() - 1 ; ?>
                  @foreach ($produk as $data)
                  <?php $no++ ;?>
                    <tr>
                      <td>{{ $no }}</td>
                      <td>{{ $data->nama_barang }}</td>
                      <td>{{ $data->gambar }}</td>
                      <td>Rp. {{ number_format($data->harga, 0, ',', '.') }}</td>
                      <td>{{ $data->stok }}</td>
                      <td>{{ $data->keterangan }}</td>
                      <!-- <td>{{ $data->stock }}</td> -->
                        <td><form action="{{ route('produk.destroy', $data->id) }}" method="post"> {{ csrf_field() }}
                          <a href="{{ route('produk.edit', $data->id) }}" class="btn btn-sm btn-success">Edit</a>
                           <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Pesanan ?');"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
                <div>Jumlah Produk : {{ $jumlah_produk }}</div>
					      <div> {{ $produk->links() }} </div>
                <br>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
    </section>
@endsection