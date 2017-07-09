@extends('layouts.default', compact('aditional'))

@section('page-content')
    @include('components.navbar', compact('home', 'eventos', 'conheca', 'voluntario', 'aditional'))
    <div class="content project-content">
        <div class="container-fluid breadcrumb-container breadcrumb-fixed-bellownavbar">
            {!! Breadcrumbs::render($breadcrumb) !!}
        </div>
        
        @yield('content')
    </div>
@endsection