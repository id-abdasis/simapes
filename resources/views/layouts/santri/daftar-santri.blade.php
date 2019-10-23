@extends('layouts.app')

@section('main-content')
    <h2 class="content-heading">Para Santri Nurul Amanah</h2>
    <div class="row">
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
                    <button type="button" class="btn btn-circle btn-alt-warning mr-5 mb-5 js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Edit">
                        <a href="{{ route('sunting-santri', [$santri->id, $santri->nama_lengkap]) }}"><i class="fa fa-pencil"></i></a>
                    </button>
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
    </div>

    <div class="row justify-content-md-center">
        {{ $santris->links() }}
    </div>
@endsection
