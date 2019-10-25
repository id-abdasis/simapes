@extends('layouts.app')

@section('main-content')

    <h2 class="content-heading">Para Santri Nurul Amanah</h2>
    <div class="row mb-5 pb-5">
            <div class="col-md-8">
                <a href="">
                    <button type="button" class="btn btn-outline-info mr-5 mb-5">
                        <i class="fa fa-plus mr-5"></i>Tambah Santri
                    </button>
                </a>
            </div>
            <div class="col-md-4 ml-auto">
                <div class="col-lg-12">
                       <form action="{{ route('cari-santri') }}" method="post">
                            <div class="input-group">
                                @csrf
                                <input type="text" class="form-control" id="nama-santri" name="nama_santri" placeholder="Nama santri">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-secondary">Cari</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    <div class="row mt-5">
    @if ($santris->count() > 0)
        @foreach ($santris as $santri)
        <div class="col-md-6 col-xl-3">
            <div class="block text-center">
                <div class="block-content block-content-full block-content-sm">
                    <div class="font-w600">{{ $santri->nama_lengkap }}</div>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <img class="img-avatar img-avatar-thumb" src="{{ url('/') }}/{{ $santri->foto_profil }}" alt="">
                </div>
                <div class="block-content block-content-full">
                    <a href="{{ route('sunting-santri', [$santri->id, $santri->nama_lengkap]) }}">
                        <button type="button" class="btn btn-circle btn-alt-warning mr-5 mb-5 js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Edit">
                        <i class="fa fa-pencil"></i>
                    </button>
                    </a>
                    <button type="button" class="btn btn-circle btn-alt-success mr-5 mb-5 js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Profile">
                        <i class="fa fa-user"></i>
                    </button>
                    <button type="button" class="btn btn-circle btn-alt-primary mr-5 mb-5 js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Settings">
                        <i class="fa fa-cog"></i>
                    </button>
                </div>
            </div>
        </div>
    @endforeach
    @else
        <h1>Tidak Ada Data</h1>
    @endif
    </div>

    <div class="row justify-content-md-center">
        {{ $santris->links() }}
    </div>
@endsection
