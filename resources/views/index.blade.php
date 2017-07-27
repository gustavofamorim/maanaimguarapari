@extends('layouts.default', ['home' => true,
                             'ogpDescription'=> 'Website do Maanaim de Guarapari da Igreja Cristã Maranata!'])

@section('title', 'Home')

@section('content')
    <div class="container-fluid">
        <section class="row section-header">
            <video class="bg-video" poster="{{ asset('img/maanaim_presentation.jpg') }}" playsinline autoplay muted loop>
                <source src="{{ asset('img/maanaim_presentation.mp4') }}" type="video/mp4">
            </video>
            {!! file_get_contents(asset('img/logo.o.svg')) !!}
            <div class="arrow">
              <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
            </div>
        </section>
        <section class="row section-projects">
            <div class="col-sm-3 col-md-2 section-projects-title">
                <h1>Nossos Projetos</h1>
            </div>
            <div class="col-sm-9 col-md-10">
                <div class="row">
                  <div class="col-xs-6 col-md-3 projeto">
                    <a href="{{ route('aprendiz-jr') }}" class="thumbnail">
                      <img src="{{ asset('img/projeto-aprendiz-jr.png') }}" alt="Projeto Aprendiz Júnior">
                    </a>
                  </div>
                </div>
            </div>
        </section>
        <section class="row section-next-events">
            <div class="col-sm-3 col-md-2 section-next-events-title">
                <h1>Próximos eventos</h1>
                <a href="{{ route('eventos') }}"><h4>Ver Calendário</h4></a>
            </div>
            <div class="col-sm-9 col-md-10">
                <div class="row">
                  @component('components.events')
                    @slot('additionalClass', 'event-transparent')
                    @slot('title', 'Ensaio com os Jovens')
                    @slot('date', '30/07/17')
                    @slot('time', '14')
                    @slot('location', 'Maanaim de Guarapari')
                    @slot('image', asset('img/coral_de_jovens.o.svg'))
                    @slot('description', 'Um trabalho de louvor e adoração a Deus realizado com todos os jovens da Igreja Cristã Maranata de Guarapari.')
                    @slot('versicle', '"Eu vos escrevi, jovens, porque sois fortes, e a palavra de Deus está em vós, e já vencestes o maligno." 1 João 2:14')
                    @slot('subscriptionLink', 'https://docs.google.com/forms/d/e/1FAIpQLSd_CBJ6eYvd1fGCXt8JNZpiIUP9mpLrLt2gf4G5xXAuNwtueg/viewform')
                    @slot('materialLink', 'https://drive.google.com/drive/folders/0BwuioFg__yU_ZW03V2dxV0lKM0E')
                  @endcomponent
                </div>
            </div>
        </section>
        <section class="row section-sites">
            <div class="col-sm-3 col-md-2 section-sites-title">
                <h1>Conheça a Maranata</h1>
            </div>
            <div class="col-sm-9 col-md-10">
                <div class="row">
                  <div class="col-xs-6 col-md-3 site">
                    <a target="_blank" href="http://www.igrejacristamaranata.org.br" class="thumbnail">
                      <img src="{{ asset('img/icm-logo.png') }}" alt="Site oficial da Igreja Cristã Maranata">
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-3 site">
                    <a target="_blank" href="http://www.radiomaanaim.com.br/" class="thumbnail">
                      <img src="{{ asset('img/radio-maanaim-logo.png') }}" alt="Rádio Maanaim">
                    </a>
                  </div>
                </div>
            </div>
        </section>
        @include('components.default-footer')
    </div>
@endsection