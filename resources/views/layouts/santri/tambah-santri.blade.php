@extends('layouts.app')

@section('plugin-css')
<link rel="stylesheet" href="{{ url('/') }}/assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="{{ url('/') }}/assets/js/plugins/flatpickr/flatpickr.min.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-maxlength/1.7.0/bootstrap-maxlength.min.js"></script>
@endsection

@section('main-content')
<div id="page-loader" class="show"></div>

<h2 class="content-heading">Tambah Santri</h2>
<div class="row animated zoomIn">
    <div class="col-md-8 col-sm-12 ">
        <div class="js-wizard-validation-classic block" id=" ">
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
            <form class="js-wizard-validation-classic-form" action="{{ route('simpan-santri') }}" method="post"
                novalidate="validate">
                @csrf
                <div class="block-content block-content-full tab-content" style="min-height: 265px;">
                    <div class="tab-pane active" id="data-santri" role="tabpanel">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nama-lengkap-santri">Nama Lengkap</label>
                                <input value="{{ old('nama_lengkap_santri') }}" maxlength="100" required type="text"
                                    class="form-control isMaxLength" id="nama-lengkap-santri" name="nama_lengkap_santri"
                                    placeholder="Masukan Nama Lengkap">
                                @foreach ($errors->get('nama_lengkap_santri') as $message)
                                    <small class="text-danger"><i class="fa fa-times-circle"> </i>{{ $message }}</small>
                                @endforeach
                            </div>
                            <div class="form-group col-md-6">
                                <label for="nama-panggilan-santri">Nama Panggilan</label>
                                <input value="{{ old('nama_panggilan_santri') }}" type="text"
                                    class="form-control isMaxLength" maxlength="50" id="nama-panggilan-santri"
                                    name="nama_panggilan_santri" placeholder=" Masukan Nama Panggilan">
                                @foreach ($errors->get('nama_panggilan_santri') as $message)
                                    <small class="text-danger"><i class="fa fa-times-circle"> </i>{{ $message }}</small>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tempat-lahir-santri">Tempat Lahir</label>
                                    <input required maxlength="100" value="{{ old('tempat_lahir_santri') }}"
                                        class="isMaxLength form-control" type="text" id="tempat-lahir-santri"
                                        name="tempat_lahir_santri" placeholder="Masukan Tempat Lahir">
                                </div>
                            </div>

                            <div class="form-group col-lg-3">
                                <label for="tanggal-lahir-santri">Tanggal Lahir</label>
                                <input value="{{ old('tanggal_lahir_santri') }}" required type="text"
                                    class=" js-flatpickr form-control bg-white" id="tanggal-lahir-santri"
                                    name="tanggal_lahir_santri" placeholder="Pilih Tanggal Lahir"
                                    data-date-format="d-m-Y">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="jenis-kelamin-santri">Jenis Kelamin</label>
                                <select required class="form-control" id="jenis-kelamin-santri"
                                    name="jenis_kelamin_santri">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="Perempuan"
                                        {{ old('jenis_kelamin_santri') == 'Perempuan' ? 'selected' : ''}}>Perempuan
                                    </option>
                                    <option value="Laki-Laki"
                                        {{ old('jenis_kelamin_santri') == 'Laki-Laki' ? 'selected' : ''}}>Laki-Laki
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="alamat-santri">Alamat Lengkap Calon Santri</label>
                            <div>
                                <textarea required maxlength="200" class="form-control isMaxLength" id="alamat-santri"
                                    name="alamat_santri" rows="6"
                                    placeholder="Masukan Alamat Sesuai Di KTP">{{ @old('alamat_santri') }}</textarea>
                            </div>
                            @foreach ($errors->get('alamat_santri') as $message)
                                <small class="text-danger"><i class="fa fa-times-circle"> </i>{{ $message }}</small>
                            @endforeach
                        </div>

                        <div class="form-group">
                            <label for="no-telepon-santri">No Telepon</label>
                            <input value="{{old('no_telepon_santri')}}" class="telepon isMaxLength form-control" type="text"
                                id="no-telepon-santri" name="no_telepon_santri" placeholder="Masukan Nomor Telepon">
                        </div>

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jarak-kepondok">Jarak Dari Rumah ke Nurul Amanah</label>
                                    <div class="input-group">
                                        <input maxlength="3" value="{{ old('jarak_kepondok') }}" type="text" class="isMaxLength form-control"
                                            id="jarak-kepondok" name="jarak_kepondok"
                                            placeholder="Jarak Tempuh ke Nurul Amanah">
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
                                        <input value="{{ old('berat_badan') }}" type="text"
                                            class="form-control isMax3 isMaxLength" maxlength="3" id="berat-badan"
                                            name="berat_badan" placeholder="Berat Badan">
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
                                        <input value="{{ old('tinggi_badan') }}" type="text"
                                            class="form-control isMax3 isMaxLength" maxlength="3" id="tinggi-badan"
                                            name="tinggi_badan" placeholder="Tinggi Badan">
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
                                    <select class="form-control" id="golongan-darah-santri"
                                        name="golongan_darah_santri">
                                        <option value="">Pilih Golongan Darah</option>
                                        <option value="A " {{ old('golongan_darah_santri') == 'A' ? 'selected' : '' }}>
                                            Golongan A</option>
                                        <option value="B" {{ old('golongan_darah_santri')  == 'B' ? 'selected' : '' }}>
                                            Golongan B</option>
                                        <option value="AB" {{ old('golongan_darah_santri')  == 'AB' ? 'selected' : ''}}>
                                            Golongan AB</option>
                                        <option value="O" {{ old('golongan_darah_santri') == 'O' ? 'selected' : '' }}>
                                            Golongan O</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="kewarganegaraan-santri">Kewarganegaraan</label>
                                    <select class="form-control" id="kewarganegaraan-santri"
                                        name="kewarganegaraan_santri">
                                        <option value="">Pilih Kewarganegaraan</option>
                                        <option value="WNI"
                                            {{ old('golongan_darah_santri')  == 'WNI' ? 'selected' : '' }}>WNI</option>
                                        <option value="WNA"
                                            {{ old('golongan_darah_santri')  == 'WNA' ? 'selected' : '' }}>WNA</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="anak-ke">Anak Ke</label>
                                    <input value="{{ old('anak_ke') }}" required type="text" id="anak-ke" name="anak_ke"
                                        class="form-control isMax3 isMaxLength" placeholder="Anak ke">
                                </div>
                                @foreach ($errors->get('anak_ke') as $message)
                                 <small class="text-danger"><i class="fa fa-times-circle"> </i>{{ $message }}</small>
                                @endforeach
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="jumlah-saudara">Jumlah Saudara</label>
                                    <input value="{{ old('jumlah_saudara') }}" required type="text"
                                        name="jumlah_saudara" id="jumlah-saudara" class="isMaxLength form-control isMax3"
                                        placeholder="Jumlah Saudara">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tinggal-bersama">Tinggal Bersama</label>
                                    <select required class="form-control" id="tinggal-bersama" name="tinggal_bersama">
                                        <option value="">Pilih Keluarga</option>
                                        <option value="Orang Tua"
                                            {{ old('tinggal_besama') == 'Orang Tua' ? 'selected' : '' }}>Orang Tua
                                        </option>
                                        <option value="Wali" {{ old('tinggal_besama') == 'Tua' ? 'selected' : '' }}>Wali
                                        </option>
                                        <option value="Lainnya"
                                            {{ old('tinggal_besama') == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                                    </select>
                                    @foreach ($errors->get('tinggal_bersama') as $message)
                                        <small class="text-danger"><i class="fa fa-times-circle"> </i>{{ $message }}</small>
                                    @endforeach
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="asal-sekolah">Asal Sekolah</label>
                                    <select required class="form-control" id="asal-sekolah" name="asal_sekolah">
                                        <option value="">Pilih Asal Sekolah</option>
                                        <option value="SD" {{ old('asal_sekolah') == 'SD' ? 'selected' : '' }}>SD
                                        </option>
                                        <option value="MD" {{ old('asal_sekolah') == 'MD' ? 'selected' : '' }}>MD
                                        </option>
                                        <option value="Pondok Pesantren"
                                            {{ old('asal_sekolah') == 'Pondok Pesantren' ? 'selected' : '' }}>Pondok
                                            Pesantren</option>
                                    </select>
                                    @foreach ($errors->get('asal_sekolah') as $message)
                                     <small class="text-danger"><i class="fa fa-times-circle"> </i>{{ $message }}</small>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nama-sekolah">Nama Sekolah</label>
                                    <input required class="form-control isMaxLength" maxlength="100" type="text"
                                        placeholder="Masukan Nama Sekolah Asal" id="nama-sekolah"
                                        value="{{ old('nama_sekolah') }}" name="nama_sekolah">
                                    @foreach ($errors->get('nama_sekolah') as $message)
                                    <small class="text-danger"><i class="fa fa-times-circle"> </i>{{ $message }}</small>
                                    @endforeach
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="alamat-sekolah">Alamat Sekolah</label>
                                    <input required maxlength="100" class="form-control isMaxLength" type="text"
                                        placeholder="Masukan Alamat Sekolah Asal" id="alamat-sekolah"
                                        value="{{ old('alamat_sekolah') }}" name="alamat_sekolah">
                                    @foreach ($errors->get('alamat_sekolah') as $message)
                                    <small class="text-danger"><i class="fa fa-times-circle"> </i>{{ $message }}</small>
                                    @endforeach
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="tahun-masuk">Tahun Masuk</label>
                                    <input value="{{ old('tahun_masuk') }}" required maxlength="4" class="form-control isMaxLength isMax4" type="text"
                                        placeholder="Tahun Masuk" id="tahun-masuk" name="tahun_masuk">
                                    @foreach ($errors->get('tahun_masuk') as $message)
                                    <small class="text-danger"><i class="fa fa-times-circle"> </i>{{ $message }}</small>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>

                    {{-- Form Orang Tua --}}
                    <div class="tab-pane" id="data-ortu" role="tabpanel">
                        <h5>DATA AYAH</h5>
                        <div class="form-group">
                            <label for="nama-ayah">Nama Ayah</label>
                            <input value="{{ old('nama_ayah') }}" type="text" class="form-control" id="nama-ayah"
                                name="nama_ayah" required placeholder="Masukan Nama Ayah">
                            @foreach ($errors->get('nama_ayah') as $message)
                               <small class="text-danger"><i class="fa fa-times-circle"> </i>{{ $message }}</small>
                            @endforeach
                        </div>

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tempat-lahir-ayah">Tempat Lahir</label>
                                    <input value="{{ old('tempat_lahir_ayah') }}" type="text" class="form-control"
                                        id="tempat-lahir-ayah" name="tempat_lahir_ayah" required
                                        placeholder="Tempat Lahir Ayah">
                                    @foreach ($errors->get('tempat_lahir_ayah') as $message)
                                    <small class="text-danger"><i class="fa fa-times-circle"> </i>{{ $message }}</small>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tanggal-lahir-ayah">Tanggal Lahir Ayah</label>
                                    <input value='{{ old('tanggal_lahir_ayah') }}' required type="text"
                                        class="js-flatpickr form-control bg-white" id="tanggal-lahir-ayah"
                                        name="tanggal_lahir_ayah" placeholder="Pilih Tanggal Lahir"
                                        data-date-format="d-m-Y">
                                    @foreach ($errors->get('tanggal_lahir_ayah') as $message)
                                    <small class="text-danger"><i class="fa fa-times-circle"> </i>{{ $message }}</small>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="pendidikan-ayah">Pendidikan Ayah</label>
                                    <select class="form-control" id="pendidikan-ayah" required name="pendidikan_ayah">
                                        <option value="">Pilih Keterangan</option>
                                        <option value="SD" {{ old('pendidikan_ayah') == 'SD' ? 'selected' : '' }}>SD
                                        </option>
                                        <option value="MD" {{ old('pendidikan_ayah') == 'MD' ? 'selected' : '' }}>MD
                                        </option>
                                        <option value="SLTP" {{ old('pendidikan_ayah') == 'SLTP' ? 'selected' : '' }}>
                                            SLTP</option>
                                        <option value="SLTA" {{ old('pendidikan_ayah') == 'SLTA' ? 'selected' : '' }}>
                                            SLTA</option>
                                        <option value="VOKASI"
                                            {{ old('pendidikan_ayah') == 'VOKASI' ? 'selected' : '' }}>Vokasi</option>
                                        <option value="PT" {{ old('pendidikan_ayah') == 'PT' ? 'selected' : '' }}>PT
                                        </option>
                                        <option value="LAINNYA"
                                            {{ old('pendidikan_ayah') == 'LAINNYA' ? 'selected' : '' }}>Lainnya</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="pekerjaan-ayah">Pekerjaan Ayah</label>
                                    <input type="text" value="{{ old('pekerjaan_ayah') }}" class="form-control"
                                        id="pekerjaan-ayah" name="pekerjaan_ayah" placeholder="Pendidikan Terahir Ayah"
                                        required>
                                    @foreach ($errors->get('pekerjaan_ayah') as $message)
                                    <small class="text-danger"><i class="fa fa-times-circle"> </i>{{ $message }}</small>
                                    @endforeach
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="penghasilan-ayah">Penghasilan Ayah</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend ">
                                            <span class="input-group-text">
                                                Rp
                                            </span>
                                        </div>
                                        <input value='{{ old('penghasilan_ayah') }}' type="text"
                                            class="form-control uang" id="penghasilan-ayah " name="penghasilan_ayah"
                                            placeholder="Penghasilan">
                                        <div class="input-group-append">
                                            <span class="input-group-text">/bulan</span>
                                        </div>
                                    </div>
                                    @foreach ($errors->get('penghasilan_ayah') as $message)
                                    <small class="text-danger"><i class="fa fa-times-circle"> </i>{{ $message }}</small>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="telepon-ayah">No. Telepon Ayah</label>
                                    <input value="{{ old('telepon_ayah') }}" type="text" class="form-control telepon"
                                        id="telepon-ayah" name="telepon_ayah" placeholder="Masukan Telepon Ayah"
                                        required>
                                    @foreach ($errors->get('telepon_ayah') as $message)
                                    <small class="text-danger"><i class="fa fa-times-circle"> </i>{{ $message }}</small>
                                    @endforeach
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="email-ayah">Email Ayah</label>
                                    <input value="{{ old('email_ayah') }}" type="email" id="email-ayah"
                                        class="form-control" name="email_ayah" placeholder="Masukan Email Ayah"
                                        >
                                    @foreach ($errors->get('email_ayah') as $message)
                                    <small class="text-danger"><i class="fa fa-times-circle"> </i>{{ $message }}</small>
                                    @endforeach
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="keterangan-ayah">Keterangan</label>
                                    <select class="form-control" id="keterangan-ayah" required name="keterangan_ayah">
                                        <option value="">Pilih Keterangan</option>
                                        <option value="Masih Hidup"
                                            {{ old('keterangan_ayah') == 'Masih Hidup' ? 'selected' : '' }}>Masih Hidup
                                        </option>
                                        <option value="Meninggal"
                                            {{ old('keterangan_ayah') == 'Meninggal' ? 'selected' : '' }}>Meninggal
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <h5 class="mt-3">DATA IBU</h5>
                        <div class="form-group">
                            <label for="nama-ibu">Nama Ibu</label>
                            <input type="text" value="{{ old('nama_ibu') }}" class="form-control" id="nama-ibu"
                                name="nama_ibu" required placeholder="Masukan Nama Ibu">
                        </div>

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tempat-lahir-ibu">Tempat Lahir</label>
                                    <input value="{{ old('tempat_lahir_ibu') }}" type="text" class="form-control"
                                        id="tempat-lahir-ibu" name="tempat_lahir_ibu" required
                                        placeholder="Tempat Lahir Ibu">
                                    @foreach ($errors->get('tempat_lahir_ibu') as $message)
                                    <small class="text-danger"><i class="fa fa-times-circle"> </i>{{ $message }}</small>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tanggal-lahir-ibu">Tanggal Lahir Ibu</label>
                                    <input value="{{ old('tanggal_lahir_ibu') }}" required type="text"
                                        class="js-flatpickr form-control bg-white" id="tanggal-lahir-ibu"
                                        name="tanggal_lahir_ibu" placeholder="Pilih Tanggal Lahir"
                                        data-date-format="d-m-Y">
                                    @foreach ($errors->get('tanggal_lahir_ibu') as $message)
                                    <small class="text-danger"><i class="fa fa-times-circle"> </i>{{ $message }}</small>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="pendidikan-ibu">Pendidikan Ibu</label>
                                    <select class="form-control" id="pendidikan-ibu" required name="pendidikan_ibu">
                                        <option value="">Pilih Keterangan</option>
                                        <option value="SD" {{ old('pendidikan_ayah') == 'SD' ? 'selected' : '' }}>SD
                                        </option>
                                        <option value="MD" {{ old('pendidikan_ayah') == 'MD' ? 'selected' : '' }}>MD
                                        </option>
                                        <option value="SLTP" {{ old('pendidikan_ayah') == 'SLTP' ? 'selected' : '' }}>
                                            SLTP</option>
                                        <option value="SLTA" {{ old('pendidikan_ayah') == 'SLTA' ? 'selected' : '' }}>
                                            SLTA</option>
                                        <option value="VOKASI"
                                            {{ old('pendidikan_ayah') == 'VOKASI' ? 'selected' : '' }}>Vokasi</option>
                                        <option value="PT" {{ old('pendidikan_ayah') == 'PT' ? 'selected' : '' }}>PT
                                        </option>
                                        <option value="LAINNYA"
                                            {{ old('pendidikan_ayah') == 'LAINNYA' ? 'selected' : '' }}>Lainnya</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="pekerjaan-ibu">Pekerjaan Ibu</label>
                                    <input type="text" value="{{ old('pekerjaan_ibu') }}" class="form-control"
                                        id="pekerjaan-ibu" name="pekerjaan_ibu" placeholder="Pendidikan Terahir Ibu"
                                        required>
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
                                        <input value="{{ old('penghasilan_ibu') }}" type="text" class="form-control"
                                            id="penghasilan-ibu" name="penghasilan_ibu" placeholder="Penghasilan">
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
                                    <input value="{{ old('telepon_ibu') }}" type="text" class="form-control"
                                        id="telepon-ibu" name="telepon_ibu" placeholder="Masukan Telepon Ibu" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="email-ibu">Email Ibu</label>
                                    <input value="{{ old('email_ibu') }}" type="email" id="email-ibu"
                                        class="form-control" name="email_ibu" placeholder="Masukan Email Ibu">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="keterangan-ibu">Keterangan</label>
                                    <select class="form-control" id="keterangan-ibu" required name="keterangan_ibu">
                                        <option value="">Pilih Keterangan</option>
                                        <option value="Masih Hidup"
                                            {{ old('keterangan_ayah') == 'Masih Hidup' ? 'selected' : '' }}>Masih Hidup
                                        </option>
                                        <option value="Meninggal"
                                            {{ old('keterangan_ayah') == 'Meninggal' ? 'selected' : '' }}>Meninggal
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <h5 class="mt-3">ALAMAT ORANG TUA</h5>
                        <div class="form-row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="provinsi-ortu">Provinsi Orang Tua</label>
                                    <select required class="form-control" id="provinsi-ortu" name="provinsi_ortu">
                                        <option value="">Pilih Provinsi</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="kabupaten-ortu">Kabupaten Orang Tua</label>
                                    <select required class="form-control" id="kabupaten-ortu" name="kabupaten_ortu">
                                        <option value="">Pilih Kabupaten</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="kecamatan-ortu">Kecamatan Orang Tua</label>
                                    <select required class="form-control" id="kecamatan-ortu" name="kecamatan_ortu">
                                        <option value="">Pilih Kecamatan</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="kelurahan-ortu">Desa Orang Tua</label>
                                    <select required class="form-control" id="kelurahan-ortu" name="kelurahan_ortu">
                                        <option value="">Pilih Kelurahan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="dusun-ortu">Dusun Orang Tua</label>
                                    <input required type="text" class="form-control" id="dusun-ortu" name="dusun_ortu">
                                     @foreach ($errors->get('dusun_ortu') as $message)
                                    <small class="text-danger"><i class="fa fa-times-circle"> </i>{{ $message }}</small>
                                    @endforeach
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="rt-ortu">RT Orang Tua</label>
                                    <input type="text" class="form-control" id="rt-ortu" name="rt_ortu">
                                     @foreach ($errors->get('rt_ortu') as $message)
                                    <small class="text-danger"><i class="fa fa-times-circle"> </i>{{ $message }}</small>
                                    @endforeach
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="rw-ortu">RW Orang Tua</label>
                                    <input type="text" class="form-control" id="rw-ortu" name="rw_ortu">
                                    @foreach ($errors->get('rw_ortu') as $message)
                                   <small class="text-danger"><i class="fa fa-times-circle"> </i>{{ $message }}</small>
                                    @endforeach

                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="alamat-jalan">Alamat Jalan</label>
                            <textarea required class="form-control" id="alamat-jalan" name="alamat_jalan_ortu" rows="6"
                                placeholder="Masukan Alamat Sesuai Di KTP">{{ old('alamat_jalan_ortu') }}</textarea>
                            @foreach ($errors->get('alamat_jalan_ortu') as $message)
                            <small class="text-danger"><i class="fa fa-times-circle"> </i>{{ $message }}</small>
                            @endforeach
                        </div>
                    </div>

                    {{-- Form Data wali --}}
                    <div class="tab-pane" id="data-wali" role="tabpanel">
                        <h5 class="mt-3">DATA WALI</h5>
                        <div class="form-group">
                            <label for="nama-wali">Nama Wali</label>
                            <input value="{{ old('nama_wali') }}" type="text" class="form-control" id="nama-wali" name="nama_wali" required
                                placeholder="Masukan Nama wali">
                            @foreach ($errors->get('nama_wali') as $message)
                            <small class="text-danger"><i class="fa fa-times-circle"> </i>{{ $message }}</small>
                            @endforeach
                        </div>

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tempat-lahir-wali">Tempat Lahir</label>
                                    <input value="{{ old('tempat_lahir_wali') }} " type="text" class="form-control" id="tempat-lahir-wali"
                                        name="tempat_lahir_wali" required placeholder="Tempat Lahir wali">
                                    @foreach ($errors->get('tempat_lahir_wali') as $message)
                                    <small class="text-danger"><i class="fa fa-times-circle"> </i>{{ $message }}</small>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tanggal-lahir-wali">Tanggal Lahir Wali</label>
                                    <input value="{{ old('tanggal_lahir_wali') }}" required type="text" class="js-flatpickr form-control bg-white"
                                        id="tanggal-lahir-wali" name="tanggal_lahir_wali"
                                        placeholder="Pilih Tanggal Lahir" data-date-format="d-m-Y">
                                    @foreach ($errors->get('tanggal_lahir_wali') as $message)
                                    <small class="text-danger"><i class="fa fa-times-circle"> </i>{{ $message }}</small>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="pendidikan-wali">Pendidikan Wali</label>
                                    <select class="form-control" id="pendidikan-wali" required name="pendidikan_wali">
                                        <option value="">Pilih Keterangan</option>
                                        <option value="SD" {{ old('pendidikan_ayah') == 'SD' ? 'selected' : '' }}>SD
                                        </option>
                                        <option value="MD" {{ old('pendidikan_ayah') == 'MD' ? 'selected' : '' }}>MD
                                        </option>
                                        <option value="SLTP" {{ old('pendidikan_ayah') == 'SLTP' ? 'selected' : '' }}>
                                            SLTP</option>
                                        <option value="SLTA" {{ old('pendidikan_ayah') == 'SLTA' ? 'selected' : '' }}>
                                            SLTA</option>
                                        <option value="VOKASI"
                                            {{ old('pendidikan_ayah') == 'VOKASI' ? 'selected' : '' }}>Vokasi</option>
                                        <option value="PT" {{ old('pendidikan_ayah') == 'PT' ? 'selected' : '' }}>PT
                                        </option>
                                        <option value="LAINNYA"
                                            {{ old('pendidikan_ayah') == 'LAINNYA' ? 'selected' : '' }}>Lainnya</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="pekerjaan-wali">Pekerjaan Wali</label>
                                    <input value="{{ old('pekerjaan_wali') }}" required type="text" class="form-control" id="pekerjaan-wali" name="pekerjaan_wali"
                                        placeholder="Pekerjaan Terahir wali" required>
                                     @foreach ($errors->get('pekerjaan_wali') as $message)
                                    <small class="text-danger"><i class="fa fa-times-circle"> </i>{{ $message }}</small>
                                    @endforeach
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
                                        <input value="{{ old('penghasilan_wali') }}" type="text" class="form-control" id="penghasilan_wali"
                                            name="penghasilan_wali" placeholder="Penghasilan">
                                        <div class="input-group-append">
                                            <span class="input-group-text">/bulan</span>
                                        </div>
                                        @foreach ($errors->get('penghasilan') as $message)
                                        <small class="text-danger"><i class="fa fa-times-circle"> </i>{{ $message }}</small>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="telepon-wali">No. Telepon Wali</label>
                                    <input value="{{ old('telepon_wali') }}" type="text" class="form-control" id="telepon-wali" name="telepon_wali"
                                        placeholder="Masukan Telepon wali">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="email-wali">Email Wali</label>
                                    <input value="{{ old('email_wali') }}" type="email" id="email-wali" class="form-control" name="email_wali"
                                        placeholder="Masukan Email wali">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="keterangan-wali">Keterangan</label>
                                    <select class="form-control" id="keterangan-wali" required name="keterangan_wali">
                                        <option value="">Pilih Keterangan</option>
                                        <option value="Masih Hidup">Masih Hidup</option>
                                        <option value="Meninggal">Meninggal</option>
                                    </select>
                                    @foreach ($errors->get('keterangan_wali') as $message)
                                    <small class="text-danger"><i class="fa fa-times-circle"> </i>{{ $message }}</small>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <h5 class="mt-3">ALAMAT WALI</h5>
                        <div class="form-row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="provinsi-wali">Wali</label>
                                    <select required class="form-control" id="provinsi-wali" name="provinsi_wali">
                                        <option value="">Pilih Provinsi</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="kabupaten-wali">Kabupaten Wali</label>
                                    <select required class="form-control" id="kabupaten-wali" name="kabupaten_wali">
                                        <option value="">Pilih Kabupaten</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="kecamatan-wali">Kecamatan Wali</label>
                                    <select required class="form-control" id="kecamatan-wali" name="kecamatan_wali">
                                        <option value="">Pilih Kecamatan</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="kelurahan-wali">Desa Wali</label>
                                    <select required class="form-control" id="kelurahan-wali" name="kelurahan_wali">
                                        <option value="">Pilih Kecamatan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label role="" for="kelurahan-wali">Dusun Wali</label>
                                    <input value="{{ old('kelurahan_wali') }}" type="text" class="form-control" id="kelurahan-wali" name="kelurahan_wali">
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="rt-wali">RT Wali</label>
                                    <input value="{{ old('rt_wali') }} " type="text" class="form-control" id="rt-wali" name="rt_wali">
                                     @foreach ($errors->get('rt_wali') as $message)
                                    <small class="text-danger"><i class="fa fa-times-circle"> </i>{{ $message }}</small>
                                    @endforeach
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="rw-wali">RW Wali</label>
                                    <input value="{{ old('rw_wali') }}" type="text" class="form-control" id="rw-wali" name="rw_wali">
                                     @foreach ($errors->get('rw_wali') as $message)
                                    <small class="text-danger"><i class="fa fa-times-circle"> </i>{{ $message }}</small>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="alamat-jalan">Alamat Jalan</label>
                            <textarea required class="form-control" id="alamat-jalan" name="alamat_jalan_wali" rows="6"
                                placeholder="Masukan Alamat Sesuai Di KTP">{{ old('alamat_jalan_wali') }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="block-content block-content-sm  block-content-full bg-body-light">
                    <div class="row m-3">
                        <div class="col-6">
                            <button type="button" class="btn btn-alt-primary min-width-125 js-click-ripple-enabled"
                                data-toggle="click-ripple" data-wizard="prev">
                                <i class="fa fa-angle-left mr-5"></i> Sebelumnya
                            </button>
                        </div>
                        <div class="col-6 text-right">
                            <button type="button" class="btn btn-alt-primary min-width-125 js-click-ripple-enabled"
                                data-toggle="click-ripple" data-wizard="next">
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
<script>jQuery(function () { Codebase.helpers('select2'); }); </script>
<script src="{{ url('/') }}/assets/js/pages/be_forms_validation.min.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/jquery-validation/localization/messages_id.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/jquery-validation/additional-methods.js"></script>
<script src="{{ url('/') }}/assets/js/pages/be_forms_wizard.min.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/flatpickr/flatpickr.min.js"></script>
<script src="{{ url('/') }}/assets/js/creative.js"></script>
<script src="{{ url('/') }}/assets/js/bootstrap-maxlength.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/chartjs/Chart.bundle.min.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/slick/slick.min.js"></script>
<script src="{{ url('/') }}/assets/js/pages/be_pages_dashboard.min.js"></script>
<script src="https://cdn.rawgit.com/igorescobar/jQuery-Mask-Plugin/1ef022ab/dist/jquery.mask.min.js"></script>
<script>
    jQuery(function () {
        Codebase.helpers('datepicker');
    });


</script>

{{-- <script src="https://api.iksgroup.co.id/apijs/lokasiapi.js"></script>
<script>
    var render = createwidgetlokasi("provinsi", "kabupaten", "kecamatan", "kelurahan");
</script> --}}

<script>
    jQuery(function () {
        Codebase.helpers('flatpickr');
    });
</script>
@endsection
