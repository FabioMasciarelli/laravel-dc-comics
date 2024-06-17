@extends('layouts.app')

@section('content')
    <h1>Lista Comics</h1>
    <a href="{{ route('comics.create') }}" class="card-link btn btn-success">Aggiungi</a>
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
                        <a href="{{ route('comics.show', $comic->id) }}" class="card-link btn btn-success">Scopri di più</a>
                        <a href="{{ route('comics.edit', $comic->id) }}" class="card-link btn btn-warning">Modifica</a>

                        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Cancella</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
