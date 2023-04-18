@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-auto py-5">
                <a class="btn btn-primary" href="{{ route('comics.create') }}">
                    new comic
                </a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-4">
                    <a href="{{ route('comics.show', ['comic' => $comic]) }}">
                        <h3>{{ $comic->title }} /comics</h3>
                    </a>
                </div>

                <a class="btn btn-primary" href="{{ route('comics.edit', $comic) }}">Edit</a>

                <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Delete">
                </form>
            @endforeach
        </div>
    </div>
@endsection
