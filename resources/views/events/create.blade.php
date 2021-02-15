@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie um evento</h1>
    
    <form action="/events" method="POST">
        <div class="form-group">
            <label for="title" class="label-create">Evento</label>
            <input required type="text" name="title" id="title" class="form-control">
        </div>

        <div class="form-group">
            <label for="city" class="label-create">Cidade</label>
            <input required type="text" name="city" id="city" class="form-control">
        </div>

        <div class="form-group">
            <p class="label-create">O evento é privado?</p>
            <div class="form-check form-check-inline">
                <input required class="form-check-input" type="radio" name="private" id="yes_private" value="1">
                <label class="form-check-label" for="yes_private">
                    Sim
                </label>
            </div>
            
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="private" id="no_private" value="0">
                <label class="form-check-label" for="no_private">
                    Não
                </label>
            </div>
        </div>

        <div class="form-group">
            <label for="description" class="label-create">Descrição</label>
            <textarea required name="" id="description" name="description" rows="4" class="form-control" style="resize: none"></textarea>
        </div>

        <button type="submit" class="btn btn-warning">Criar Evento</button>
    </form>
</div>

@endsection
