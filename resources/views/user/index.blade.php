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
      <h3> <i class="fas fa-layer-group">Data User</i></h3>
                <p align="right"><a href=" {{ route('user.create') }}" class="btn btn-sm btn-primary pull-right"
                style="margin-top: -8px">Tambah Data</a></p>
      <div class="card">
              <!-- /.card-header -->
              <div class="card-body p-0">
              
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Nama </th>
                      <th>Email</th>
                      <th>Alamat</th>
                      <th>No Hp</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $no = $user->firstItem() - 1 ; ?>
                  @foreach ($user as $data)
                  <?php $no++ ;?>
                    <tr>
                      <td>{{ $no }}</td>
                      <td>{{ $data->name }}</td>
                      <td>{{ $data->email }}</td>
                      <td>{{ $data->alamat }}</td>
                      <td>{{ $data->nohp }}</td>
                      <td><form action="{{ route('user.destroy', $data->id) }}" method="post"> {{ csrf_field() }}
                          <a href="{{ route('user.edit', $data->id) }}" class="btn btn-sm btn-success">Edit</a>
                           <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Pesanan ?');"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
                <div>Jumlah User : {{ $jumlah_user }}</div>
					      <div> {{ $user->links() }} </div>
                <br>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
    </section>
@endsection