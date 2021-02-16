@extends('layouts.main')

@section('title', 'Editando: ' . $event->title)

@section('content')
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: {{ $event->title }}</h1>
    
    <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <p class="label-create">Imagem</p>
            <div class="d-flex justify-content-between">
                <div class="form-group input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input field-create" id="myInput" name="image" aria-describedby="myInput">
                        <label class="custom-file-label" for="myInput">Altere a imagem do evento...</label>
                    </div>
                </div>

                <div class="form-group">
                    <p class="label-create" style="margin-top: -2.3em; margin-left: 5px;">Imagem atual</p>
                    <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="img-preview" style="margin-top: -15px; margin-left: 8px;">            
                </div>
            </div>

        <div class="form-group">
            <label for="title" class="label-create">Título</label>
            <input required type="text" name="title" id="title" class="form-control field-create" value="{{ $event->title }}">
        </div>

        <div class="form-group">
            <label for="date">Data</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ $event->date->format('Y-m-d') }}">
          </div>

        <div class="form-group">
            <label for="city" class="label-create">Cidade</label>
            <input required type="text" name="city" id="city" class="form-control field-create" value="{{ $event->city }}">
        </div>

        <div class="form-group">
            <p class="label-create">O evento é privado?</p>
            <div class="form-check form-check-inline">
                <input {{ $event->private == 1 ? "checked" : "" }} required class="form-check-input field-create" type="radio" name="private" id="yes_private" value="1">
                <label class="form-check-label" for="yes_private">
                    Sim
                </label>
            </div>
            
            <div class="form-check form-check-inline">
                <input {{ $event->private == 0 ? "checked" : "" }} class="form-check-input field-create" type="radio" name="private" id="no_private" value="0">
                <label class="form-check-label" for="no_private">
                    Não
                </label>
            </div>
        </div>

        <div class="form-group">
            <label for="description" class="label-create">Descrição</label>
            <textarea required id="description" name="description" rows="4" class="form-control field-create" style="resize: none">{{ $event->description }}</textarea>
        </div>

        <div class="form-group">
            <label class="label-create" for="title">Itens de infraestrutura</label>
            <div class="form-group">	
              <input @php echo in_array('Cadeiras', $event->items) ? "checked" : "" @endphp type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
            </div>
            <div class="form-group">	
              <input @php echo in_array('Palco', $event->items) ? "checked" : "" @endphp type="checkbox" name="items[]" value="Palco"> Palco
            </div>
            <div class="form-group">	
              <input @php echo in_array('Open Food', $event->items) ? "checked" : "" @endphp type="checkbox" name="items[]" value="Open Food"> Open food
            </div>
            <div class="form-group">	
              <input @php echo in_array('Brindes', $event->items) ? "checked" : "" @endphp type="checkbox" name="items[]" value="Brindes"> Brindes
            </div>
        </div>

        <button type="submit" class="btn btn-warning" style="background-color: #F2A340">Editar Evento</button>
    </form>
</div>
<script>
    document.querySelector('.custom-file-input').addEventListener('change',function(e){
        var fileName = document.getElementById("myInput").files[0].name;
        var nextSibling = e.target.nextElementSibling;
        nextSibling.innerText = fileName
    });
</script>
@endsection
