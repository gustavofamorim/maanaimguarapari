@extends('layouts.default', compact('aditional'))

@section('page-content')
    @include('components.navbar', compact('home', 'eventos', 'conheca', 'voluntario', 'aditional'))
    <div class="content">
        
        <div class="container-fluid breadcrumb-container">
            {!! Breadcrumbs::render($breadcrumb) !!}
        </div>
        
        
        @yield('content')
    </div>
@endsection