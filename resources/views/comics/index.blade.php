@extends('layouts.app')

@section('content')
    <div class="index-bg-header">

        <div class="container index-header">
            <h1 class="index-title">Crea il tuo fumetto personalizzato</h1>

            <div class="row justify-content-center">
                <div class="col-auto py-5">
                    <a class="btn btn-secondary p-3" href="{{ route('comics.create') }}">
                        Create New Comic
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="index-bg-body">
        <div class="container index-body">
            <h1 class="index-title">Comics Manage List</h1>

            <div class="row">
                <ul class="list-group list-group-flush">
                    @foreach ($comics as $comic)
                        <li class="list-group-item">

                            <div class="col-4">
                                <a class="index-info" href="{{ route('comics.show', ['comic' => $comic]) }}">
                                    <img src="{{ $comic->thumb }}">
                                    <h3>{{ $comic->title }}</h3>
                                </a>
                            </div>

                            <div class="index-btn col-4 index-info">
                                <a class="btn btn-primary mx-3" href="{{ route('comics.edit', $comic) }}">Edit</a>

                                <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger" value="Delete">
                                </form>
                            </div>

                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
