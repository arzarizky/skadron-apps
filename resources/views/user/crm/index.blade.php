@extends('layout.backend.app',[
	'title' => 'Crm',
	'pageTitle' => 'Crm',
])
@section('content')
<div class="jumbotron">
  <h1 class="display-4">Hello, {{ Auth::user()->name }}</h1>
  <p class="lead">Selamat datang di halaman CRM.</p>
  <hr class="my-4">
  <p>Anda login sebagai {{ Auth::user()->role }}.</p>
</div>

<div class="card">
  <div class="card-deck mt-4 mb-4">
    <div class="card ml-5 mr-5 col-lg-3">
        <div class="card-body ">
          <div class="border-bottom-danger">
            <div class="ml-4 mt-2 mb-4 mt-4 text-center">
                <h3> TANGGAL </h3>
            </div>
          </div>
          <div class="text-center mt-4 mb-4 mr-4 ml-4">
              <input type="date" class="form-control datepicker" style="align-items: center" id="pada_tanggal" onchange="tanggal()">
              <a href="" class="btn btn-secondary btn-icon-split mt-3">
                <span class="icon text-white-50">
                    <i class="fas fa-arrow-right"></i>
                </span>
                <span class="text">Lihat Detail CRM Tanggal <span id="hasil_tanggal"></span></span>
            </a>
          </div>
        </div>
    </div>

    <div class="card ml-5 mr-5">
        <div class="card-body">
          <div class="border-bottom-danger">
            <div class="ml-4 mt-2 mb-4 mt-4 text-center">
                <h3> ATTENTION </h3>
            </div>
          </div>
          <form class="mt-4">
            <textarea id="summernote" name="editordata"></textarea>
          </form>
          <a href="" class="btn btn-success btn-icon-split mt-3 ml-2">
            <span class="icon text-white-50">
                <i class="fas fa-check"></i>
            </span>
            <span class="text">Simpan CRM</span>
          </a>
        </div>
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