@extends('layouts.app')
@section('plugin-css')
<link rel="stylesheet" href="{{ url('/') }}/assets/js/plugins/datatables/dataTables.bootstrap4.css">
<link rel="stylesheet" href="{{ url('/') }}/assets/js/plugins/select2/css/select2.min.css">

@endsection
@section('main-content')
<div class="row js-appear-enabled animated fadeIn" data-toggle="appear">
    <div class="col-6 col-xl-3">
        <a class="block block-link-shadow text-right" href="javascript:void(0)">
            <div class="block-content block-content-full clearfix">
                <div class="float-left mt-10 d-none d-sm-block">
                    <i class="si si-bag fa-3x text-body-bg-dark"></i>
                </div>
                <div class="font-size-h3 font-w600 js-count-to-enabled" data-toggle="countTo" data-speed="1000" data-to="1500">1500</div>
                <div class="font-size-sm font-w600 text-uppercase text-muted">Sales</div>
            </div>
        </a>
    </div>
    <div class="col-6 col-xl-3">
        <a class="block block-link-shadow text-right" href="javascript:void(0)">
            <div class="block-content block-content-full clearfix">
                <div class="float-left mt-10 d-none d-sm-block">
                    <i class="si si-wallet fa-3x text-body-bg-dark"></i>
                </div>
                <div class="font-size-h3 font-w600">$<span data-toggle="countTo" data-speed="1000" data-to="780" class="js-count-to-enabled">780</span></div>
                <div class="font-size-sm font-w600 text-uppercase text-muted">Earnings</div>
            </div>
        </a>
    </div>
    <div class="col-6 col-xl-3">
        <a class="block block-link-shadow text-right" href="javascript:void(0)">
            <div class="block-content block-content-full clearfix">
                <div class="float-left mt-10 d-none d-sm-block">
                    <i class="si si-envelope-open fa-3x text-body-bg-dark"></i>
                </div>
                <div class="font-size-h3 font-w600 js-count-to-enabled" data-toggle="countTo" data-speed="1000" data-to="15">15</div>
                <div class="font-size-sm font-w600 text-uppercase text-muted">Messages</div>
            </div>
        </a>
    </div>
    <div class="col-6 col-xl-3">
        <a class="block block-link-shadow text-right" href="javascript:void(0)">
            <div class="block-content block-content-full clearfix">
                <div class="float-left mt-10 d-none d-sm-block">
                    <i class="si si-users fa-3x text-body-bg-dark"></i>
                </div>
                <div class="font-size-h3 font-w600 js-count-to-enabled" data-toggle="countTo" data-speed="1000" data-to="4252">4252</div>
                <div class="font-size-sm font-w600 text-uppercase text-muted">Online</div>
            </div>
        </a>
    </div>
</div>

