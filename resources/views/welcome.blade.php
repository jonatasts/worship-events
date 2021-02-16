@extends('layouts.main')

@section('title', 'Worship Events')

@section('content')
<div id="search-container" class="col-md-12">
    <h1>Busque por um evento gospel</h1>
    <form action="/" method="GET">
        @csrf
        <div class="input-group">
            <input required class="form-control py-2 border-right-0 border" type="search" id="search" name="search" placeholder="Procurar...">
            <span class="input-group-append">
                <button class="btn btn-submit border-left-0 border" type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </span>
        </div>
    </form>
</div> 

<div id="events-container" class="col-md-12">
        @if ($search)
            <h2>Buscando por: <em>{{ $search }}</em></h2>
        @else
            <h2>Próximos Eventos</h2>
            <p class="subtitle">Veja os eventos dos próximos dias</p>
        @endif

        <div id="cards-container" class="row">
            @foreach($events as $event)
            <div class="card col-md-3">
                <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
                <div class="card-body">
                    <div class="card-date">{{ date('d/m/Y',strtotime($event->date)) }}</div>
                    <h5 class="card-title">{{ $event->title }}</h5>
                    <p class="card-participants">X Participantes</p>
                    <a href="/events/{{ $event->id }}" class="btn btn-outline-warning btn-more ">Saber mais</a>
                </div>
            </div>
            @endforeach

            @if(count($events) == 0 && $search)
                <p>Não foi possível encontrar nenhum evento com "<strong><em>{{ $search }}</em></strong>". <a href="/">Ver todos</a></p>
            @elseif(count($events) == 0)
                <h2>Não há eventos disponiveis!</h2>
                <a href="/events/create" class="btn btn-outline-warning btn-more ">Crie um evento</a>
            @endif
        </div>
</div> 
@endsection
