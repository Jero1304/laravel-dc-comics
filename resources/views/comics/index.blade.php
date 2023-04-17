@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-4">
                    <a href="{{ route('comics.show', ['comic' => $comic]) }}">
                        <h3>{{ $comic->title }} /comics</h3>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
