@extends('layout.backend.app',[
	'title' => 'Eet',
	'pageTitle' => 'EET',
])
@section('content')
{{-- <div class="jumbotron">
  <h1 class="display-4">Hello, {{ Auth::user()->name }}</h1>
  <p class="lead">Selamat datang di halaman <span><b>EET</b></span></p>
  <hr class="my-4">
  <p>Anda login sebagai {{ Auth::user()->role }}</p>
  <p>Selamat bekerja dan sehat selalu :)</p>
</div> --}}

<div class="card mb-4 mt-4">
  <div class="border-bottom-danger">
      <!-- Button trigger modal -->
      <div class="ml-4 mt-2 mb-4 mt-4 text-center">
          <h3><b> Daftar Air Time Pesawat casa C-212 </b></h3>
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
                      <th colspan="2" style="vertical-align: middle; text-align: center ">Rute</th>
                      <th style="vertical-align: middle; text-align: center ">EET</th>
                  </tr>
              </thead>
              <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($eets as $key => $row)
                <tr>
                  <td style="vertical-align: middle; text-align: center">{{ $key+1 }}</td>
                  <td style="vertical-align: middle; text-align: center">{{ $row->route_1 }}</td>
                  <td style="vertical-align: middle; text-align: center">{{ $row->route_2 }}</td>
                  <td style="vertical-align: middle; text-align: center">{{ $row->formatted_eet }}</td>
                </tr>
                @endforeach
              </tbody>
          </table>
      </div>
  </div>
</div>
@endsection