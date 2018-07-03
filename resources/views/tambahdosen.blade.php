@extends('layouts.admin')

@section('content')
<form>
 <div class="form-group row">
    <label for="inputNID" class="col-sm-2 col-form-label">NID</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="inputNID">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputNama" class="col-sm-2 col-form-label">Nama Dosen</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="inputNama">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputProdi" class="col-sm-2 col-form-label">Prodi</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="inputProdi">
    </div>
  </div>

  <a class="btn btn-primary" href="{{ url('/admin/dosen') }}" role="button">Tambah</a>
</form>
@endsection
