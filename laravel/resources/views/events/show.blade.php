@extends('layouts.main')

@section('title', $events->title)

@section('content')

    <div class="col-md-10 offset-md-2" >

        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/events/{{$events->image}}" class="img-fluid" alt="{{$events->title}}">
                <h1>pagina de eventos</h1>
                <h4> caadastre aqui seu evento </h4>
            </div>

            <div id="info-container" class="col-md-6">

            </div>

        </div>

    </div>

@endsection
