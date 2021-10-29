@extends('layout.backend.app',[
	'title' => 'Add Eod',
])
@section('content')

<div class="card mb-4">
  <div class=" mb-4 mt-4 text-center">
      <h3> Tambah EOD  </h3>
  </div>
</div>

<div class="card">
  <div class="card-deck mt-4 mb-4">
    <form action="{{route('eod.store')}}" method="post" class="form-row">
    @csrf
      <div class="card ml-5 mr-5 col-lg-3">
          <div class="card-body ">
            <div class="border-bottom-danger">
              <div class="ml-4 mt-2 mb-4 mt-4 text-center">
                  <h3> TANGGAL </h3>
              </div>
            </div>
            <div class="text-center mt-4 mb-4 mr-4 ml-4">
                <input type="date" class="form-control datepicker" style="align-items: center" id="pada_tanggal" name="published_at">
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
            <div class="mt-4">
              <textarea id="summernote" name="attention"></textarea>
            </div>
            <a href="{{ route('eod') }}" class="btn btn-secondary btn-icon-split mt-3 ml-3">
              <span class="icon text-white-50">
                  <i class="fas fa-arrow-left"></i>
              </span>
              <span class="text">Cancel</span>
            </a>
            <button class="btn btn-success btn-icon-split mt-3 ml-2">
              <span class="icon text-white-50">
                  <i class="fas fa-check"></i>
              </span>
              <span class="text">Simpan EOD</span>
            </button>
          </div>
      </div>
    </form>
</div>
</div>

@endsection

@push('js')
<script src="{{ asset('template/backend/sb-admin-2') }}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('template/backend/sb-admin-2') }}/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('template/backend/sb-admin-2') }}/js/demo/datatables-demo.js"></script>

<script>
  $('#summernote').summernote({
    placeholder: '',
    tabsize: 2,
    height: 500,
    toolbar: [
        [ 'style', [ 'style' ] ],
        [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
        [ 'fontname', [ 'fontname' ] ],
        [ 'fontsize', [ 'fontsize' ] ],
        [ 'color', [ 'color' ] ],
        [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
        [ 'table', [ 'table' ] ],
        [ 'insert', [ 'link'] ],
        [ 'view', [ 'undo', 'redo', 'fullscreen', 'codeview', 'help' ] ]
    ]
  });
</script>
@endpush