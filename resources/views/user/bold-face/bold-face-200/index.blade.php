@extends('layout.backend.app',[
	'title' => 'Bold Face 200',
	'pageTitle' => 'Bold Face 200',
])
@section('content')
<div class="jumbotron">
  <h1 class="display-4">Hello, {{ Auth::user()->name }}</h1>
  <p class="lead">Selamat datang di halaman <span><b>Bold Face 200</b></span></p>
  <p class="lead">WING 2 LANUD ABD SALEH</p>
  <p class="lead">SKADRON UDARA 4</p>
  <hr class="my-4">
  <p>Anda login sebagai {{ Auth::user()->role }}</p>
  <p>Selamat bekerja dan sehat selalu :)</p>
</div>

<div class="card mb-4 mt-4">
  <div class="border-bottom-danger">
      <!-- Button trigger modal -->
      <div class="ml-4 mt-2 mb-4 mt-4 text-center">
          <h3><b> DAFTAR YANG MENGERJAKAN BOLD FACE PROCEDURE C-212 CASA SERI 200 </b></h3>
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
                      <th style="vertical-align: middle; text-align: center ">Tanggal</th>
                      <th style="vertical-align: middle; text-align: center ">Nama</th>
                      <th style="vertical-align: middle; text-align: center ">Aksi</th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($boldFaces as $key => $boldFace)
                  <tr>
                    <td style="vertical-align: middle; text-align: center">{{$key+1}}</td>
                    <td style="vertical-align: middle; text-align: center">{{$boldFace->created_at->format('d/m/Y')}}</td>
                    <td style="vertical-align: middle; text-align: center">{{$boldFace->User->name}}</td>
                    <td style="vertical-align: middle; text-align: center">
                      <a href="{{ route('bold.face.200.download-pdf', $boldFace->id)}}" class="btn btn-warning btn-icon-split mr-3" target="_blank">
                          <span class="icon text-white-50">
                              <i class="fas fa-file-pdf"></i>
                          </span>
                          <span class="text">Download PDF</span>
                      </a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
          </table>
      </div>
  </div>
</div>

@endsection