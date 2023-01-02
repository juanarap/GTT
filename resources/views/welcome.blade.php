@extends('layouts.awal')
@section('content')

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
  <style>
    .carousel-inner .item img {
      width: 1350px;
      height: 70vh;
    }
    /* .col .img {
      width: 1350px;
      height: 70vh;
    } */
    
  </style>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/produk/2.jfif" alt="Slide1">
      <div class="carousel-caption">

      </div>
    </div>
    <div class="item">
      <img src="img/produk/3 1.png" alt="Slider2">
      <div class="carousel-caption">

      </div>
    </div>
    <div class="item">
      <img src="img/produk/kun.png" alt="Slider3">
      <div class="carousel-caption">

      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container div-gallery-feed">
  <br>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31623.160383199942!2d112.039981!3d-7.800934999999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e785a02bd6effb7%3A0xf175d81d9ce79ff6!2sGTT%20Pusat%20Oleh-Oleh%20Kediri!5e0!3m2!1sid!2sid!4v1654659603811!5m2!1sid!2sid" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  <div class="row">
    <div class="col-md-12">
      <h3 class="title-gallery-feed">Produk Kita</h3>
    </div>
  </div>
  <div class="row gallery-feed">
  <div class="col-md-4 col-sm-6 col-xs-6">
      <img class="img-responsive" src="img/produk/16.jpeg">
    </div>
     <div class="col-md-4 col-sm-6 col-xs-6">
      <img class="img-responsive" src="img/produk/17.jpeg">
    </div>
     <div class="col-md-4 col-sm-6 col-xs-6">
      <img class="img-responsive" src="img/produk/19.jpeg">
    </div>
     <div class="col-md-4 col-sm-6 col-xs-6">
      <img class="img-responsive" src="img/produk/18.jpeg">
    </div>
     <div class="col-md-4 col-sm-6 col-xs-6">
      <img class="img-responsive" src="img/produk/3.jpeg">
    </div>
    <div class="col-md-4 col-sm-6 col-xs-6">
      <img class="img-responsive" src="img/produk/20.jpeg">
    </div>

  </div>
  <div class="center">
    <a href="https://www.instagram.com/pusatoleholehgtt/" class="more-gallery-feed">CHECK OUR INSTAGRAM</a>
  </div>
</div>

<div class="container div-articles">
  <div class="row div-single-articles">
    <div class="col-md-5">
      <img src="img/produk/1.png" class="img-responsive">
    </div>
    <div class="col-md-7">
      <div class="row">
        <div class="col-md-10 col-sm-10 col-xs-8">
          <h3 class="title-article">Tahu Takwa</h3>
          <p class="author-article">by GTT</p>
          <!-- <p class="comment-article"><span class="glyphicon glyphicon-comment"></span>&nbsp;&nbsp;100</p> -->
        </div>
        <!-- <div class="col-md-2 col-sm-2 col-xs-4">
          <div class="date-article">
            25 Okt
          </div>
        </div> -->
      </div>

      <div class="row content-article">
        <div class="col-md-10">
          <p>Orang-orang kediri menyebut tahu ini bukan dengan tahu kuning, melainkan tahu takwa. Ternyata, tahu takwa ini sendiri diambil dari suku Hokkian yang bermigrasi di kota ini. Suku tersebut bernama ‘Kwa’, namun terjadi asimilasi bahasa dan penyesuaian kata oleh orang Jawa yang kurang fasih dalam penyebutan tahu kwa, jadi sering kali mereka menyebutnya dengan takwa atau tahu takwa. Warna kuning pada tahu ini didapatkan dari pewarna alami, yaitu kunyit. Pemakaian warna alami ini tentunya lebih sehat dan menambah cita rasa dari tahu ini. Uniknya, rasa kunyit dari tahu ini tidak terlalu mencolok, bahkan terkesan lezat saat dikosumsi.

          </p>
        </div>
      </div>
      <!-- <div class="row">
        <div class="col-md-12">
          <a href="#" class="read-more">Read More</a>
        </div>
      </div> -->
    </div>
  </div>

  <div class="row div-single-articles">
    <div class="col-md-5">
      <img src="img/produk/2.jfif" class="img-responsive">
    </div>
    <div class="col-md-7">
      <div class="row">
        <div class="col-md-10 col-sm-10 col-xs-8">
          <h3 class="title-article">Tahu Putih Pong</h3>
          <p class="author-article">by GTT</p>
          <!-- <p class="comment-article"><span class="glyphicon glyphicon-comment"></span>&nbsp;&nbsp;10</p> -->
        </div>
        <!-- <div class="col-md-2 col-sm-2 col-xs-4">
          <div class="date-article">
            01 Sept
          </div>
        </div> -->
      </div>

      <div class="row content-article">
        <div class="col-md-10">
          <p>Tahu Putih Pong  memiliki makna kebahagiaan dan keberuntungan untuk seluruh anggota keluarga karena pelafalannya mirip dengan keberuntungan dan kebahagiaan dalam Bahasa Mandarin. Itulah mengapa seringkali tahu disajikan dengan cara direbus, dikukus atau ditumis dengan daging cincang, saus szechuan atau sayuran di atasnya.<br>

          Tahu ini juga bisa diolah menjadi berbagai jenis masakan. Makanan ini juga cocok dimasukkan ke dalam masakan lainnya. Selain lezat, makanan yang berasal dari kedelai ini juga mengandung banyak nutrisi. Beberapa nutrisi yang terkandung di dalamnya antara lain protein, zat besi, kalsium dan rendah sodium, kolesterol, dan kalori.</p>
        </div>
      </div>
      <!-- <div class="row">
        <div class="col-md-12">
          <a href="#" class="read-more">Read More</a>
        </div>
      </div> -->
    </div>
  </div>
</div>



@endsection

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->