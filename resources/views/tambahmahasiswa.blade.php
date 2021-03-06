<! -- create.blade.php -->
<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8">
 <title>..:: RAI 2017 - Penerapan CRUD pada Laravel 5.5 ::..</title>
 <link rel="stylesheet" href="{{asset('css/app.css')}}">
 </head>
 <body>
 <div class="container">
 <h2>Penambahan Data</h2><br/>
 @if ($errors->any())
 <div class="alert alert-danger">
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div><br />
 @endif
 @if (\Session::has('success'))
 <div class="alert alert-success">
 <p>{{ \Session::get('success') }}</p>
 </div><br />
 @endif
 <form method="post" action="{{url('/admin/mahasiswa')}}">
 {{csrf_field()}}
 <div class="row">
 <div class="col-md-4"></div>
 <div class="form-group col-md-4">
 <label for="name">Nama Mahasiswa:</label>
 <input type="text" class="form-control" name="Nama Mahasiswa">
 </div>
 </div>
 <div class="row">
 <div class="col-md-4"></div>
 <div class="form-group col-md-4">
 <label for="price">NIM:</label>
 <input type="text" class="form-control" name="NIM">
 </div>
 </div>
  <div class="row">
 <div class="col-md-4"></div>
 <div class="form-group col-md-4">
 <label for="price">Prodi:</label>
 <input type="text" class="form-control" name="Prodi">
 </div>
 </div>
 </div>
  <div class="row">
 <div class="col-md-4"></div>
 <div class="form-group col-md-4">
 <button type="submit" class="btn btn-success" style="marginleft:38px">Tambahkan Data</button>
 </div>
 </div>
 </form>
 </div>
 </body>
</html>