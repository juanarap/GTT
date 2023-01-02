@extends('layouts.awal')

@section('content')
<style>
    body{
        background-color: #fdfd96!important;
    }
    img {
        width: 310px;
        height: 310px;
    }
    .card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #e3e6f0;
    border-radius: 0.35rem;
}
</style>
<div class="container">
    <div class="row justify-content-center">
       
    </div>
</div>
<div class="container">
    <div class="row justify-content-left">
        @foreach($produk as $data)
        <div class="col-md-4">
            <div class="card">
                <img src="{{ url('uploads') }}/{{ $data->gambar }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $data->nama_barang }}</h5>
                    <p class="card-text">
                        <strong>Harga   :</strong> Rp. {{ number_format($data->harga)}} <br>
                        <strong>Stok    :</strong> {{$data->stok}}

                        <br>
                        <strong>Keterangan :</strong> 
                        {{ $data->keterangan }}<br>
                        <hr>
                        <!-- <strong>Status :</strong> {{$data->stock}} -->
                    </p>
                    
                    <a href="{{ url('pesan') }}/{{ $data->id }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Pesan</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<br>
@endsection