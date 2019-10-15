@extends('layouts.app')

@section('plugin-css')
<link rel="stylesheet" href="{{ url('/') }}/assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="{{ url('/') }}/assets/js/plugins/flatpickr/flatpickr.min.css">
@endsection

@section('main-content')
    <h2 class="content-heading">Tambah Santri</h2>
    <div class="row">
        <div class="col-md-8">
            <div class="js-wizard-validation-classic block">
                <ul class="nav nav-tabs nav-tabs-block nav-fill" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#wizard-validation-classic-step1" data-toggle="tab">1. Data Santri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#wizard-validation-classic-step2" data-toggle="tab">2. Data Orang Tua</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#wizard-validation-classic-step3" data-toggle="tab">3. Data Wali</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#wizard-validation-classic-step3" data-toggle="tab">4. Kesehatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#wizard-validation-classic-step3" data-toggle="tab">5. Lampiran</a>
                    </li>
                </ul>
                <form class="js-wizard-validation-classic-form" action="#" method="post" novalidate="novalidate">
                    <div class="block-content block-content-full tab-content" style="min-height: 265px;">
                        <div class="tab-pane active" id="wizard-validation-classic-step1" role="tabpanel">
                            <div class="form-group">
                                <label for="nama-lengkap-santri">Nama Lengkap</label>
                                <input required type="text" class="form-control" id="nama-lengkap-santri" name="nama-lengkap-santri" placeholder="Enter a username..">                            </div>
                            <div class="form-row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="tempat-lahir-santri">Tempat Lahir</label>
                                        <input required class="form-control" type="text" id="tempat-lahir-santri" name="tempat-lahir-santri">
                                    </div>
                                </div>

                                <div class="form-group col-lg-4">
                                    <label for="tanggal-lahir-santri">Tanggal Lahir</label>
                                    <input required type="text" class="js-flatpickr form-control bg-white" id="tanggal-lahir-santri" name="tanggal-lahir-santri" placeholder="Pilih Tanggal Lahir" data-date-format="d-m-Y">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <div>
                                    <div class="custom-control custom-radio custom-control-inline mb-5">
                                        <input required class="custom-control-input" type="radio" name="jenis-kelamin-siswa" id="perempuan" value="Perempuan">
                                        <label class="custom-control-label" for="perempuan">Perempuan</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline mb-5">
                                        <input required class="custom-control-input" type="radio" name="jenis-kelamin-siswa" id="laki-laki" value="Laki-Laki">
                                        <label class="custom-control-label" for="laki-laki">Laki-laki</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Form Orang Tua --}}
                        <div class="tab-pane" id="wizard-validation-classic-step2" role="tabpanel">
                            <div class="form-group">
                                <label for="wizard-validation-classic-biodata">Bio</label>
                                <textarea class="form-control" id="wizard-validation-classic-biodata" name="wizard-validation-classic-biodata" rows="9"></textarea>
                            </div>
                        </div>
                        <div class="tab-pane" id="wizard-validation-classic-step3" role="tabpanel">
                            <div class="form-group">
                                <label for="wizard-validation-classic-location">Location</label>
                                <input class="form-control" type="text" id="wizard-validation-classic-location" name="wizard-validation-classic-location">
                            </div>
                            <div class="form-group">
                                <label for="wizard-validation-classic-skills">Skills</label>
                                <select class="form-control" id="wizard-validation-classic-skills" name="wizard-validation-classic-skills" size="1">
                                    <option value="">Please select your best skill</option>
                                    <option value="1">Photoshop</option>
                                    <option value="2">HTML</option>
                                    <option value="3">CSS</option>
                                    <option value="4">JavaScript</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="css-control css-control-primary css-switch" for="wizard-validation-classic-terms">
                                    <input type="checkbox" class="css-control-input" id="wizard-validation-classic-terms" name="wizard-validation-classic-terms">
                                    <span class="css-control-indicator"></span> Agree with the terms
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="block-content block-content-sm block-content-full bg-body-light">
                        <div class="row">
                            <div class="col-6">
                                <button type="button" class="btn btn-alt-secondary disabled" data-wizard="prev">
                                    <i class="fa fa-angle-left mr-5"></i> Previous
                                </button>
                            </div>
                            <div class="col-6 text-right">
                                <button type="button" class="btn btn-alt-secondary" data-wizard="next">
                                    Next <i class="fa fa-angle-right ml-5"></i>
                                </button>
                                <button type="submit" class="btn btn-alt-primary d-none" data-wizard="finish">
                                    <i class="fa fa-check mr-5"></i> Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Bantuan</h3>
                </div>
                <div class="block-content">
                    <ol>
                        <li>Isi Semua Field Sesuai Data Santri</li>
                        <li>Jika sudah terisi semua silahkan tekan Next</li>
                        <li>Jika Bertanda Merah Silahkan Perbaiki Sesuai dengan Pesan Kesalahan</li>
                        <li>Field Bertanda Bintang Harus Diisi</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('plugin-js')
<script src="{{ url('/') }}/assets/js/plugins/select2/js/select2.full.min.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/jquery-validation/additional-methods.js"></script>
<script>jQuery(function(){ Codebase.helpers('select2'); }); </script>
<script src="{{ url('/') }}/assets/js/pages/be_forms_validation.min.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/jquery-validation/additional-methods.js"></script>
<script src="{{ url('/') }}/assets/js/pages/be_forms_wizard.min.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/flatpickr/flatpickr.min.js"></script>
<script>
    jQuery(function(){
        Codebase.helpers('datepicker');
    });
</script>

<script>
    jQuery(function(){
        Codebase.helpers('flatpickr');
    });
</script>
@endsection