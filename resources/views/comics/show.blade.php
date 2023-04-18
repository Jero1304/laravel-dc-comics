@extends('layouts.app')

@section('content')
    <div class="show-bg">

        <div class="show-thumb">
            <div class="container">
                <img src="{{ $comic->thumb }}">
            </div>
        </div>

        <div class="container comic-info">
            <h1>{{ $comic->title }}</h1>
            <div class="comic-price">
                <span style="color: rgb(108, 190, 108);">U.S. Price:</span>
                ${{ $comic->price }}
            </div>
            <p class="comic-description">{{ $comic->description }}</p>
        </div>

    </div>
    <div class="show-bg-gray">
        <div class="container comic-specs">
            <h3>Specs</h3>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                </li>
                <li class="list-group-item">
                    <div class="specs-title">Series:</div>
                    <div>{{ $comic->series }}</div>
                </li>
                <li class="list-group-item">
                    <div class="specs-title">Prezzo:</div>
                    <div>${{ $comic->price }}</div>
                </li>
                <li class="list-group-item">
                    <div class="specs-title">Data di vendita:</div>
                    <div>{{ $comic->sale_date }}</div>
                </li>
                <li class="list-group-item">
                </li>
            </ul>
        </div>
    </div>
@endsection
