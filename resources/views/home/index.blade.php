@extends('layout/index')
@section('title','Beranda')
@section('namaSistem')
  <?php echo $namaSistem;?>
@endsection

@section('container')
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <br>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('/img/wallpaperresto.jpg') }}" alt="First slide"  width="500px" height="400px">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('/img/wallpaperresto2.jpg') }}" alt="Second slide"  width="500px" height="400px">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('/img/wallpaperresto3.jpg') }}" alt="Third slide"  width="500px" height="400px">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="col-md-6">
      <br>
      <div class="jumbotron">
        <h1 class="display-4">Selamat Datang!</h1>
        <hr class="my-4">
        <p>Ini adalah sistem untuk melakukan reservasi pada restoran, <font style="font-size:27px"><b>Restoku</b></font></p>
        <p class="lead">
          <a class="btn btn-success btn-md" href="{{{url('/daftar')}}}" role="button">Daftarkan Akun Anda!</a>
        </p>
      </div>
    </div>
  </div>
</div>
@endsection