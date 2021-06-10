{{-- Estensione per il layout --}}
@extends('layouts.app')

{{-- Titolo della Pagina --}}
@section('tag_title')
    DC | Welcome to DC
@endsection

{{-- Main --}}
@section('main_content')

    {{-- Main content --}}
    <section>
        <div class="comics_container">
            <div class="container">

                {{-- Comics --}}
                <div class="comics">

                    <div class="tag">
                        Current Series
                    </div>

                    {{-- Star foreach --}}
                    @foreach ($comics as $comic)

                    {{-- Comic --}}
                    <div class="comic">
                        <div class="cover">
                            <a href="{{ route('comic_details', [
                                'id' => $comic['id']
                                ]) }}">
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                            </a>
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
                        <a href="#"><img src="../img/buy-comics-digital-comics.png" alt="buy-comics-digital-comics"><span>Digital comics</span></a>
                    </li>
                    <li>
                        <a href="#"><img src="../img/buy-comics-merchandise.png" alt="buy-comics-merchandise"><span>DC merchandise</span></a>
                    </li>
                    <li>
                        <a href="#"><img src="../img/buy-comics-subscriptions.png" alt="buy-comics-subscriptions"><span>Subscription</span></a> 
                    </li>
                    <li>
                        <a href="#"><img src="../img/buy-comics-shop-locator.png" alt="buy-comics-shop-locator"><span>Comic shop locator</span></a>
                    </li>
                    <li>
                        <a href="#"><img class="ms_img" src="../img/buy-dc-power-visa.svg" alt="buy-dc-power-visa"><span>DC power visa</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection