@extends('layouts.app')

@section('plugin-css')
<link rel="stylesheet" href="{{ url('/') }}/assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="{{ url('/') }}/assets/js/plugins/flatpickr/flatpickr.min.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-maxlength/1.7.0/bootstrap-maxlength.min.js"></script>
@endsection

@section('main-content')
    <h2 class="content-heading">Tambah Santri</h2>
    <div class="row">
        <div class="col-md-8 col-sm-12">
            <div class="block" id="js-wizard-validation-classic ">
                <ul class="nav nav-tabs nav-tabs-block nav-fill" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#data-santri" data-toggle="tab">1. DATA SANTRI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#data-ortu" data-toggle="tab">2. DATA ORANG TUA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#data-wali" data-toggle="tab">3. DATA WALI</a>
                    </li>
                </ul>
                <form class="js-wizard-validation-classic-form" action="{{ route('simpan-santri') }}" method="post" novalidate="validate">
                    @csrf
                    <div class="block-content block-content-full tab-content" style="min-height: 265px;">
                        <div class="tab-pane active" id="data-santri" role="tabpanel">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nama-lengkap-santri">Nama Lengkap</label>
                                    <input maxlength="10" required type="text" class="form-control isMaxLength" id="nama-lengkap-santri" name="nama-lengkap-santri" placeholder="Masukan Nama Lengkap">    
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
                        <div class="tab-pane" id="data-ortu" role="tabpanel">
                            <h5>DATA AYAH</h5>
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

                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pekerjaan-ayah">Pendidikan Ayah</label>
                                        <input type="text" class="form-control" id="pendidikan-ayah" name="pendidikan-ayah" placeholder="Pendidikan Terahir Ayah" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pekerjaan-ayah">Pekerjaan Ayah</label>
                                        <input type="text" class="form-control" id="pekerjaan-ayah" name="pekerjaan-ayah" placeholder="Pendidikan Terahir Ayah" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="penghasilan-ayah">Penghasilan Ayah</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    Rp
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" id="penghasilan-ayah" name="penghasilan-ayah" placeholder="Penghasilan">
                                            <div class="input-group-append">
                                                <span class="input-group-text">/bulan</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="telepon-ayah">No. Telepon Ayah</label>
                                        <input type="text" class="form-control" id="telepon-ayah" name="telepon-ayah" placeholder="Masukan Telepon Ayah" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="email-ayah">Email Ayah</label>
                                        <input type="email" id="email-ayah" class="form-control" name="email-ayah" placeholder="Masukan Email Ayah" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="keterangan-ayah">Keterangan</label>
                                        <select class="form-control" id="keterangan-ayah" required name="keterangan-ayah">
                                            <option value="">Pilih Keterangan</option>
                                            <option value="Masih Hidup">Masih Hidup</option>
                                            <option value="Meninggal">Meninggal</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <h5 class="mt-3">DATA IBU</h5>
                            <div class="form-group">
                                <label for="nama-ibu">Nama Ibu</label>
                                <input type="text" class="form-control" id="nama-ibu" name="nama-ibu" required placeholder="Masukan Nama Ibu">
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tempat-lahir-ibu">Tempat Lahir</label>
                                        <input type="text" class="form-control" id="tempat-lahir-ibu" name="tempat-lahir-ibu" required placeholder="Tempat Lahir Ibu">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tanggal-lahir-ibu">Tanggal Lahir Ibu</label>
                                        <input required type="text" class="js-flatpickr form-control bg-white" id="tanggal-lahir-ibu" name="tanggal-lahir-ibu" placeholder="Pilih Tanggal Lahir" data-date-format="d-m-Y">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pekerjaan-ibu">Pendidikan Ibu</label>
                                        <input type="text" class="form-control" id="pendidikan-ibu" name="pendidikan-ibu" placeholder="Pendidikan Terahir ibu" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pekerjaan-ibu">Pekerjaan Ibu</label>
                                        <input type="text" class="form-control" id="pekerjaan-ibu" name="pekerjaan-ibu" placeholder="Pendidikan Terahir Ibu" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="penghasilan-ibu">Penghasilan Ibu</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    Rp
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" id="penghasilan-ibu" name="penghasilan-ibu" placeholder="Penghasilan">
                                            <div class="input-group-append">
                                                <span class="input-group-text">/bulan</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="telepon-ibu">No. Telepon Ibu</label>
                                        <input type="text" class="form-control" id="telepon-ibu" name="telepon-ibu" placeholder="Masukan Telepon Ibu" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="email-ibu">Email Ibu</label>
                                        <input type="email" id="email-ibu" class="form-control" name="email-ibu" placeholder="Masukan Email Ibu" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="keterangan-ibu">Keterangan</label>
                                        <select class="form-control" id="keterangan-ibu" required name="keterangan-ibu">
                                            <option value="">Pilih Keterangan</option>
                                            <option value="Masih Hidup">Masih Hidup</option>
                                            <option value="Meninggal">Meninggal</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <h5 class="mt-3">ALAMAT ORANG TUA</h5>
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="provinsi-ortu">Provinsi Orang Tua</label>
                                        <select class="form-control" id="provinsi-ortu" name="provinsi-ortu" >
                                            <option value="">Pilih Provinsi</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="kabupaten-ortu">Kabupaten Orang Tua</label>
                                        <select class="form-control" id="kabupaten-ortu" name="kabupaten-ortu">
                                            <option value="">Pilih Kabupaten</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="kecamatan-ortu">Kecamatan Orang Tua</label>
                                        <select class="form-control" id="kecamatan-ortu" name="kecamatan-ortu">
                                            <option value="">Pilih Kecamatan</option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="kelurahan-ortu">Desa Orang Tua</label>
                                        <select class="form-control" id="kelurahan-ortu" name="kelurahan-ortu">
                                            <option value="">Pilih Kelurahan</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="dusun-ortu">Dusun Orang Tua</label>
                                        <input type="text" class="form-control" id="dusun-ortu" name="dusun-ortu">
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="rt-ortu">RT Orang Tua</label>
                                        <input type="text" class="form-control" id="rt-ortu" name="rt-ortu">
                                    </div>
                                </div>

                                 <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="rw-ortu">RW Orang Tua</label>
                                        <input type="text" class="form-control" id="rw-ortu" name="rw-ortu">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="alamat-jalan">Alamat Jalan</label>
                                <textarea required class="form-control" id="alamat-jalan" name="alamat-jalan" rows="6" placeholder="Masukan Alamat Sesuai Di KTP"></textarea>
                            </div>
                        </div>

                        {{-- Form Data wali --}}
                        <div class="tab-pane" id="data-wali" role="tabpanel">
                            <h5 class="mt-3">DATA WALI</h5>
                            <div class="form-group">
                                <label for="nama-wali">Nama Wali</label>
                                <input type="text" class="form-control" id="nama-wali" name="nama-wali" required placeholder="Masukan Nama wali">
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tempat-lahir-wali">Tempat Lahir</label>
                                        <input type="text" class="form-control" id="tempat-lahir-wali" name="tempat-lahir-wali" required placeholder="Tempat Lahir wali">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tanggal-lahir-wali">Tanggal Lahir Wali</label>
                                        <input required type="text" class="js-flatpickr form-control bg-white" id="tanggal-lahir-wali" name="tanggal-lahir-wali" placeholder="Pilih Tanggal Lahir" data-date-format="d-m-Y">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pekerjaan-wali">Pendidikan Wali</label>
                                        <input type="text" class="form-control" id="pendidikan-wali" name="pendidikan-wali" placeholder="Pendidikan Terahir wali" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pekerjaan-wali">Pekerjaan Wali</label>
                                        <input type="text" class="form-control" id="pekerjaan-wali" name="pekerjaan-wali" placeholder="Pendidikan Terahir wali" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="penghasilan-wali">Penghasilan Wali</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    Rp
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" id="penghasilan-wali" name="penghasilan-wali" placeholder="Penghasilan">
                                            <div class="input-group-append">
                                                <span class="input-group-text">/bulan</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="telepon-wali">No. Telepon Wali</label>
                                        <input type="text" class="form-control" id="telepon-wali" name="telepon-wali" placeholder="Masukan Telepon wali" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="email-wali">Email Wali</label>
                                        <input type="email" id="email-wali" class="form-control" name="email-wali" placeholder="Masukan Email wali" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="keterangan-wali">Keterangan</label>
                                        <select class="form-control" id="keterangan-wali" required name="keterangan-wali">
                                            <option value="">Pilih Keterangan</option>
                                            <option value="Masih Hidup">Masih Hidup</option>
                                            <option value="Meninggal">Meninggal</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <h5 class="mt-3">ALAMAT WALI</h5>
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="provinsi-wali">Wali</label>
                                        <select class="form-control" id="provinsi-wali" name="provinsi-wali">
                                            <option value="">Pilih Provinsi</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="kabupaten-wali">Kabupaten Wali</label>
                                        <select class="form-control" id="kabupaten-wali" name="kabupaten-wali">
                                            <option value="">Pilih Kabupaten</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="kecamatan-wali">Kecamatan Wali</label>
                                        <select class="form-control" id="kecamatan-wali" name="kecamatan-wali">
                                            <option value="">Pilih Kecamatan</option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="kelurahan-wali">Desa Wali</label>
                                        <select class="form-control" id="kelurahan-wali" name="kelurahan-wali">
                                            <option value="">Pilih Kecamatan</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="kelurahan-wali">Dusun Wali</label>
                                        <input type="text" class="form-control" id="kelurahan-wali" name="kelurahan-wali">
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="rt-wali">RT Wali</label>
                                        <input type="text" class="form-control" id="rt-wali" name="rt-wali">
                                    </div>
                                </div>

                                 <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="rw-wali">RW Wali</label>
                                        <input type="text" class="form-control" id="rw-wali" name="rw-wali">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="alamat-jalan">Alamat Jalan</label>
                                <textarea required class="form-control" id="alamat-jalan" name="alamat-jalan" rows="6" placeholder="Masukan Alamat Sesuai Di KTP"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="block-content block-content-sm  block-content-full bg-body-light">
                        <div class="row m-3">
                            <div class="col-6">
                                <button type="button" class="btn btn-alt-primary min-width-125 js-click-ripple-enabled" data-toggle="click-ripple" data-wizard="prev">
                                    <i class="fa fa-angle-left mr-5"></i> Sebelumnya
                                </button>
                            </div>
                            <div class="col-6 text-right">
                                <button type="button" class="btn btn-alt-primary min-width-125 js-click-ripple-enabled" data-toggle="click-ripple" data-wizard="next">
                                    Selanjutnya <i class="fa fa-angle-right ml-5"></i>
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
        <div class="col-md-4 col-sm-12">
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
<script src="{{ url('/') }}/assets/js/creative.js"></script>
<script src="{{ url('/') }}/assets/js/bootstrap-maxlength.js"></script>
<script>
    jQuery(function(){
        Codebase.helpers('datepicker');
    });

    $('.isMaxLength').maxlength({
        alwaysShow: true,
        threshold: 10,
        warningClass: "label label-success",
        limitReachedClass: "label label-warning",
        placement: 'bottom',
        preText: 'digunakan  ',
        separator: ' dara ',
        postText: ' karakter.'
    });
</script>

{{-- <script src="https://api.iksgroup.co.id/apijs/lokasiapi.js"></script>
<script>
var render=createwidgetlokasi("provinsi","kabupaten","kecamatan","kelurahan");
</script> --}}

<script>
    jQuery(function(){
        Codebase.helpers('flatpickr');
    });
</script>
@endsection