@extends('layouts.app')

@section('content')
    <h2>Inserisci nuovo fumetto</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title">Titolo</label>
            <input type="input" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="description">Descrizione</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        <div class="mb-3">
            <label for="image">Immagine</label>
            <input type="input" class="form-control" id="image" name="thumb">
        </div>
        <div class="mb-3">
            <label for="price">Prezzo</label>
            <input type="input" class="form-control" id="price" name="price">
        </div>
        <div class="mb-3">
            <label for="series">Serie</label>
            <input type="input" class="form-control" id="series" name="series">
        </div>
        <div class="mb-3">
            <label for="sale_date">Data di uscita</label>
            <input type="input" class="form-control" id="sale_date" name="sale_date">
        </div>
        <div>
            <label for="type" class="form-label">Tipologia</label>
            <select name="type" id="type" class="form-select">
                <option selected>Seleziona</option>
                <option value="comic book">Comico</option>
                <option value="graphic novel">Novella</option>
            </select>
        </div>
        <button class="btn btn-success" type="submit">Crea</button>
    </form>
@endsection
