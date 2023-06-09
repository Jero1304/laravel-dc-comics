@extends('layouts.app')

@section('content')
    <div class="container create-header">
        <h1>aggiungi comic</h1>
    </div>

    <div class="container create-body">
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="d-flex justify-content-between">

                <div class="col-5">
                    <div class="mb-3">
                        <label for="title" class="form-label form-title">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title"
                            placeholder="Inserisci Titolo" value="{{ old('title')}}">
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="form-label form-title">Imagine (url)</label>
                        <input type="text" class="form-control" id="thumb" name="thumb"
                            placeholder="Inserisci URL immagine" value="{{ old('thumb')}}">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label form-title">Prezzo</label>
                        <input type="text" class="form-control" id="price" name="price"
                            placeholder="Inserisci Prezzo" value="{{ old('price')}}">
                    </div>

                    <div class="mb-3">
                        <label for="series" class="form-label form-title">Serie</label>
                        <input type="text" class="form-control" id="series" name="series"
                            placeholder="Inserisci Serie" value="{{ old('series')}}">
                    </div>

                    <div class="mb-3">
                        <label for="sale_date" class="form-label form-title">Data di vendita</label>
                        <input type="text" class="form-control" id="sale_date" name="sale_date"
                            placeholder="Inserisci Data di vendita" value="{{ old('sale_date')}}">
                    </div>
                </div>

                <div class="col-6">
                    <div class="mb-3 description">
                        <label for="description" class="form-label form-title">Descrizione</label>
                        <textarea class="form-control" id="description" name="description" cols="30" rows="10"
                            placeholder="Inserisci Descrizione" value="{{ old('description')}}"></textarea>
                    </div>
                </div>
            </div>

            <div class=" btn-save">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div>
@endsection
