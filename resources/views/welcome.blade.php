@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <a href="{{ route('comics.show', $comic) }}">
                    <div class="col-3">
                        <img src="{{ $comic->thumb }}">
                        <h3>{{ $comic->title }}</h3>
                    </div>
                </a>
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
