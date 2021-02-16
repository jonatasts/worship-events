@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie um evento</h1>
    
    <form action="/events" method="POST">
        @csrf
        <div class="form-group">
            <label for="title" class="label-create">Evento</label>
            <input required type="text" name="title" id="title" class="form-control field-create">
        </div>

        <div class="form-group">
            <label for="city" class="label-create">Cidade</label>
            <input required type="text" name="city" id="city" class="form-control field-create">
        </div>

        <div class="form-group">
            <p class="label-create">O evento é privado?</p>
            <div class="form-check form-check-inline">
                <input required class="form-check-input field-create" type="radio" name="private" id="yes_private" value="1">
                <label class="form-check-label" for="yes_private">
                    Sim
                </label>
            </div>
            
            <div class="form-check form-check-inline">
                <input checked class="form-check-input field-create" type="radio" name="private" id="no_private" value="0">
                <label class="form-check-label" for="no_private">
                    Não
                </label>
            </div>
        </div>

        <div class="form-group">
            <label for="description" class="label-create">Descrição</label>
            <textarea required id="description" name="description" rows="4" class="form-control field-create" style="resize: none"></textarea>
        </div>

        <button disabled type="submit" class="btn btn-warning" style="background-color: #F2A340">Criar Evento</button>
    </form>
</div>
<script>
    $(".field-create" ).on("change", validateFields);
    $(".field-create" ).on("keyup", validateFields);
    $(".field-create" ).on("focus", validateFields);

    function validateFields() {
        var fields = true;

        $("form .field-create").each(function() {
            if ($(this).val() == "")
                fields = false;
        });

        if (fields) 
            $("button[type=submit]").attr("disabled", false)
        else
            $("button[type=submit]").attr("disabled", true)
    }
</script>
@endsection
