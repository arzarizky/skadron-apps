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
              {{$eod->created_at->format('d/m/Y')}} oleh Admin
            </p>
            <hr class="my-4">
            <p>
              EOD diupdate pada tanggal 
              {{$eod->updated_at->format('d/m/Y')}} oleh Admin
            </p>
          </div>
        </div>
    </div>

    <div class="card ml-5 mr-5">
        <div class="card-body">
          <form action="{{route('update.eod', $eod->id)}}" method="POST">
          @method('PUT')
          @csrf
            <div class="border-bottom-danger">
              <div class="ml-4 mt-2 mb-4 mt-4 text-center">
                  <h3> ATTENTION </h3>
              </div>
            </div>
            <div class="mt-4">
              <textarea id="summernote" name="attention">{{$eod->attention}}</textarea>
            </div>
            <div class="mt-4 ml-2">
              <a href="{{ route('eod') }}" class="btn btn-secondary btn-icon-split mr-3">
                <span class="icon text-white-50">
                    <i class="fas fa-arrow-left"></i>
                </span>
                <span class="text">Kembali</span>
              </a>
              <button href="{{ route('update.eod', $eod->id) }}" class="btn btn-warning btn-icon-split mr-3">
                <span class="icon text-white-50">
                    <i class="fas fa-exclamation-triangle"></i>
                </span>
                <span class="text">Update EOD</span>
              </button>
            </div>
          </form>
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

<script type="text/javascript">
    var padatanggal = document.getElementById('pada_tanggal');

    function tanggal() {
      var hasiltanggal = document.getElementById('hasil_tanggal');
      hasiltanggal.textContent = padatanggal.value;
    }

</script>
@endpush