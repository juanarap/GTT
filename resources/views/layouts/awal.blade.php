<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body{
      background-color: #fdfd96!important;
    }
    .footer{
      background-color: #fdfd96!important;
    }
  </style>
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Gudange Tahu Takwa</title>
  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <!-- Bootstrap -->
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <!-- <link rel="{{asset('dns-prefetch" href="//fonts.gstatic.com')}}"> -->
     <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
     <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">  
     
    <!-- <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">   -->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

<body>
  <div class="container">
    <nav class="navbar navbar-default navbar-top">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-8 col-xs-12">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <style>
    .navbar-brand .img-logo {
      width: 150px;
      height: 50px;
      
    }
  </style>
              <a class="navbar-brand" href="{{ url('/') }}">
                <img alt="Brand" class="img-responsive img-logo" src="{{asset('img/produk/GTTL1.png')}}">
              </a>
            </div>
          </div>



          <div class="col-md-8 col-sm-4 col-xs-12">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

              <br>


              <div class="clearfix"></div>

              <ul class="nav navbar-nav navbar-right menu-top">
                @guest
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
                <li><a href="{{ route('home') }}">Shop</a></li>
                <li><a href="{{ route('lokasi') }}">Lokasi</a></li>
                @else
                <li><a href="{{ route('home') }}">Shop</a></li>
                @if (Auth::check() && Auth::user()->level == 'admin')
                <li class="nav-item">

                  <a class="nav-link" href="{{ url('produk') }}">
                    Olah Data



                  </a>


                </li>
               

                @endif

                <li>
                  <?php
                  $pesanan_utama = \App\Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
                  if (!empty($pesanan_utama)) {
                    $notif = \App\PesananDetail::where('pesanan_id', $pesanan_utama->id)->count();
                  }
                  ?>
                 <a class="nav-link" href="{{ url('check-out') }}">
                    <i class="glyphicon glyphicon-shopping-cart text-btn-top"></i>
                    @if(!empty($notif))
                    <span class="badge badge-danger">{{ $notif }}</span>
                    @endif
                  </a>
                </li>
                <li class="nav-item">
                           
                           <a class="nav-link" href="{{('https://wa.me/6285233175312?text=Gudange Tahu Takwa Pusat Oleh-Oleh Khas Kediri')}}">
                           <i class="glyphicon glyphicon-earphone"></i>
                           </a>



                       </a>
                       

                   </li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                  </a>


                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                    <!-- <li><a class="dropdown-item" href="{{ url('profile') }}">
                        Profile
                      </a></li>
                    <li> <a class="dropdown-item" href="{{ url('history') }}">
                        Riwayat Pemesanan
                      </a></li> -->
                    <li>
                      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                      </form>
                    </li>
                  </ul>

                </li>
                @endguest
              </ul>
            </div><!-- /.navbar-collapse -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </nav>

  </div>
  @yield('content')
  <div class="footer">
    <div class="container">
      <div class="row footer-div">
        <div class="col-md-4">
          <h3 class="title-footer">Gudange Tahu Takwa</h3>
          <h3><strong> Rasa Khas Asli Kediri  <br>
          Produksi Setiap Hari</strong></h3>
                  
        </div>
        <div class="col-md-3 col-md-offset-1">
          <!-- <h4 class="title-footer">More Info</h4>
          <ul class="list-unstyled list-contact">
            <li><a href=" ">How to order</a></li>
            <li><a href="#">Membership</a></li> -->
            <br>
            <br>
            <br>
            <br>
            <br> 
            <br>
            <br>
            <br>
            <br>
           
           <p class="text-center"> <strong> Copyright &copy; Gudange Tahu Takwa {{date('Y')}} </strong></p>
          </ul>
        </div>
        <div class="col-md-4">
          <h4 class="title-footer">Contact Admin</h4>
          <li>
          <a href="https://goo.gl/maps/d6P4bZskPxiVjXo5A"><strong>GTT Pusat Oleh-oleh Kediri, Jl. Pamenang No.1, Besok, Toyoresmi, Kec. Ngasem, Kabupaten Kediri, Jawa Timur 64182</strong></a>
                </li>
                <li>
                  
                  <a  href="{{('https://wa.me/6285233175312?text=Gudange Tahu Takwa Pusat Oleh-Oleh Khas Kediri')}}">
                           <i class="glyphicon glyphicon-earphone"></i> Contact Person
                           </a>
                
        </div>
      </div>
    </div>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script> -->
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    
    
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>


    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

    <script src="{{asset('assets/js/util.js')}}"></script> <!-- util functions included in the CodyHouse framework -->
    <script src="{{asset('assets/js/main.js')}}"></script> 
    <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('js/demo/chart-pie-demo.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @include('sweet::alert')
</body>

</html>