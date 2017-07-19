@extends('layouts.default', ['eventos' => true,
                             'ogpDescription'=> 'Calendário de eventos do Maanaim de Guarapari.'])

@section('title', 'Eventos')

@section('content')
<div class="container">
    <div class="row">
        <h1>Calendário de Eventos</h1>
        <p>Aqui estão nossos próximos eventos! Inscreva-se!</p>
    </div>
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
@endsection