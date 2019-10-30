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
                    <th>Nama Pegawai</th>
                    <th class="d-none d-sm-table-cell">Telepon Pegawai</th>
                    <th class="d-none d-sm-table-cell">Jabatan</th>
                    <th class="d-none d-sm-table-cell" style="width: 15%;">Tanggal Masuk</th>
                    <th class="text-center" style="width: 15%;">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $counter =1 ?>
                @foreach ($pegawais as $pegawai)
                <tr>
                    <td class="text-center">{{ $counter++ }}</td>
                    <td class="font-w600">{{ $pegawai->nama_pegawai }}</td>
                    <td class="d-none d-sm-table-cell">{{ $pegawai->telepon_pegawai }}</td>
                    <td class="d-none d-sm-table-cell">{{ $pegawai->jabatan }}</td>
                    <td class="d-none d-sm-table-cell text-center">
                        <span class="badge badge-primary ">{{ $pegawai->tanggal_masuk }}</span>
                    </td>
                    <td class="text-center">
                        <div class="btn-group" role="group" aria-label="Third group">
                            <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="toolbarDrop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                            <div class="dropdown-menu" aria-labelledby="toolbarDrop">
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-eye mr-5"></i>Lihat Profile
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-pencil mr-5"></i>Edit Pegawai
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-trash-o mr-5"></i>Hapus
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('plugin-js')
<script src="{{ url('/') }}/assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>

<script src="{{ url('/') }}/assets/js/pages/be_tables_datatables.min.js"></script>
@endsection