@extends('layouts.awal')

@section('content')
<!-- <p class="text-center"> <strong> Setelah Melakukan Pembayaran dan Konfirmasi Silahkan Check Bio Data Anda dan Alamat Pada Form Profil </strong></p>
     -->


 <div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{url('home')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">CheckOut</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3><i class="fa fa-shopping-cart"></i>Check Out</h3>
                    @if(!empty($pesanan))
                    <p align="right">Tanggal Pesan : {{$pesanan->tanggal}}
                    </p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Total Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            ?>
                            @foreach($pesanan_details as $pesanan_detail)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$pesanan_detail->barang->nama_barang}}</td>
                                <td>{{$pesanan_detail->jumlah}}</td>
                                <td align="left">Rp. {{number_format($pesanan_detail->barang->harga)}}</td>
                                <td align="left">Rp. {{number_format($pesanan_detail->jumlah_harga)}}</td>
                                <td>
                                    <form action="{{url('check-out')}}/{{$pesanan_detail->id}}" method="post">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Pesanan ?');"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="4" align="right"><strong> Total Harga : Rp.</strong></td>
                                <td><strong> {{number_format($pesanan->jumlah_harga)}}</strong></td>
                                <td>
                                    <a href="{{url('konfirmasi-check-out')}}" class="btn btn-success" onclick="return confirm('Apakah Anda Yakin Ingin CheckOut Pesanan ?');">
                                        <i class="fa fa-shopping-cart"></i>Check Out</a>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                    
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection