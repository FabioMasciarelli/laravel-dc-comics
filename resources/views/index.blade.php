@extends('layouts.app')

@section('content')
    <h1>Lista Comics</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Series</th>
                <th scope="col">Type</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comicsArray as $comic)
                <tr>
                    <th scope="row">{{ $comic->title }}</th>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->type }}</td>
                    <td>
                        <a href="{{ route('comics.show', $comic->id) }}" class="card-link">Scopri di più</a>
                        <a href="{{ route('comics.create') }}" class="card-link">Aggiungi</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
