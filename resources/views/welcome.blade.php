@extends('layouts.main')

@section('title', 'Worship Events')

@section('content')
<div id="search-container" class="col-md-12">
    <h1>Busque por um evento gospel</h1>
    <form action="" method="get">
        <input type="text" id="seach" class="form-control" placeholder="Procurar...">
    </form>
</div> 

<div id="events-container" class="col-md-12">
    <h2>Próximos Eventos</h2>
    <p class="subtitle">Veja os eventos dos próximos dias</p>

    <div id="cards-container" class="row">
        @foreach($events as $event)
        <div class="card col-md-3">
            <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
            <div class="card-body">
                <div class="card-date">09/02/2021</div>
                <h5 class="card-title">{{ $event->title }}</h5>
                <p class="card-participants">X Participantes</p>
                <a href="/events/{{$event->id}}" class="btn btn-outline-warning btn-more ">Saber mais</a>
            </div>
        </div>
        @endforeach
    </div>
</div> 
@endsection
