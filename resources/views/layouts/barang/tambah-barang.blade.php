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
    <div class="col-md-10">
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
                <form action="{{ route('pertokoan.store-kategori') }}" method="post">
                    @csrf
                    <fieldset class="border p-15 mb-20">
                        <legend class="w-auto"><small>Identitas Barang</small></legend>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                  <label for="kode_barang">Kode Product</label>
                                  <input type="text" name="kode_barang" id="kode_barang" class="form-control" placeholder="Scan Barcode" aria-describedby="kodebarang">
                                  <small id="kodebarang" class="text-muted">Silahkan scan barcode pada kemasan product</small>
                                </div>

                                <div class="form-group">
                                    <label for="nama_barang">Nama Product</label>
                                    <input type="text" name="nama_product" id="nama_product" class="form-control" placeholder="Masukan Nama Barang">
                                </div>
                                
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label for="kategori_product">Supplier</label>
                                            <select class="js-select2 form-control" id="supplier" name="supplier" style="width: 100%;" data-placeholder="Pilih Supplier">
                                                <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                <option value="1">HTML</option>
                                                <option value="2">CSS</option>
                                                <option value="3">JavaScript</option>
                                                <option value="4">PHP</option>
                                                <option value="5">MySQL</option>
                                                <option value="6">Ruby</option>
                                                <option value="7">Angular</option>
                                                <option value="8">React</option>
                                                <option value="9">Vue.js</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label for="kategori_product">Kategori</label>
                                            <select class="js-select2 form-control" id="kategori_product" name="kategori_product" style="width: 100%;" data-placeholder="Pilih Kategori Product">
                                                <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                <option value="1">HTML</option>
                                                <option value="2">CSS</option>
                                                <option value="3">JavaScript</option>
                                                <option value="4">PHP</option>
                                                <option value="5">MySQL</option>
                                                <option value="6">Ruby</option>
                                                <option value="7">Angular</option>
                                                <option value="8">React</option>
                                                <option value="9">Vue.js</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <div class="row">
                        <div class="col-md-6">
                            <fieldset class="border p-15 mb-20">
                                <legend class="w-auto">Satuan dan Isi Product</legend>
                                <div class="form-group">
                                <label for="stock_pruduct">Stock</label>
                                <input type="number" name="stock_pruduct" id="stock_pruduct" class="form-control" placeholder="Masukan stock">
                                </div>

                                <div class="form-group">
                                    <label for="satuan_beli">Satuan Beli</label>
                                    <select class="js-select2 form-control" id="satuan_beli" name="satuan_beli" style="width: 100%;" data-placeholder="Pilih Satuan Beli">
                                        <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                        <option value="1">HTML</option>
                                        <option value="2">CSS</option>
                                        <option value="3">JavaScript</option>
                                        <option value="4">PHP</option>
                                        <option value="5">MySQL</option>
                                        <option value="6">Ruby</option>
                                        <option value="7">Angular</option>
                                        <option value="8">React</option>
                                        <option value="9">Vue.js</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="satuan_jual">Satuan Jual</label>
                                    <select class="js-select2 form-control" id="satuan_jual" name="satuan_jual" style="width: 100%;" data-placeholder="Pilih Satuan Jual">
                                        <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                        <option value="1">HTML</option>
                                        <option value="2">CSS</option>
                                        <option value="3">JavaScript</option>
                                        <option value="4">PHP</option>
                                        <option value="5">MySQL</option>
                                        <option value="6">Ruby</option>
                                        <option value="7">Angular</option>
                                        <option value="8">React</option>
                                        <option value="9">Vue.js</option>
                                    </select>
                                </div>
                            </fieldset>
                        </div>

                        <div class="col-md-6">
                            <fieldset class="border p-15 mb-20">
                                <legend class="w-auto">Harga</legend>
                                <div class="form-group">
                                    <label for="harga_beli">Harga beli</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                Rp.
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" id="harga_beli" name="harga_beli" placeholder="Masukan Harga Beli">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="harga_jual">Harga Jual</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                Rp.
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" id="harga_jual" name="harga_jual" placeholder="Masukan Harga Beli">
                                    </div>
                                </div>

                                <div class="form-group">
<<<<<<< HEAD
                                  <label for="">Tanggal Expired</label>
                                  <input type="text" class="js-flatpickr form-control bg-white" id="tanggal_expired" name="tanggal_expired" placeholder="Pilih Tanggal Expired" data-date-format="d-m-Y">
=======
                                  <label for="tanggal_expired">Tanggal Expired</label>
                                  <input type="text" class="js-flatpickr form-control bg-white" id="tanggal_expired" name="tanggal_expired" placeholder="Pilih tanggal expired" data-date-format="d-m-Y">
>>>>>>> barang

                                </div>
                            </fieldset>
                        </div>
                    </div>

                    <div class="form-group">
                        <a href="#">
                            <button type="button" class="btn btn-primary">
                                <i class="fa fa-save mr-1"></i> Simpan Barang
                            </button>   
                        </a>

                        <a href="#">
                            <button class="btn btn-danger">
                                <i class="fa fa-undo mr-1"></i> Batal
                            </button>
                        </a>
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
<script src="{{ url('/') }}/assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Page JS Code -->
<script src="{{ url('/') }}/assets/js/pages/be_tables_datatables.min.js"></script>
<script src="{{ url('/') }}/assets/js/pages/be_forms_plugins.min.js"></script>
<script>jQuery(function(){ Codebase.helpers(['flatpickr', 'datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']); });</script>

@endsection