{{-- Estensione per il layout --}}
@extends('layouts.app')

{{-- Main --}}
@section('main_content')
    {{-- Jumbotron --}}
    <section>
        <div class="jumbotron"></div>
    </section>

    {{-- Main content --}}
    <section>
        <div class="comics_container">
            <div class="container">

                {{-- Comics --}}
                <div class="comics">

                    {{-- Star foreach --}}
                    @foreach ($comics as $comic)

                    {{-- Comic --}}
                    <div class="comic">
                        <div class="cover">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                        </div>
                        <span class="cover_title">{{ $comic['series'] }}</span>
                    </div>

                    @endforeach
                    {{-- End foreach --}}
                </div>

                {{-- Button --}}
                <div class="button">
                    <a href="#">Load more</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Shop section --}}
    <section>
        <div class="shop_bg">
            <div class="container">
                <ul class="shop_links">
                    <li>
                        <a href="#"><img src="../img/buy-comics-digital-comics.png" alt="buy-comics-digital-comics"> Digital comics</a>
                    </li>
                    <li>
                        <a href="#"><img src="../img/buy-comics-merchandise.png" alt="buy-comics-merchandise"> DC merchandise</a>
                    </li>
                    <li>
                        <a href="#"><img src="../img/buy-comics-subscriptions.png" alt="buy-comics-subscriptions"> Subscription</a>
                    </li>
                    <li>
                        <a href="#"><img src="../img/buy-comics-shop-locator.png" alt="buy-comics-shop-locator"> Comic shop locator</a>
                    </li>
                    <li>
                        <a href="#"><img src="../img/buy-dc-power-visa.svg" alt="buy-dc-power-visa"> DC power visa</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection