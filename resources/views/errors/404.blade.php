@extends('layouts.app')
@section('main-content')
    <div id="page-container" class="main-content-boxed">
        <main id="main-container">
            <div class="hero bg-white">
                <div class="hero-inner">
                    <div class="content content-full">
                        <div class="py-30 text-center">
                            <div class="display-3 text-danger">
                                <i class="fa fa-warning"></i> 404
                            </div>
                            <h1 class="h2 font-w700 mt-30 mb-10">Data yang ada cari tidak di temukan</h1>
                            <h2 class="h3 font-w400 text-muted mb-50">Data Kosong</h2>
                            <a class="btn btn-hero btn-rounded btn-alt-secondary" href="{{ url('/') }}">
                                <i class="fa fa-arrow-left mr-10"></i> Kembali Ke Dashboard
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection

@section('plugin-js')
    <script src="{{ url('/') }}/assets/js/codebase.core.min-3.2.js"></script>
    <script src="{{ url('/') }}/assets/js/codebase.app.min-3.2.js"></script>
@endsection
