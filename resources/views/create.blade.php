@extends('layouts.app')

@section('content')
    <form action="{{ route(comics . create) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title">Titolo</label>
            <input type="input" class="form-control" id="title" name="">
        </div>
    </form>
@endsection
