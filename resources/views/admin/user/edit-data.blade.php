
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
            <h3><b> Edit Data User </b></h3>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <form action="{{ route('update.data', ['user'=> $data->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NAMA LENGKAP</label>
                <input type="text" name="name" class="form-control" value="{{ $data->name }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NOMOR ANGGOTA</label>
                <input type="text" name="nomor_anggota" class="form-control" value="{{ $data->nomor_anggota }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NRP</label>
                <input type="text" name="nrp" class="form-control" value="{{ $data->nrp }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NO TELPON</label>
                <input type="text" name="phone" class="form-control" value="{{ $data->phone }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">PANGKAT</label>
                <input type="text" name="pangkat" class="form-control" value="{{ $data->pangkat }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">KUALIFIKASI</label>
                <input type="text" name="kualifikasi" class="form-control" value="{{ $data->kualifikasi }}">
            </div>
            <div class="input-group-prepend">
                <label for="exampleInputEmail1" class="form-label">ROLE</label>
            </div>
            <div class="input-group mb-3">
                <select class="custom-select" name="role" id="inputGroupSelect01">
                  <option selected>{{ $data->role }}</option>
                  <option value="1">Admin</option>
                  <option value="2">Komandan</option>
                  <option value="3">Anggota</option>
                </select>
            </div>
            <label class="form-label"></label>
            <div class="card mb-3">
                <img src="{{ $data->foto_url }}" class="mt-4 ml-3" alt="" style="width: 400px;">
                <input name="foto" type="file" name="foto" class="mb-3 mt-3 ml-3">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control">
                <small class="text-secondary">kosongkan kolom password jika tidak ingin mengubah password</small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@stop
