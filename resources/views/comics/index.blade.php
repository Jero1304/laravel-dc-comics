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
            @endforeach
        </div>
    </div>
@endsection
