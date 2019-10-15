@extends('layouts.app')

@section('plugin-css')
<link rel="stylesheet" href="{{ url('/') }}/assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="{{ url('/') }}/assets/js/plugins/flatpickr/flatpickr.min.css">
@endsection

@section('main-content')
    <h2 class="content-heading">Tambah Santri</h2>
    <div class="row">
        <div class="col-md-8">
            <div class="block">
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
                <form class="js-wizard-validation-classic-form" action="#" method="post" novalidate="validate">
                    <div class="block-content block-content-full tab-content" style="min-height: 265px;">
                        <div class="tab-pane active" id="wizard-validation-classic-step1" role="tabpanel">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nama-lengkap-santri">Nama Lengkap</label>
                                    <input required type="text" class="form-control" id="nama-lengkap-santri" name="nama-lengkap-santri" placeholder="Masukan Nama Lengkap">    
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="nama-panggilan-santri">Nama Panggilan</label>
                                    <input required type="text" class="form-control" id="nama-panggilan-santri" name="nama-panggilan-santri" placeholder="Masukan Nama Panggilan">    
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tempat-lahir-santri">Tempat Lahir</label>
                                        <input required class="form-control" type="text" id="tempat-lahir-santri" name="tempat-lahir-santri" placeholder="Masukan Tempat Lahir">
                                    </div>
                                </div>

                                <div class="form-group col-lg-3">
                                    <label for="tanggal-lahir-santri">Tanggal Lahir</label>
                                    <input required type="text" class="js-flatpickr form-control bg-white" id="tanggal-lahir-santri" name="tanggal-lahir-santri" placeholder="Pilih Tanggal Lahir" data-date-format="d-m-Y">
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="jenis-kelamin-santri">Jenis Kelamin</label>
                                    <select required class="form-control" id="jenis-kelamin-santri" name="jenis-kelamin-santri">
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="Perempuan">Perempuan</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="alamat-santri">Alamat Lengkap</label>
                                <div>
                                    <textarea required class="form-control" id="alamat-santri" name="alamat-santri" rows="6" placeholder="Masukan Alamat Sesuai Di KTP"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="no-telepon-siswa">No Telepon</label>
                                <input required class="form-control" type="text" id="no-telepon-siswa" name="no-telepon-siswa" placeholder="Masukan Nomor Telepon">
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jarak-kepondok">Jarak Dari Rumah ke Nurul Amanah</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="jarak-kepondok" name="jarak-kepondok" placeholder="Jarak Tempuh ke Nurul Amanah">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    Km
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="berat-badan">Berat Badan</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="berat-badan" name="berat-badan" placeholder="Berat Badan">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    Kg
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                 <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="tinggi-badan">Tinggi Badan</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="tinggi-badan" name="tinggi-badan" placeholder="Tinggi Badan">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    Cm
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="golongan-darah-santri">Golongan Darah</label>
                                        <select class="form-control" id="golongan-darah-santri" name="golongan-darah-santri">
                                            <option value="">Pilih Golongan Darah</option>
                                            <option value="A">Golongan A</option>
                                            <option value="B">Golongan B</option>
                                            <option value="AB">Golongan AB</option>
                                            <option value="O">Golongan O</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="kewarganegaraan-santri">Kewarganegaraan</label>
                                        <select class="form-control" id="kewarganegaraan-santri" name="kewarganegaraan-santri">
                                            <option value="">Pilih Kewarganegaraan</option>
                                            <option value="WNI">WNI</option>
                                            <option value="WNA">WNA</option>
                                        </select>
                                    </div>
                                </div>

                                 <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="anak-ke">Anak Ke</label>
                                        <input type="text" id="anak-ke" name="anak-ke" class="form-control" placeholder="Anak ke">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="jumlah-saudara">Jumlah Saudara</label>
                                        <input type="text" name="jumlah-saudara" id="jumlah-saudara" class="form-control" placeholder="Jumlah Saudara">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tinggal-bersama">Tinggal Bersama</label>
                                        <select class="form-control" id="tinggal-bersama" name="tinggal-bersama">
                                            <option value="">Pilih Keluarga</option>
                                            <option value="Orang Tua">Orang Tua</option>
                                            <option value="Wali">Wali</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="asal-sekolah">Asal Sekolah</label>
                                        <select class="form-control" id="asal-sekolah" name="asal-sekolah">
                                            <option value="">Pilih Asal Sekolah</option>
                                            <option value="SD">SD</option>
                                            <option value="MD">MD</option>
                                            <option value="Pondok Pesantren">Pondok Pesantren</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="nama-sekolah">Nama Sekolah</label>
                                      <input class="form-control" type="text" placeholder="Masukan Nama Sekolah Asal" id="nama-sekolah" name="nama-sekolah">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="alamat-sekolah">Alamat Sekolah</label>
                                      <input class="form-control" type="text" placeholder="Masukan Alamat Sekolah Asal" id="alamat-sekolah" name="alamat-sekolah">
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="tahun-masuk">Tahun Masuk</label>
                                      <input class="form-control" type="text" placeholder="Tahun Masuk" id="tahun-masuk" name="tahun-masuk">
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        {{-- Form Orang Tua --}}
                        <div class="tab-pane" id="wizard-validation-classic-step2" role="tabpanel">
                            <h5>Data Ayah</h5>
                            <div class="form-group">
                                <label for="nama-ayah">Nama Ayah</label>
                                <input type="text" class="form-control" id="nama-ayah" name="nama-ayah" required placeholder="Masukan Nama Ayah">
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tempat-lahir-ayah">Tempat Lahir</label>
                                        <input type="text" class="form-control" id="tempat-lahir-ayah" name="tempat-lahir-ayah" required placeholder="Tempat Lahir Ayah">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tanggal-lahir-ayah">Tanggal Lahir Ayah</label>
                                        <input required type="text" class="js-flatpickr form-control bg-white" id="tanggal-lahir-ayah" name="tanggal-lahir-ayah" placeholder="Pilih Tanggal Lahir" data-date-format="d-m-Y">
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Form Data Wali --}}
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