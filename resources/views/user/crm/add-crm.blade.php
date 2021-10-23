@extends('layout.backend.app',[
	'title' => 'Add Crm',
])
@section('content')

<div class="card mb-4">
  <div class=" mb-4 mt-4 text-center">
      <h3> Tambah CRM  </h3>
  </div>
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
              <input type="date" class="form-control datepicker" style="align-items: center" id="pada_tanggal">
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
          <a href="{{ route('crm') }}" class="btn btn-secondary btn-icon-split mt-3 ml-3">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Cancel</span>
          </a>
          <a href="{{ route('crm') }}" class="btn btn-success btn-icon-split mt-3 ml-2">
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
    height: 500,
  });
</script>
@endpush