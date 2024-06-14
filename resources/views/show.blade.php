@extends('layouts.app')

@section('content')
    <h1>dettagli:{{$comic->title}}</h1>
    <div class="card" style="width: 18rem;">
        <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{$comic->title}}">
        <div class="card-body">
            <h5 class="card-title">{{$comic->title}}</h5>
            <p class="card-text">{{$comic->description}}</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">{{$comic->price}}</li>
            <li class="list-group-item">{{$comic->series}}</li>
            <li class="list-group-item">{{$comic->sale_date}}</li>
            <li class="list-group-item">{{$comic->type}}</li>
        </ul>
        <div class="card-body">
            <a href="{{ route('comics.show', $comic->id) }}" class="card-link">Scopri di più</a>
        </div>
    </div>

@endsection