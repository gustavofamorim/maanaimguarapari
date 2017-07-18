@extends('layouts.default', ['home' => true])

@section('title', 'Home')

@section('content')
    <div class="container-fluid">
        <section class="row section-header">
            <video class="bg-video" poster="{{ asset('img/maanaim_presentation.jpg') }}" playsinline autoplay muted loop>
                <source src="{{ asset('img/maanaim_presentation.mp4') }}" type="video/mp4">
            </video>
            <img class="maanaim-logo" src="{{ asset('img/logo.o.svg') }}"></img>
              <div class="arrow">
                <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
              </div>
        </section>
        <section class="row section-projects">
            <div class="col-sm-2 section-projects-title">
                <h1>Nossos Projetos</h1>
            </div>
            <div class="col-sm-10">
                <div class="row">
                  <div class="col-xs-6 col-sm-3 projeto">
                    <a href="{{ route('aprendiz-jr') }}" class="thumbnail">
                      <img src="{{ asset('img/projeto-aprendiz-jr.png') }}" alt="Projeto Aprendiz Júnior">
                    </a>
                  </div>
                  <div class="col-xs-6 col-sm-3 projeto">
                    <a href="{{ route('preciosa-semente') }}" class="thumbnail">
                      <img src="{{ asset('img/preciosa-semente.png') }}" alt="Projeto Aprendiz Júnior">
                    </a>
                  </div>
                  <div class="col-xs-6 col-sm-3 projeto">
                    <a href="{{ route('coral-jovens') }}" class="thumbnail">
                      <img src="{{ asset('img/coral_de_jovens.o.svg') }}" alt="Coral de Jovens">
                    </a>
                  </div>
                </div>
            </div>
        </section>
        <section class="row section-next-events">
            <div class="col-sm-2 section-next-events-title">
                <h1>Próximos eventos</h1>
                <a href="{{ route('eventos') }}"><h4>Ver Calendário</h4></a>
            </div>
            <div class="col-sm-10">
                <div class="row">
                  @component('components.events')
                    @slot('title', 'Ensaio com os Jovens')
                    @slot('date', '15/07/17')
                    @slot('time', '14')
                    @slot('image', asset('img/coral_de_jovens.o.svg'))
                    @slot('description', 'Um trabalho de louvor e adoração a Deus realizado com todos os jovens da Igreja Cristã Maranata de Guarapari.')
                    @slot('versicle', '"Eu vos escrevi, jovens, porque sois fortes, e a palavra de Deus está em vós, e já vencestes o maligno." 1 João 2:14')
                    @slot('subscriptionLink', 'https://docs.google.com/forms/d/e/1FAIpQLSd_CBJ6eYvd1fGCXt8JNZpiIUP9mpLrLt2gf4G5xXAuNwtueg/viewform')
                    @slot('materialLink', 'https://drive.google.com/drive/folders/0BwuioFg__yU_ZW03V2dxV0lKM0E')
                  @endcomponent
                </div>
            </div>
        </section>
        @include('components.default-footer')
    </div>
@endsection