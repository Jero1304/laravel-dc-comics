@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="welcome-current-series">
            <h1>current series</h1>
        </div>
        <div class="row thumb-container">
            @foreach ($comics as $comic)
                <div class="col-3 py-4">
                    <a href="{{ route('comics.show', $comic) }}">
                        <img class="welcome-thumb" src="{{ $comic->thumb }}">
                        <h3 class="text-light">{{ $comic->title }}</h3>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <div id="bg-color-blue">
        <div class="container">
            <ul class="menu">
                <li class="menu-item">
                    <img src="/img/buy-comics-digital-comics.png" alt="">
                    item
                </li>
                <li class="menu-item">
                    <img src="/img/buy-comics-merchandise.png" alt="">
                    item
                </li>
                <li class="menu-item">
                    <img src="/img/buy-comics-shop-locator.png" alt="">
                    item
                </li>
                <li class="menu-item">
                    <img src="/img/buy-comics-subscriptions.png" alt="">
                    item
                </li>
                <li class="menu-item">
                    <img src="/img/buy-dc-power-visa.svg" alt="">
                    item
                </li>
            </ul>
        </div>
    </div>
@endsection
