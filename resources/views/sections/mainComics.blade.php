<?php
$allcomics = config('comics')
?>


@foreach ($allcomics as $comic)
    <div class="card">
        <div class="img-container">

            <img src="{{ $comic['thumb'] }}" alt="copertina">
        </div>
        <h4>{{ $comic['series'] }}</h4>
    </div> 
@endforeach  
