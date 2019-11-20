@extends('layout/index')
@section('title')
  <?php echo $title;?>
@endsection

@section('container')
<form action="/daftar" method="post">
  @csrf
  <br>
  <div class="form-group row justify-content-md-center">
    <h1 class="display-4">Daftar Ke Sistem</h1>
  </div>
  <br>
  <div class="form-group row justify-content-md-center">
    <label for="inputEmail3" class="col-sm-2 col-form-label"><h3>Data Pribadi :</h3></label>
    <div class="col-sm-4">
        
    </div>
  </div>
  <div class="form-group row justify-content-md-center">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-4">
        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukkan Nama Anda" value="{{ old('nama')}}">
        @error('nama')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>
  </div>
  <div class="form-group row justify-content-md-center">
    <label for="inputEmail3" class="col-sm-2 col-form-label">No HP</label>
    <div class="col-sm-4">
        <input type="text" class="form-control @error('noHp') is-invalid @enderror" id="noHp" name="noHp" placeholder="Masukkan Nomor HP Anda" value="{{ old('noHp')}}">
        @error('noHp')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>
  </div>
  <div class="form-group row justify-content-md-center">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-4">
        <textarea type="email" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" placeholder="Masukkan Alamat Anda">{{ old('alamat')}}</textarea>
        @error('alamat')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>
  </div>
  <br>
  <div class="form-group row justify-content-md-center">
    <label for="inputEmail3" class="col-sm-2 col-form-label"><h3>Data Akun :</h3></label>
    <div class="col-sm-4">
        
    </div>
  </div>
  <div class="form-group row justify-content-md-center">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-4">
        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukkan Email Anda" value="{{ old('email')}}">
        @error('email')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>
  </div>
  <div class="form-group row justify-content-md-center">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-4">
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Masukkan Password Anda" value="{{ old('password')}}">
        @error('password')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>
  </div>
  <br>
  <div class="form-group row justify-content-md-center">
    <div class="col-sm-12">
      <center><button type="submit" class="btn btn-lg btn-success">Daftar</button></center>
    </div>
  </div>
</form>
@endsection