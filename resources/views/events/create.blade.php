@extends('layout.main')

@section('title', 'Create Event')

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie o seu evento:</h1>

        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Imagem:</label>
                <input type="file" id="image" name="image" class="form-control-file" placeholder="Envie sua imagem aqui">
            </div>
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento" required>
            </div>
            <div class="form-group">
                <label for="title">Cidade</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento" required>
            </div>
            <div class="form-group">
                <label for="Title">O evento será privado?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="title">Descrição</label>
                <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
            </div>

            <input type="submit" class="btn btn-primary" value="Criar evento">
 
        </form>
    </div>

@endsection