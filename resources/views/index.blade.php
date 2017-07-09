@extends('layouts.default', ['home' => true])    

@section('content')
    <div class="container-fluid">
        <section class="row section-header">
            <div class="bg-video-container">
                <video class="bg-video" poster="{{ asset('img/maanaim_presentation.jpg') }}" playsinline autoplay muted loop>
                    <source src="{{ asset('img/maanaim_presentation.mp4') }}" type="video/mp4">
                </video>
            </div>
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
                  <div class="col-xs-6 col-sm-5 col-md-3 projeto">
                    <a href="{{ route('aprendiz-jr') }}" class="thumbnail">
                      <img src="{{ asset('img/projeto-aprendiz-jr.png') }}" alt="Projeto Aprendiz Júnior">
                    </a>
                  </div>
                  <div class="col-xs-6 col-sm-5 col-md-3 projeto">
                    <a href="{{ route('preciosa-semente') }}" class="thumbnail">
                      <img src="{{ asset('img/preciosa-semente.png') }}" alt="Projeto Aprendiz Júnior">
                    </a>
                  </div>
                  <div class="col-xs-6 col-sm-5 col-md-3 projeto">
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
                  <div class="col-sm-6 col-md-3">
                    <div class="thumbnail event event-transparent">
                      <img class="event-image" src="{{ asset('img/coral_de_jovens.o.svg') }}">
                      <div class="caption event-caption">
                        <h3 class="event-title">Ensaio com os Jovens - 15/07/17 às 14 horas</h3>
                        <p>Um trabalho de louvor e adoração a Deus realizado com todos os jovens da Igreja Cristã Maranata de Guarapari.</p>
                        <p><strong>"Eu vos escrevi, jovens, porque sois fortes, e a palavra de Deus está em vós, e já vencestes o maligno."</strong></p>
                        <p><strong>1 João 2:14</strong></p>
                        <p>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSd_CBJ6eYvd1fGCXt8JNZpiIUP9mpLrLt2gf4G5xXAuNwtueg/viewform" target="_blank" class="btn btn-primary" role="button">Inscrever-se</a> 
                            <a href="https://drive.google.com/drive/folders/0BwuioFg__yU_ZW03V2dxV0lKM0E" target="_blank" class="btn btn-default" role="button">Material</a>
                            </p>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </section>
        @include('components.default-footer')
    </div>
@endsection