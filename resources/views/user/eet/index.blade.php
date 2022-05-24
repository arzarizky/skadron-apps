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

<div class="mb-3 ml-3">
  <button type="button" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#tambah-data-eet">
    <span class="icon text-white-50">
        <i class="fas fa-plus"></i>
    </span>
    <span class="text">Tambah Data EET</span>
  </button>
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
                      <th style="vertical-align: middle; text-align: center ">ACTION</th>
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
                  <td style="vertical-align: middle; text-align: center">
                    <div> 
                      <button class="btn btn-warning btn-icon-split" data-toggle="modal" data-target="#update-eet{{ $row->id }}" style="padding-right: 15px;">
                      <span class="icon text-white-50">
                          <i class="fas fa-exclamation-triangle"></i>
                      </span>
                      <span class="text">Edit EET</span>
                      </button>
                    </div>
                    <div> 
                      <button class="btn btn-danger btn-icon-split mt-2 delete-eet" route-1="{{$row->route_1}}" route-2="{{$row->route_1}}" eet="{{$row->eet}}" id-eet="{{$row->id}}">
                      <span class="icon text-white-50">
                        <i class="fas fa-trash"></i>
                      </span>
                      <span class="text">Delete EET</span>
                      </button>
                    </div>
                  </td>
                </tr>
                </tr>
                @endforeach
              </tbody>
          </table>
      </div>
  </div>
</div>

<!-- Modal Tambah Data EET -->
<div class="modal fade" id="tambah-data-eet" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="tambah-data-eet-label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="tambah-data-eet-label">Tambah Data EET</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('eet.add')}}" method="POST">
          @csrf
          <div class="form-group">
            <label class="text-dark" for="rute-1">Rute 1</label>
            <input type="text" name="route_1" class="form-control text-dark" id="rute-1" placeholder="Masukan Data Rute 1">
          </div>
          <div class="form-group">
            <label class="text-dark" for="rute-1">Rute 2</label>
            <input type="text" name="route_2" class="form-control text-dark" id="rute-2" placeholder="Masukan Data Rute 2">
          </div>
          <div class="form-group">
            <label class="text-dark" for="rute-1">EET</label>
            <input type="number" name="eet" class="form-control text-dark" id="eet" placeholder="Masukan EET">
            <div class="card p-3 mt-3 mb-2">
              <small class="text-danger">Note   : Masukan EET Dalam Format Menit</small>
              <small class="text-danger">Contoh : 72 = 1:12  </small>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambahkan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@php
  $no = 1;
@endphp
@foreach ($eets as $key => $row)
<!-- Modal Update Data EET -->
<div class="modal fade" id="update-eet{{ $row->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="update-data-eet-label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="update-data-eet-label">Update Data EET</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/eet/{{$row->id}}/update" method="POST">
          @csrf
          <div class="form-group">
            <label class="text-dark" for="rute-1">Rute 1</label>
            <input type="text" name="route_1" class="form-control text-dark" id="rute-1" value="{{ $row->route_1 }}" placeholder="Masukan Data Rute 1">
          </div>
          <div class="form-group">
            <label class="text-dark" for="rute-1">Rute 2</label>
            <input type="text" name="route_2" class="form-control text-dark" id="rute-2" value="{{ $row->route_2 }}" placeholder="Masukan Data Rute 2">
          </div>
          <div class="form-group">
            <label class="text-dark" for="rute-1">EET</label>
            <input type="number" name="eet" class="form-control text-dark" id="eet" value="{{ $row->eet }}" placeholder="Masukan EET">
            <div class="card p-3 mt-3 mb-2">
              <small class="text-danger">Note   : Masukan EET Dalam Format Menit</small>
              <small class="text-danger">Contoh : 72 = 1:12  </small>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endforeach

@endsection

@push('js')

<script>
  $('.delete-eet').click(function(){

    var id_eet = $(this).attr('id-eet');
    var route_1 = $(this).attr('route-1');
    var route_2 = $(this).attr('route-2');
    var eet = $(this).attr('eet');

    swal({
      title: 'Yakin Menghapus?',
      text: ''+route_1+' ke '+route_2+' dengan EET '+eet+' Akan Dihapus!',
      icon: 'warning',
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        window.location = "/eet/delete/"+id_eet+"";
        swal('Data '+route_1+' ke '+route_2+' dengan EET '+eet+' Terhapus', {
          icon: 'success',
        });
      } else {
        swal('Data '+route_1+' ke '+route_2+' dengan EET '+eet+' Tidak Jadi Dihapus');
      }
    });
  });
</script>
    
@endpush