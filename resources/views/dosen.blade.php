@extends('layouts.admin')

@section('content')
<a class="btn btn-primary" href="#" role="button">Tambah</a>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
</nav>
<hr>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">NID</th>
      <th scope="col">Nama Dosen</th>
      <th scope="col">Prodi</th>
      <th scope="col">Option</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>123</td>
      <td>Sofyan</td>
      <td>Teknik Informatik</td>
      <td><button type="button" class="btn btn-primary">Edit</button> <button type="button" class="btn btn-success">Delete</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
</tbody>
</table>
@endsection