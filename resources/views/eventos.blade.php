@extends('layouts.default', ['eventos' => true])

@section('content')

<div class="container">
    <div class="row">
        <h1>Calendário de Eventos</h1>
        <p>Aqui estão nossos próximos eventos! Inscreva-se!</p>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail event">
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

@endsection