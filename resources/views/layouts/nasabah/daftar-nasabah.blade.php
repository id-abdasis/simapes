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
                <div class="font-size-sm font-w600 text-uppercase text-muted">Total Simpanan</div>
            </div>
        </a>
    </div>
    <div class="col-6 col-xl-3">
        <a class="block block-link-shadow text-right" href="javascript:void(0)">
            <div class="block-content block-content-full clearfix">
                <div class="float-left mt-10 d-none d-sm-block">
                    <i class="si si-wallet fa-3x text-body-bg-dark"></i>
                </div>
                <div class="font-size-h3 font-w600"><span data-toggle="countTo" data-speed="1000" data-to="780" class="js-count-to-enabled">780</span></div>
                <div class="font-size-sm font-w600 text-uppercase text-muted">Nasabah</div>
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
                    <th class="d-none d-sm-table-cell">No. Rekening</th>
                    <th class="d-none d-sm-table-cell" style="width: 15%;">Status</th>
                    <th class="text-center" style="width: 15%;">Profile</th>
                </tr>
            </thead>
            <tbody>
                <?php $counter =1 ?>
                @foreach ($nasabahs as $nasabah)
                <tr>
                    <input type="hidden" name="id" value="{{ $nasabah->id }}" id="id-nasabah">
                    <td class="text-center">{{ $counter++ }}</td>
                    <td class="font-w600">{{ $nasabah->nama_nasabah }}</td>
                    <td class="d-none d-sm-table-cell">{{ $nasabah->email }}</td>
                    <td class="d-none d-sm-table-cell">{{ $nasabah->nomor_rekening }}</td>
                    <td class="d-none d-sm-table-cell">
                        <span class="badge badge-primary">{{ $nasabah->status }}</span>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-alt-success" data-toggle="tooltip" title="View Customer">
                            <i class="fa fa-user"></i>
                        </button>
                        <a href="#" id="btn-verif">
                            <button type="button" class="btn btn-sm btn-alt-info" data-toggle="tooltip" title="Verifikasi">
                                <i class="fa fa-check"></i>
                            </button>
                        </a>
                    </td>
                </tr>
                @endforeach
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
                <form action="{{ route('tambah-nasabah') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="calon-nasabah">Nama Calon Nasabah</label>
                        <select class="js-select2 form-control" id="calon_nasabah" name="nama_nasabah" style="width: 100%;" data-placeholder="Pilih Santri">
                            @foreach ($santris as $santri)
                            <option value="{{ $santri->id }} {{ $santri->nama_lengkap }}">{{ $santri->id }} | {{ $santri->nama_lengkap }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nisn_nasabah">NISN Santri </label>
                        <input type="text" class="form-control isMaxLength" id="nisn_nasabah" name="nisn_nasabah" placeholder="Masukan NISN Santri" maxlength="100">
                    </div>
                    <div class="form-group">
                            <label for="email_nasabah">Email </label>
                            <input type="text" class="form-control isMaxLength" id="email_nasabah" name="email_nasabah" placeholder="Masukan Email yang Valid" maxlength="100">
                        </div>
                    <div class="form-group">
                        <label for="example-nf-email">Nomor Rekening </label>
                        <input type="text" class="form-control isMaxLength" id="nomor_rekening" name="nomor_rekening" placeholder="Tempelkan Kartu" maxlength="20">
                        <small class="text-muted">Silahkan Tempelkan kartu pada RF Reader</small>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-alt-primary mr-5 mb-5 btn-block"> <i class="fa fa-user-plus mr-5"></i> Daftarkan Sekarang</button>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                    <button type="button"  class="btn btn-alt-success" data-dismiss="modal">
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script>

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});



$("#btn-verif").click(function(e){
    e.preventDefault();
    Swal.fire({
    title: 'Verifikasi Sekarang?',
    text: "Apakah anda ingin verifikasi akun ini?",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Verifikasi Sekarang!'
    }).then((result) => {
    if (result.value) {
        let status = "Sudah Aktif"
        let idNasabah = $('#id-nasabah').val()
        $.ajax({
        type:'POST',
        url: '{{ route('nasabah.verifkasi-nasabah') }}',
        data:{
            'idNasabah' : idNasabah,
            'status' : status,
            "_token": "{{ csrf_token() }}"
        },
        success:function(data){
            Swal.fire(
                'Good job!',
                'Akun Berhasil Diverifikasi!',
                'success'
            )
        },
        error:function (data) {
            Swal.fire(
                'Gagal',
                'Akun Sudah Terverfikasi!',
                'error'
            )
        }
    });
    }
    })
    
    
});

</script>
@endsection