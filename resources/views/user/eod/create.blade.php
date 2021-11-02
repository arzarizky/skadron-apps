@extends('layout.backend.app',[
'title' => 'Tambah Eod',
])

@section('content')
    <div class="card mb-4">
        <div class=" mb-4 mt-4 text-center">
            <h3> Tambah EOD </h3>
        </div>
    </div>

    <div class="card">
        <div class="card-deck mt-4 mb-4">
            <div class="card ml-5 mr-5 col-md-12">
                <div class="card-body">
                    <form method="POST" action="{{route('eod.store')}}" enctype="multipart/form-data">
					@csrf
                        <div class="row">
                            <div class="col-md-2">
                                <label>Tanggal</label>
                                <select name="date" class="form-control" required>
                                    @for ($i = 1; $i <= 31; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label>Judul</label>
                                <input type="text" class="form-control" name="title" required>
                            </div>
                            <div class="col-md-4">
                                <label>File PDF</label>
                                <input type="file" name="file" class="form-control" required>
                            </div>
                            <div class="col-md-2 d-flex flex-row">
                                <button class="btn btn-success btn-icon-split mt-auto">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-check"></i>
                                    </span>
                                    <span class="text">Simpan</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
