@extends('layouts.main')

@push('stylesheet')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endpush

@push('pos-scripts')
    <script src="{{ asset('js/app.js') }}"></script>
@endpush

@section('page-content')
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <a href="{{ url('/') }}"><img class="auto-size-by-width-img" src="{{ asset('img/logo.o.svg') }}"></img></a>
                </div>
            </div>
            @yield('content')
        </div>
    </section>
@endsection