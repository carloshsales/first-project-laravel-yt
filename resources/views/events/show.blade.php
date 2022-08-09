@extends('layout.main')

@section('title', $event->title)

@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="../public-img/{{$event->image}}" class="img-fluid" alt="{{$event->description}}">
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{$event->title}}</h1>
                <p class="event-city" ><ion-icon name="ios-navigate"></ion-icon> {{$event->city}}</p>
                <p class="events-participants" ><ion-icon name="ios-people""></ion-icon>Participantes</p>
                <p class="event-owner" ><ion-icon name="star"></ion-icon>Criador do evento</p>
                <a href="#" class="btn btn-primary" id="event-submit">Confirmar presença</a>
                <h3>O evento contará com:</h3>
                <ul class="items-list">
                    @foreach($event->items as $item)
                        <li><ion-icon name="play"></ion-icon>{{$item}}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-12" id="description-container">
                <h3>Sobre o evento:</h3>
                <p class="event-description">{{$event->description}}</p>
            </div>
        </div>
    </div>

@endsection