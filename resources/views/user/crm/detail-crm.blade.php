@extends('layout.backend.app',[
'title' => 'Add Crm',
])
@section('content')

    <div class="card mb-4">
        <div class=" mb-4 mt-4 ml-4">
            <h3 class="ml-4"><b> Edit CRM </h3>
        </div>
    </div>

    <div class="card">
        <div class="card-deck mt-4 mb-4">
            <form action="{{ route('crm.update', $crm->id) }}" method="POST" class="form-row">
                @csrf
                @method('PUT')
                <div class="card ml-5 mr-5 col-lg-3">
                    <div class="card-body ">
                        <div class="border-bottom-danger">
                            <div class="mt-2 mb-1 mt-4 text-center">
                                <h3> TANGGAL </h3>
                            </div>
                        </div>
                        <div class="text-center mb-4 mr-4 ml-4">
                            <select name="date" class="form-control" required>
                                @for ($i = 1; $i <= 31; $i++)
                                    <option value="{{ $i }}" {{$crm->date == $i ? 'selected' : ''}}>{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                </div>

                <div class="card ml-5 mr-5">
                    <div class="card-body">
                        <div class="border-bottom-danger">
                            <div class="mt-2 mt-3 text-left ml-3">
                                <h3>JUDUL</h3>
                            </div>
                        </div>
                        <div class="text-center mb-1 mr-4 ml-3">
                            <input type="text" class="form-control" name="title" required>
                        </div>
                        <div class="border-bottom-danger">
                            <div class="ml-3 mt-1 mb-2 mt-3 text-left">
                                <h3> KONTEN CRM </h3>
                            </div>
                        </div>
                        <form class="mt-4">
                            <textarea id="summernote" name="description" required>{{$crm->description}}</textarea>
                        </form>
                        <a href="{{ route('crm.index') }}" class="btn btn-secondary btn-icon-split mt-3 ml-3">
                            <span class="icon text-white-50">
                                <i class="fas fa-arrow-left"></i>
                            </span>
                            <span class="text">Cancel</span>
                        </a>
                        <button class="btn btn-success btn-icon-split mt-3 ml-2">
                            <span class="icon text-white-50">
                                <i class="fas fa-check"></i>
                            </span>
                            <span class="text">Simpan CRM</span>
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

    <script type="text/javascript">
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 400,
                tabsize: 2,
                height: 500,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript',
                        'subscript', 'clear'
                    ]],
                    ['fontname', ['fontname']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ol', 'ul', 'paragraph', 'height']],
                    ['table', ['table']],
                    ['insert', ['link']],
                    ['view', ['undo', 'redo', 'fullscreen', 'codeview', 'help']]
                ]
            });
        })


        // $('#summernote').summernote({
        //   placeholder: 'MAUNULIS APANIIII',
        //   tabsize: 2,
        //   height: 500,
        // });
    </script>
@endpush
