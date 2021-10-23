@extends('layout.backend.app',[
	'title' => 'Crm',
])

@section('content')
<div class="jumbotron">
  <h1 class="display-4">Hello, {{ Auth::user()->name }}</h1>
  <p class="lead">Selamat datang di halaman CRM.</p>
  <hr class="my-4">
  <p>Anda login sebagai {{ Auth::user()->role }}.</p>
</div>

<div class="card mb-4 mt-4">
  <div class="border-bottom-danger">
      <!-- Button trigger modal -->
      <div class="ml-4 mt-2 mb-4 mt-4 text-center">
          <h3> DATA CRM </h3>
      </div>
  </div>
</div>
<div class="mb-3">
  <a href="{{ route('add.crm') }}" class="btn btn-success btn-icon-split">
    <span class="icon text-white-50">
        <i class="fas fa-plus"></i>
    </span>
    <span class="text">Tambah CRM</span>
</a>
</div>
<div class="card">
  <div class="card-body">
      <div class="table-responsive">
          <table class="table table-bordered data-table" id="">
              <thead>
                  <tr>
                      <th style="vertical-align: middle; text-align: center">No</th>
                      <th style="vertical-align: middle; text-align: center ">Tanggal</th>
                      <th style="vertical-align: middle; text-align: center ">Pembuat</th>
                      <th style="vertical-align: middle; text-align: center ">Action</th>
                  </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="vertical-align: middle; text-align: center">1</td>
                  <td style="vertical-align: middle; text-align: center">10/23/20</td>
                  <td style="vertical-align: middle; text-align: center">Admin(get role yang menambkan) Arza Rizky(get name yang menambahkan)</td>
                  <td style="vertical-align: middle; text-align: center">
                    <a href="{{ route('detail.crm') }}" class="btn btn-warning btn-icon-split mr-3">
                      <span class="icon text-white-50">
                          <i class="fas fa-info"></i>
                      </span>
                      <span class="text">Detail CRM</span>
                    </a>
                    <a href="#" class="btn btn-danger btn-icon-split">
                      <span class="icon text-white-50">
                          <i class="fas fa-trash"></i>
                      </span>
                      <span class="text">Hapus CRM</span>
                    </a>
                  </td>
                </tr>
              </tbody>
          </table>
      </div>
  </div>
</div>

@endsection

@push('js')
<script src="{{ asset('template/backend/sb-admin-2') }}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('template/backend/sb-admin-2') }}/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('template/backend/sb-admin-2') }}/js/demo/datatables-demo.js"></script>

<script>
  $('#summernote').summernote({
    placeholder: 'MAUNULIS APANIIII',
    tabsize: 2,
    height: 500
  });
</script>

<script type="text/javascript">
    var padatanggal = document.getElementById('pada_tanggal');

    function tanggal() {
      var hasiltanggal = document.getElementById('hasil_tanggal');
      hasiltanggal.textContent = padatanggal.value;
    }

</script>
@endpush