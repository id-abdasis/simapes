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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
                <form action="{{ route('store-pegawai') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama-pegawai">Nama Pegawai</label>
                        <input type="text" class="form-control isMaxLength" id="nama-pegawai" name="nama_pegawai" maxlength="100" placeholder="Masukan Nama Pegawai">
                        <small class="text-mutted">Nama pegawai sesuai dengan kartu Santri</small>
                    </div>

                    <div class="form-group">
                            <label for="email-pegawai">Email Pegawai</label>
                            <input type="email" class="form-control isMaxLength" id="email-pegawai" name="email_pegawai" maxlength="100" placeholder="Masukan Email Pegawai">
                        </div>

                    <div class="form-group">
                        <label for="telepon-pegawai">Telepon Pegawai</label>
                        <input type="text" class="form-control isMaxLength" id="telepon-pegawai" name="telepon_pegawai" maxlength="15" placeholder="Masukan No. Telepon Pegawai">
                        <small class="text-mutted">Nomor Telepon Kalau bisa yang tertaut dengan WhatsApp</small>
                    </div>

                    <div class="form-group">
                        <label for="alamat-pegawai">Alamat Pegawai</label>
                        <textarea class="form-control" name="alamat_pegawai" id="alamat-pegawai" cols="30" rows="5" placeholder="Masukan Alamat Lengkap Karyawan"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Jabatan Pegawai</label>
                        <select class="form-control" id="jabatan   " name="jabatan">
                            <option value="0">-- Jabatan Pegawai --</option>
                            <option value="Pegawai e-Bank">Pegawai e-Bank</option>
                            <option value="Pegawai e-Mart">Pegawai e-Mart</option>
                            <option value="Pegawai Perpus">Pegawai Perpus</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tanggal-masuk">Tanggal Masuk</label>
                        <input type="text" class="js-flatpickr form-control bg-white" id="tanggal-masuk" name="tanggal_masuk" placeholder="Pilih Tanggal Masuk" data-date-format="d-m-Y">
                    </div>

                    <div class="form-group">
                        <label for="avatar-pegawai">Avatar Pegawai</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input js-custom-file-input-enabled" id="avatar-pegawai" name="avatar-pegawai" data-toggle="custom-file-input">
                            <label class="custom-file-label" for="example-file-input-custom">Choose file</label>
                        </div>
                    </div>
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