<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title">Daftar Seluruh Nasabah e-Money Nurul Amanah</h3>
        <div class="block-options">
            <button type="button" class="btn-block-option">
                 <a href="" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#modal-fadein"><i class="si si-plus mr-5"></i>Tambah Nasabah</a>
            </button>
           
        </div>
    </div>
    <div class="block-content block-content-full">
        <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
            <thead>
                <tr>
                    <th class="text-center"></th>
                    <th>Name</th>
                    <th class="d-none d-sm-table-cell">Email</th>
                    <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
                    <th class="text-center" style="width: 15%;">Profile</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">1</td>
                    <td class="font-w600">Justin Hunt</td>
                    <td class="d-none d-sm-table-cell">customer1@example.com</td>
                    <td class="d-none d-sm-table-cell">
                        <span class="badge badge-primary">Personal</span>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                            <i class="fa fa-user"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">2</td>
                    <td class="font-w600">Carol White</td>
                    <td class="d-none d-sm-table-cell">customer2@example.com</td>
                    <td class="d-none d-sm-table-cell">
                        <span class="badge badge-info">Business</span>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                            <i class="fa fa-user"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">3</td>
                    <td class="font-w600">Melissa Rice</td>
                    <td class="d-none d-sm-table-cell">customer3@example.com</td>
                    <td class="d-none d-sm-table-cell">
                        <span class="badge badge-danger">Disabled</span>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                            <i class="fa fa-user"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">4</td>
                    <td class="font-w600">Barbara Scott</td>
                    <td class="d-none d-sm-table-cell">customer4@example.com</td>
                    <td class="d-none d-sm-table-cell">
                        <span class="badge badge-danger">Disabled</span>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                            <i class="fa fa-user"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">5</td>
                    <td class="font-w600">Marie Duncan</td>
                    <td class="d-none d-sm-table-cell">customer5@example.com</td>
                    <td class="d-none d-sm-table-cell">
                        <span class="badge badge-success">VIP</span>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                            <i class="fa fa-user"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">6</td>
                    <td class="font-w600">Jose Parker</td>
                    <td class="d-none d-sm-table-cell">customer6@example.com</td>
                    <td class="d-none d-sm-table-cell">
                        <span class="badge badge-info">Business</span>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                            <i class="fa fa-user"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">7</td>
                    <td class="font-w600">Carol White</td>
                    <td class="d-none d-sm-table-cell">customer7@example.com</td>
                    <td class="d-none d-sm-table-cell">
                        <span class="badge badge-info">Business</span>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                            <i class="fa fa-user"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">8</td>
                    <td class="font-w600">Amanda Powell</td>
                    <td class="d-none d-sm-table-cell">customer8@example.com</td>
                    <td class="d-none d-sm-table-cell">
                        <span class="badge badge-warning">Trial</span>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                            <i class="fa fa-user"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">9</td>
                    <td class="font-w600">Lisa Jenkins</td>
                    <td class="d-none d-sm-table-cell">customer9@example.com</td>
                    <td class="d-none d-sm-table-cell">
                        <span class="badge badge-info">Business</span>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                            <i class="fa fa-user"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">10</td>
                    <td class="font-w600">Amanda Powell</td>
                    <td class="d-none d-sm-table-cell">customer10@example.com</td>
                    <td class="d-none d-sm-table-cell">
                        <span class="badge badge-primary">Personal</span>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                            <i class="fa fa-user"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">11</td>
                    <td class="font-w600">Ralph Murray</td>
                    <td class="d-none d-sm-table-cell">customer11@example.com</td>
                    <td class="d-none d-sm-table-cell">
                        <span class="badge badge-success">VIP</span>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                            <i class="fa fa-user"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">12</td>
                    <td class="font-w600">Helen Jacobs</td>
                    <td class="d-none d-sm-table-cell">customer12@example.com</td>
                    <td class="d-none d-sm-table-cell">
                        <span class="badge badge-primary">Personal</span>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                            <i class="fa fa-user"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">13</td>
                    <td class="font-w600">Marie Duncan</td>
                    <td class="d-none d-sm-table-cell">customer13@example.com</td>
                    <td class="d-none d-sm-table-cell">
                        <span class="badge badge-danger">Disabled</span>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                            <i class="fa fa-user"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">14</td>
                    <td class="font-w600">Albert Ray</td>
                    <td class="d-none d-sm-table-cell">customer14@example.com</td>
                    <td class="d-none d-sm-table-cell">
                        <span class="badge badge-success">VIP</span>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                            <i class="fa fa-user"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">15</td>
                    <td class="font-w600">Jose Wagner</td>
                    <td class="d-none d-sm-table-cell">customer15@example.com</td>
                    <td class="d-none d-sm-table-cell">
                        <span class="badge badge-info">Business</span>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                            <i class="fa fa-user"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">16</td>
                    <td class="font-w600">Albert Ray</td>
                    <td class="d-none d-sm-table-cell">customer16@example.com</td>
                    <td class="d-none d-sm-table-cell">
                        <span class="badge badge-info">Business</span>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                            <i class="fa fa-user"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">17</td>
                    <td class="font-w600">Jose Parker</td>
                    <td class="d-none d-sm-table-cell">customer17@example.com</td>
                    <td class="d-none d-sm-table-cell">
                        <span class="badge badge-info">Business</span>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                            <i class="fa fa-user"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">18</td>
                    <td class="font-w600">Carol White</td>
                    <td class="d-none d-sm-table-cell">customer18@example.com</td>
                    <td class="d-none d-sm-table-cell">
                        <span class="badge badge-info">Business</span>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                            <i class="fa fa-user"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">19</td>
                    <td class="font-w600">Lori Moore</td>
                    <td class="d-none d-sm-table-cell">customer19@example.com</td>
                    <td class="d-none d-sm-table-cell">
                        <span class="badge badge-info">Business</span>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                            <i class="fa fa-user"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">20</td>
                    <td class="font-w600">Helen Jacobs</td>
                    <td class="d-none d-sm-table-cell">customer20@example.com</td>
                    <td class="d-none d-sm-table-cell">
                        <span class="badge badge-info">Business</span>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                            <i class="fa fa-user"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


{{--  modal tambah nasabah  --}}
<div class="modal fade" id="modal-fadein" tabindex="-1" role="dialog" aria-labelledby="modal-fadein" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
            <div class="block-header bg-primary-dark">
                <h3 class="block-title">Formulir Penambahan Nasabah</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option">
                        <i class="si si-users"></i>
                    </button>
                </div>
            </div>
            <div class="block-content">
                <form action="be_forms_elements_bootstrap.php" method="post" onsubmit="return false;">
                    <div class="form-group">
                        <label for="calon-nasabah">Nama Calon Nasabah</label>
                        <select class="js-select2 form-control" id="calon_nasabah" name="nama_nasabah" style="width: 100%;" data-placeholder="Pilih Santri">
                            @foreach ($santris as $santri)
                            <option value="{{ $santri }}">{{ $santri }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="example-nf-email">Nomor Rekening </label>
                        <input type="text" class="form-control isMaxLength" id="nomor_rekening" name="nomor_rekening" placeholder="Tempelkan Kartu" maxlength="20">
                        <small class="text-muted">Silahkan Tempelkan kartu pada RF Reader</small>
                    </div>
                 </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                    <i class="fa fa-check"></i> Simpan Sekarang
                </button>
            </div>
            </form>
        </div>
        </div>
    </div>
</div>
@endsection

@section('plugin-js')
<script src="{{ url('/') }}/assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/select2/js/select2.full.min.js"></script>
<!-- Page JS Code -->
<script src="{{ url('/') }}/assets/js/pages/be_forms_plugins.min.js"></script>
<script>jQuery(function(){ Codebase.helpers(['flatpickr', 'datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']); });</script>
<script src="{{ url('/') }}/assets/js/pages/be_tables_datatables.min.js"></script>
@endsection