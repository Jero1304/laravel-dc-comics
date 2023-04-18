@extends('layouts.app')

@section('content')
    <div class="container create-header text-center">
        <h1>Modifica: 
        <br>
            {{ $comic->title }}
        </h1>
    </div>

    <div class="container create-body">
        <form action="{{ route('comics.update', $comic) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="d-flex justify-content-between">

                <div class="col-5">
                    <div class="mb-3">
                        <label for="title" class="form-label form-title">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="form-label form-title">Imagine (url)</label>
                        <input type="text" class="form-control" id="thumb" name="thumb"
                            value="{{ $comic->thumb }}">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label form-title">Prezzo</label>
                        <input type="text" class="form-control" id="price" name="price"
                            value="{{ $comic->price }}">
                    </div>

                    <div class="mb-3">
                        <label for="series" class="form-label form-title">Serie</label>
                        <input type="text" class="form-control" id="series" name="series"
                            value="{{ $comic->series }}">
                    </div>

                    <div class="mb-3">
                        <label for="sale_date" class="form-label form-title">Data di vendita</label>
                        <input type="text" class="form-control" id="sale_date" name="sale_date"
                            value="{{ $comic->sale_date }}">
                    </div>
                </div>


                <div class="col-6">
                    <div class="mb-3 description">
                        <label for="description" class="form-label form-title">Descrizione</label>
                        <textarea class="form-control" id="description" name="description" cols="30" rows="10">
                        {{ $comic->description }}
                    </textarea>
                    </div>
                </div>
            </div>


            <div class=" btn-save">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
