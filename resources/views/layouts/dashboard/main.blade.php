@extends('layouts.main')

@push('stylesheet')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endpush

@push('pos-scripts')
    <script src="{{ asset('js/app.js') }}"></script>
@endpush

@section('page-content')
    <section class="content">
        @yield('content')
    </section>
@endsection