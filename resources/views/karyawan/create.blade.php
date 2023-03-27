@extends('layouts.master')

@section('content')
<div class="col-md-12">
    <h2 class="my-2 fw-bold text-center fw-bold w-100">TAMBAH KARYAWAN</h2>
    <form method="POST" action="{{ url('karyawan/create') }}">
        @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Nama" name="nama">
        </div>
        <div class="form-group">
            <label for="nik">NIK</label>
            <input type="text" class="form-control" id="nik" placeholder="NIK" name="nik">
        </div>
        <button type="submit" class="btn btn-primary my-2 w-100">Submit</button>
    </form>
</div>
@endsection