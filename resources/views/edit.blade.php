@extends('layouts.app')

@section('content')
    <h2>Inserisci nuovo fumetto</h2>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title">Titolo</label>
            <input type="input" class="form-control" id="title" name="title" value="{{ $comic->title }}">
        </div>
        <div class="mb-3">
            <label for="description">Descrizione</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ $comic->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="image">Immagine</label>
            <input type="input" class="form-control" id="image" name="thumb" value="{{ $comic->thumb }}">
        </div>
        <div class="mb-3">
            <label for="price">Prezzo</label>
            <input type="input" class="form-control" id="price" name="price" value="{{ $comic->price }}">
        </div>
        <div class="mb-3">
            <label for="series">Serie</label>
            <input type="input" class="form-control" id="series" name="series" value="{{ $comic->series }}">
        </div>
        <div class="mb-3">
            <label for="sale_date">Data di uscita</label>
            <input type="input" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
        </div>
        <div>
            <label for="type" class="form-label">Tipologia</label>
            <select name="type" id="type" class="form-select">
                <option @selected($comic->type === 'comic book') value="comic book">Comico</option>
                <option @selected($comic->type === 'graphic novel') value="graphic novel">Novella</option>
            </select>
        </div>
        <button class="btn btn-success" type="submit">Modifica</button>
    </form>
@endsection
