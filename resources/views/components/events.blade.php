<div class="col-sm-6 col-md-3">
    <div class="thumbnail event {{ isset($additionalClass) ? $additionalClass : '' }}">
        <img class="event-image" src="{{ $image }}">
        <div class="caption event-caption">
            <h3 class="event-title">{{ $title }} - {{ $date }} as {{ $time }} no {{ $location }}</h3>
            <p>{{ $description }}</p>
            <p><strong><em>{{ $versicle }}</em></strong></p>
            <p>
                <a href="{{ $subscriptionLink }}" target="_blank" class="btn btn-primary" role="button">Inscrever-se</a> 
                <a href="{{ $materialLink }}" target="_blank" class="btn btn-default" role="button">Material</a>
            </p>
        </div>
    </div>
</div>