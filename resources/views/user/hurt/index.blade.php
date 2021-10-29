@extends('layout.backend.app',[
	'title' => 'Hurt',
	'pageTitle' => 'Hurt',
])

@push('css')
<link href="{{ asset('template/backend/sb-admin-2') }}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush

@section('content')
<div class="jumbotron">
  <h1 class="display-4">Hello, {{ Auth::user()->name }}</h1>
  <p class="lead">Selamat datang di halaman <span><b>HURT</b></span></p>
  <p class="lead">HITUNG RESIKO TERBANG-LAMBANGJA</p>
  <p class="lead">SKADRON UDARA 4</p>
  <hr class="my-4">
  <p>Anda login sebagai {{ Auth::user()->role }}</p>
  <p>Selamat bekerja dan sehat selalu :)</p>
</div>

<div class="notify">
    <div class="card mb-4">
        <div class="border-bottom-danger">
            <!-- Button trigger modal -->
            <div class="ml-4 mt-2 mb-4 mt-4 text-center">
                <h3><b> DAFTAR YANG MENGERJAKAN HURT </b></h3>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered data-table" id="">
                    <thead>
                        <tr>
                            <th style="vertical-align: middle; text-align: center">No</th>
                            <th style="vertical-align: middle; text-align: center ">Nama</th>
                            <th style="vertical-align: middle; text-align: center ">Tanggal</th>
                            <th style="vertical-align: middle; text-align: center ">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hurts as $key => $hurt)
                            <tr>
                                <td style="vertical-align: middle; text-align: center">{{$key + 1}}</td>
                                <td style="vertical-align: middle; text-align: center">{{$hurt->User->name}}</td>
                                <td style="vertical-align: middle; text-align: center">{{$hurt->submitted_at->format('d/m/Y H:i')}}</td>
                                <td style="vertical-align: middle; text-align: center">
                                    <a href="{{ route('hurt.download-pdf', $hurt->id)}}" class="btn btn-warning btn-icon-split mr-3" target="_blank">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-file-pdf"></i>
                                        </span>
                                        <span class="text">Download PDF</span>
                                    </a>
                                    {{-- <a href="{{ route('detail.hurt')}}" class="btn btn-warning btn-icon-split mr-3">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-info"></i>
                                        </span>
                                        <span class="text">Detail HURT</span>
                                    </a> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    
@stop

@push('js')
<script src="{{ asset('template/backend/sb-admin-2') }}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('template/backend/sb-admin-2') }}/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('template/backend/sb-admin-2') }}/js/demo/datatables-demo.js"></script>
@endpush