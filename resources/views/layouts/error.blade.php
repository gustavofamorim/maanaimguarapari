@extends('layouts.main')

@push('stylesheet')
    <link href="{{ asset('css/global.css') }}" rel="stylesheet">
@endpush

@push('pos-scripts')
    <script src="{{ asset('js/app.js') }}"></script>
@endpush

@section('page-content')
<section id="error-page" class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <a href="{{ route('index') }}"><img class="logo" src="{{ asset('img/logo.o.svg') }}"></img></a>
            </div>
        </div>
        <div class="panel panel-danger">
            <div class="panel-heading error-title"><h3>@yield('title')</h3></div>
            <div class="panel-body error-description">
                @yield('description')
            </div>
            <div class="panel-footer error-footer">
                <a role="button" class="btn btn-default" onClick="window.history.back();">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i> Página Anterior
                </a>
                <a role="button" class="btn btn-default" href="{{ route('index') }}">
                    <i class="fa fa-home" aria-hidden="true"></i> Home
                </a>
            </div>
        </div>
    </div>
</section>
@endsection