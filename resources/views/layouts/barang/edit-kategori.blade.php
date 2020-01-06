@extends('layouts.app')
@section('plugin-css')
<link rel="stylesheet" href="{{ url('/') }}/assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="{{ url('/') }}/assets/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
<link rel="stylesheet" href="{{ url('/') }}/assets/js/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="{{ url('/') }}/assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.css">
<link rel="stylesheet" href="{{ url('/') }}/assets/js/plugins/jquery-auto-complete/jquery.auto-complete.min.css">
<link rel="stylesheet" href="{{ url('/') }}/assets/js/plugins/ion-rangeslider/css/ion.rangeSlider.css">
<link rel="stylesheet" href="{{ url('/') }}/assets/js/plugins/dropzonejs/dist/dropzone.css">
<link rel="stylesheet" href="{{ url('/') }}/assets/js/plugins/flatpickr/flatpickr.min.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ url('/') }}/assets/js/plugins/datatables/dataTables.bootstrap4.css">
@endsection

@section('title')
    Tambah Kategori
@endsection
@section('main-content')
    <h2 class="content-heading">Tambah Kategori Barang</h2>
    <div class="col-md-5">
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Formulir Penambahan Kategori Barang</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option">
                        <i class="si si-users"></i>
                    </button>
                </div>
            </div>
            <div class="block-content">
                <form action="{{ route('pertokoan.update-kategori') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="kode_kategori">Kode Kategori</label>
                        <input type="text" class="form-control" name="kode_kategori" value="{{ $kategori->kode_kategori }}{{ old('kode_kategori') }}">
                    </div>
                    <div class="form-group">
                        <label for="nama_kategori">Nama Kategori </label>
                        <input value="{{ old('nama_kategori') }} {{ $kategori->nama_kategori }}" type="text" class="form-control isMaxLength" id="nis_nasabah" name="nama_kategori" placeholder="Masukan Nama Kategori" maxlength="100">
                    </div>

                    <div class="form-group">
                        <label for="diskripsi_kategori">Diskripsi Kategori </label>
                        <textarea name="diskripsi_kategori" id="" cols="30" rows="10" class="form-control">{{ $kategori->diskripsi_kategori }}</textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-alt-primary mr-5 mb-5 btn-block"> <i class="fa fa-save mr-5"></i> Update Kategori</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-7">
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Daftar Kategori <small>Terbaru</small></h3>
            </div>
            <div class="block-content block-content-full">
                <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                            <th class="text-center"></th>
                            <th>Kode Kategori</th>
                            <th>Nama Kategori</th>
                            <th>Keterangan</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kategoris as $key => $kategori)
                        <tr>
                            <td class="text-center">{{ $key+1 }}</td>
                            <td class="font-w600">{{ $kategori->kode_kategori }}</td>
                            <td class="d-none d-sm-table-cell">{{ $kategori->nama_kategori }}</td>
                            <td class="d-none d-sm-table-cell">
                                {{ $kategori->diskripsi_kategori }}
                            </td>
                            <td class="text-center">
                                

                                <a href="{{ route('pertokoan.hapus-kategori', $kategori->id) }}">
                                    <button type="button" class="btn btn-sm btn-alt-danger" data-toggle="tooltip" title="Hapus Kategori">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </a>
                                <a href="{{ route('pertokoan.edit-kategori', $kategori->id) }}">
                                    <button type="button" class="btn btn-sm btn-alt-info" data-toggle="tooltip" title="Edit Kategori">
                                        <i class="fa fa-pencil"></i>
                                    </button>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('plugin-js')
<script src="{{ url('/') }}/assets/js/plugins/pwstrength-bootstrap/pwstrength-bootstrap.min.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/select2/js/select2.full.min.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/jquery-auto-complete/jquery.auto-complete.min.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/masked-inputs/jquery.maskedinput.min.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/dropzonejs/dropzone.min.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/flatpickr/flatpickr.min.js"></script>
<script src="{{ url('/') }}/assets/js/creative.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Page JS Code -->
<script src="{{ url('/') }}/assets/js/pages/be_tables_datatables.min.js"></script>
<script src="{{ url('/') }}/assets/js/pages/be_forms_plugins.min.js"></script>
<script>jQuery(function(){ Codebase.helpers(['flatpickr', 'datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']); });</script>

@endsection