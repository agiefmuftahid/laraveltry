@extends('layout/index')
@section('title')
  <?php echo $title;?>
@endsection

@section('container')
<form action="#" method="post">
  @csrf
  <br>
  <div class="form-group row justify-content-md-center">
    <h1 class="display-4">Masuk Ke Sistem</h1>
  </div>
  <br>
  <div class="form-group row justify-content-md-center">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-4">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group row justify-content-md-center">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-4">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <br>
  <div class="form-group row justify-content-md-center">
    <div class="col-sm-12">
      <center><button type="submit" class="btn btn-lg btn-success">Sign in</button></center>
    </div>
  </div>
</form>
@endsection