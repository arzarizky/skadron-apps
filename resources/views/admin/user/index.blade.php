@extends('layout.backend.app',[
    'title' => 'Manage User',
    'pageTitle' =>'Manage User',
])

@push('css')
<link href="{{ asset('template/backend/sb-admin-2') }}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush

@section('content')

<div class="jumbotron">
  <h1 class="display-4">Hello, {{ Auth::user()->name }}</h1>
  <p class="lead">Selamat datang di halaman <span><b>Manage User</b></span></p>
  <hr class="my-4">
  <p>Anda login sebagai {{ Auth::user()->role }}</p>
  <p>Selamat bekerja dan sehat selalu :)</p>
</div>

<div class="card mb-4 mt-4">
  <div class="border-bottom-danger">
      <!-- Button trigger modal -->
      <div class="ml-4 mt-2 mb-4 mt-4 text-center">
          <h3><b> Data User </b></h3>
      </div>
  </div>
</div>
<div class="mb-3 ml-3">
  <a href="{{ route('adduser') }}" class="btn btn-success btn-icon-split">
    <span class="icon text-white-50">
        <i class="fas fa-plus"></i>
    </span>
    <span class="text">Tambah USER</span>
</a>
<button type="button" class="btn btn-info btn-icon-split ml-4" data-toggle="modal" data-target="#exampleModalCenter">
  <span class="icon text-white-50">
      <i class="fas fa-file-import"></i>
  </span>
  <span class="text">Import Excel</span>
</button>
<a href="{{ route('export.excel') }}" class="btn btn-primary btn-icon-split ml-4">
  <span class="icon text-white-50">
      <i class="fas fa-file-export"></i></i>
  </span>
  <span class="text">Export Excel</span>
</a>
<a href="{{ asset('Sample User Import.xlsx') }}" class="btn btn-secondary btn-icon-split float-right mr-3">
  <span class="icon text-white-50">
      <i class="fas fa-file-download"></i>
  </span>
  <span class="text">Download Sample User Import Excel</span>
</a>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Import User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('import.excel') }}" method="POST" enctype="multipart/form-data">
          @csrf
           <div class="modal-body">
             <div class="form-group">
               <input type="file" name="file" required>
             </div>
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
             <button type="submit" class="btn btn-primary">Upload</button>
           </div>
        </form>
      </div>
    </div>
  </div>
</div>


<div class="card">
  <div class="card-body">
      <div class="table-responsive">
        <form action="{{ route('admin') }}" method="GET" class=" mr-auto mb-3 mt-2 navbar-search col-md-3">
          <div class="input-group">
              <input type="search" id="inputPassword6" name="search" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                  <button class="btn btn-primary" type="submit">
                      <i class="fas fa-search fa-sm"></i>
                  </button>
              </div>
          </div>
      </form>
          <table class="table table-bordered data-table" id="">
              <thead>
                  <tr>
                      <th style="vertical-align: middle; text-align: center">No</th>
                      <th style="vertical-align: middle; text-align: center ">NAMA</th>
                      <th style="vertical-align: middle; text-align: center ">NRP</th>
                      <th style="vertical-align: middle; text-align: center ">NO HP</th>
                      <th style="vertical-align: middle; text-align: center ">PANGKAT</th>
                      <th style="vertical-align: middle; text-align: center ">KUALIFIKASI</th>
                      <th style="vertical-align: middle; text-align: center ">ROLE</th>
                      <th style="vertical-align: middle; text-align: center ">TERAKHIR DI UPDATE</th>
                      <th style="vertical-align: middle; text-align: center ">Action</th>
                  </tr>
              </thead>
              <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($data as $index => $row)
                <tr>
                  <td style="vertical-align: middle; text-align: center">{{ $index + $data->firstItem() }}</td>
                  <td style="vertical-align: middle; text-align: center">{{ $row->name }}</td>
                  <td style="vertical-align: middle; text-align: center">{{ $row->nrp }}</td>
                  <td style="vertical-align: middle; text-align: center">{{ $row->phone }}</td>
                  <td style="vertical-align: middle; text-align: center">{{ $row->pangkat }}</td>
                  <td style="vertical-align: middle; text-align: center">{{ $row->kualifikasi }}</td>
                  <td style="vertical-align: middle; text-align: center">{{ $row->role }}</td>
                  <td style="vertical-align: middle; text-align: center">{{ $row->updated_at }}</td>
                  <td style="vertical-align: middle; text-align: center">
                    <div> 
                      <a href="{{ route('edit.data', ['id'=> $row->id]) }}" class="btn btn-warning btn-icon-split" style="padding-right: 15px;">
                      <span class="icon text-white-50">
                          <i class="fas fa-exclamation-triangle"></i>
                      </span>
                      <span class="text">Edit User</span>
                      </a>
                    </div>
                   <div>
                    <form action="" class="d-inline">
                    <a href="#" data-id="{{ $row->id }}" data-name="{{ $row->name }}" class="btn btn-danger btn-icon-split delete mt-2">
                      <span class="icon text-white-50">
                          <i class="fas fa-trash"></i>
                      </span>
                      <span class="text">Delete User</span>
                    </a>
                    </form>
                   </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
          </table>
          <div class="d-flex justify-content-center">
            {{ $data->links() }}
          </div>
      </div>
  </div>
</div>
@stop

@push('js')

<script>
  $('.delete').click(function () {
      var userid = $(this).attr('data-id');
      var name = $(this).attr('data-name');

      swal({
          title: "Yakin ?",
          text: "Kamu akan menghapus user dengan nama " + name + " ",
          icon: "warning",
          buttons: true,
          dangerMode: true,
      })
          .then((willDelete) => {
              if (willDelete) {
                  window.location = "/admin/delete/" + userid + ""
                  swal("User berhasil di hapus", {
                      icon: "success",
                  });
              } else {
                  swal("User tidak jadi dihapus");
              }
          });
  });
</script>

<script>
  @if (Session:: has('success'))
  toastr.success("{{ Session::get('success') }}")
  @endif
</script>
@endpush