@extends('layouts.main')

@section('title','HDC Events')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">

    <form action="/events" method="POST" class="form-create-event" enctype="multipart/form-data">
        <div class="title-cadastro" > <h1>Crie o seu evento</h1> </div>
        @csrf
        <div class="form-group">
            <label for="image">Imagem</label>
            <input type="file" class="form-control-file" id="image" name="image" placeholder="Nome da Imagem">
        </div>

        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento">
        </div>

        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do Evento">
        </div>


        <div class="form-group">
            <label for="title">O evento é privado?</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>

        <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea name="description" id="description" class="form-control">coloque uma descrição</textarea>
        </div>

        <input type="submit" class="btn-primary-cadastro" value="criar evento">
    </form>
</div>

@endsection
