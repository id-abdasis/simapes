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

@section('main-content')
    <h2 class="content-heading">Tambah Pegawai</h2>
    <div class="col-md-6">
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Formulir Penambahan Pegawai SIMAPES</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option">
                        <i class="si si-users"></i>
                    </button>
                </div>
            </div>
            <div class="block-content">
                <form action="be_forms_elements_bootstrap.php" method="post" onsubmit="return false;">
                    <div class="form-group">
                        <label for="calon-nasabah">Nama Pegawai</label>
                        <input type="text" class="form-control isMaxLength" id="nama-pegawai" name="nama_pegawai" maxlength="100" placeholder="Masukan Nama Pegawai">
                        <small class="text-mutted">Nama pegawai sesuai dengan kartu Santri</small>
                    </div>

                    <div class="form-group">
                        <label for="calon-nasabah">Nama Pegawai</label>
                        <input type="text" class="form-control isMaxLength telepon" id="nama-pegawai" name="telepon_pegawai" maxlength="15" placeholder="Masukan No. Telepon Pegawai">
                        <small class="text-mutted">Nomor Telepon Kalau bisa yang tertaut dengan WhatsApp</small>
                    </div>

                    .form-group
                    <div class="form-group">
                        <button type="submit" class="btn btn-alt-primary mr-5 mb-5 btn-block"> <i class="fa fa-user-plus mr-5"></i> Daftarkan Sekarang</button>
                    </div>
                </form>
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
<!-- Page JS Code -->
<script src="{{ url('/') }}/assets/js/pages/be_forms_plugins.min.js"></script>
<script>jQuery(function(){ Codebase.helpers(['flatpickr', 'datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']); });</script>

@endsection