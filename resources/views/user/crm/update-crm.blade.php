@extends('layout.backend.app',[
	'title' => ' Detail Crm',
])
@section('content')

<div class="card mb-4">
    <div class=" mb-4 mt-4 text-center">
        <h3> Update CRM  </h3>
    </div>
</div>

<div class="card">
  <div class="card-deck mt-4 mb-4">
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
            <a href="{{ route('detail.crm') }}" class="btn btn-secondary btn-icon-split mr-3">
              <span class="icon text-white-50">
                  <i class="fas fa-arrow-left"></i>
              </span>
              <span class="text">Cancel Update CRM</span>
            </a>
            <a href="{{ route('crm') }}" class="btn btn-success btn-icon-split">
              <span class="icon text-white-50">
                  <i class="fas fa-check"></i>
              </span>
              <span class="text">Simpan Update CRM</span>
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