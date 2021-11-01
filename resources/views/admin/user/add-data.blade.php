
@extends('layout.backend.app',[
    'title' => 'Manage User',
    'pageTitle' =>'Manage User',
])

@push('css')
<link href="{{ asset('template/backend/sb-admin-2') }}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush

@section('content')

<div class="card mb-4 mt-4">
    <div class="border-bottom-danger">
        <!-- Button trigger modal -->
        <div class="ml-4 mt-2 mb-4 mt-4 text-center">
            <h3><b> Tambah Data User </b></h3>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <form action="{{ route('insert.data') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NAMA LENGKAP</label>
                <input type="text" name="name" class="form-control" placeholder="Isi nama lengkap">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NRP</label>
                <input type="text" name="nrp" class="form-control" placeholder="Isi nrp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NO TELPON</label>
                <input type="text" name="phone" class="form-control" placeholder="Isi no telpon">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">PANGKAT</label>
                <input type="text" name="pangkat" class="form-control" placeholder="Isi pangkat">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">KUALIFIKASI</label>
                <input type="text" name="kualifikasi" class="form-control" placeholder="Isi kualifikasi">
            </div>
            <div class="input-group-prepend">
                <label for="exampleInputEmail1" class="form-label">ROLE</label>
            </div>
            <div class="input-group mb-3">
                <select class="custom-select" name="role" id="inputGroupSelect01">
                  <option selected>Pilih Role</option>
                  <option value="1">Admin</option>
                  <option value="2">Komandan</option>
                  <option value="3">Anggota</option>
                </select>
            </div>
            <label class="form-label">FOTO</label>
            <div class="card mb-3">
                <input name="foto" type="file" name="foto" class="mb-3 mt-3 ml-3">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">PASSWORD</label>
                <input type="password" name="password" class="form-control" placeholder="Isi password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@stop
