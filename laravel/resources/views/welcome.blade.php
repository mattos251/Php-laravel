@extends('layouts.main')

@section('title','HDC Events')

@section('content')

    <div id="search-container" class="col-md-12">

        <h1>Busque seu Evento</h1>
        <form action="">
            <input type="text" id="search" name="search" class="form-control" placeholder=" procurar..." >
        </form>

    </div>

    <div id="events-container" class="col-md-12">

        <h2>Proximos eventos</h2>
        <p class="subtitle">veja os eventos dos próximos dias </p>

        <div id="card-container" class="row">
            @foreach($events as $event)
                <div class="card col-md-3">
                    <img src="/img/events/{{ $event->image }}" alt="{{$event ->title}}">
                    <div class="card-body">
                        <p class="card-date"> 25/12/2000</p>
                        <h5 class="card-title">{{ $event->title }}</h5>
                        <p class="card-participants">X participantes</p>
                        <a href="/events/{{ $event->id}}" class="btn btn-primary" > saiba mais </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
