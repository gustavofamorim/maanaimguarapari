@extends('layouts.main')

@push('stylesheet')
    <link href="{{ asset('css/global.css') }}" rel="stylesheet">
@endpush

@push('pos-scripts')
    <script src="{{ asset('js/app.js') }}"></script>
@endpush

@section('page-content')
    @include('components.navbar', compact('home', 'eventos', 'conheca', 'voluntario', 'aditional'))
    <div class="content">
        @yield('content')
    </div>
@endsection