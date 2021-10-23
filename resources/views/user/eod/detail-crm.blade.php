@extends('layout.backend.app',[
	'title' => ' Detail Eod',
])
@section('content')

<div class="card mb-4">
    <div class=" mb-4 mt-4 text-center">
        <h3> Detail EOD  </h3>
    </div>
</div>

<div class="card">
  <div class="card-deck mt-4 mb-4">
    <div class="card ml-5 mr-5 col-lg-3">
        <div class="card-body ">
          <div class="border-bottom-danger">
            <div class="ml-4 mt-2 mb-4 mt-4 text-center">
                <h3> RIWAYAT EOD </h3>
            </div>
          </div>
          <div class=" mt-3 ">
            <p>
              EOD ditambahkan pada tanggal 
              get->date(pada saat ditambahkan) oleh get->role(pada saat ditambahkan) bernama get->name(pada saat ditambahkan)
            </p>
            <hr class="my-4">
            <p>
              EOD diupdate pada tanggal 
              get->date(pada saat diupdate) oleh get->role(pada saat diupdate) bernama get->name(pada saat diupdate)
            </p>
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
          <div class="mt-4 ml-2">
            <a href="{{ route('eod') }}" class="btn btn-secondary btn-icon-split mr-3">
              <span class="icon text-white-50">
                  <i class="fas fa-arrow-left"></i>
              </span>
              <span class="text">Kembali</span>
            </a>
            <a href="{{ route('update.eod') }}" class="btn btn-warning btn-icon-split mr-3">
              <span class="icon text-white-50">
                  <i class="fas fa-exclamation-triangle"></i>
              </span>
              <span class="text">Update EOD</span>
            </a>
          </div>
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