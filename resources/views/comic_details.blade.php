{{-- Estensione per il layout --}}
@extends('layouts.app')

{{-- Titolo della Pagina --}}
@section('tag_title')
    Comics | DC
@endsection

{{-- Comic details Main --}}
@section('main_content')
    {{-- Top section --}}
    <section>
        {{-- Top main --}}
        <div class="top_main">
            <div class="details_container">
                {{-- Comic cover --}}
                <div class="comic_cover">
        
                    <img src="{{ $comic_details['thumb'] }}" alt="{{ $comic_details['series'] }}">
                    <div class="cover_top">
                        Comic Book
                    </div>
            
                    <div class="cover_bottom">
                        <a href="#">View gallery</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Middle section --}}
    <section>
        <div class="details_container">
            {{-- Flexbox --}}
            <div class="details_flex">

                {{-- Left col --}}
                <div class="main_info">
                    {{-- Comic title --}}
                    <h1>{{ $comic_details['title'] }}</h1>

                    <div class="availability_info">

                        {{-- Price --}}
                        <div class="price">
                            <div>U.S. Price: <span>{{ $comic_details['price'] }}</span></div>
                            <div>Available</div>
                        </div>

                        {{-- Availability check --}}
                        <div class="availability_check">
                            <a href="#">Check Availability <i class="fas fa-sort-down"></i></a>
                        </div>
                    </div>

                    {{-- Description --}}
                    <p>{{ $comic_details['description'] }}</p>
                </div>

                {{-- Right col --}}
                <div class="advertisement">
                    <span>Advertisement</span>
                    <img src="{{ asset('img/adv.jpg') }}" alt="advertisement">
                </div>
            </div>
        </div>
    </section>

    {{-- Section bottom --}}
    <section>
        {{-- Background --}}
        <div class="more_details_bg">
            {{-- Details container --}}
            <div class="details_container">
                {{-- Flex container --}}
                <div class="more_details_flex">

                    {{-- Talent area --}}
                    <div class="talent_box">

                        <h2>Talent</h2>

                        {{-- Artists area --}}
                        <div class="artists_box">
                            <span>
                                Art by:
                            </span>

                            <div class="artists_name">
                                {{-- Ciclo l'array per estrarre ogni singolo artista --}}
                                @foreach($comic_details['artists'] as $artist)
                                    {{-- Stampo i nomi degli artisti --}}
                                    <span class="name">
                                        {{-- Condizione che concatena una virgola dopo il nome se esso non è l'ultimo --}}
                                        @if (!$loop->last)
                                            {{ $artist }}
                                            <span class="punctuation">, </span>
                                        {{-- Se il nome è l'ultimo presente stampa un punto subito dopo --}}
                                        @else 
                                            {{ $artist }}
                                            <span class="punctuation">.</span>
                                        @endif
                                    </span>
                                @endforeach
                            </div>
                        </div>

                        {{-- Writers area --}}
                        <div class="writers_box">
                            <span>
                                Written by:
                            </span>
                            <div class="writers_name">
                                {{-- Ciclo l'array per estrarre ogni singolo artista --}}
                                @foreach ($comic_details['writers'] as $writer)
                                    {{-- Stampo i nomi degli artisti --}}
                                    <span class="name">
                                        {{-- Condizione che concatena una virgola dopo il nome se esso non è l'ultimo --}}
                                        @if (!$loop->last)
                                            {{ $writer }}
                                            <span class="punctuation">, </span>
                                        {{-- Se il nome è l'ultimo presente stampa un punto subito dopo --}}
                                        @else 
                                            {{ $writer }}
                                            <span class="punctuation">.</span>
                                        @endif
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    {{-- Talent area End --}}

                    {{-- Specs area --}}
                    <div class="specs_box">

                        <h2>Specs</h2>

                        {{-- Series --}}
                        <div class="series_box">
                            <span>
                                Series:
                            </span>

                            <span class="highlight">
                                {{ $comic_details['series'] }}
                            </span>
                        </div>

                        {{-- Price --}}
                        <div class="price_box">
                            <span>
                                U.S. Price:
                            </span>

                            <span>
                                {{ $comic_details['price'] }}
                            </span>
                        </div>

                        {{-- On Sale date --}}
                        <div class="date_box">
                            <span>
                                On Sale Date:
                            </span>

                            <span>
                                {{ $comic_details['sale_date'] }}
                            </span>
                        </div>
                    </div>
                    {{-- Specs area End --}}
                </div>
                {{-- Flex container End --}}
            </div>
            {{-- Details container End --}}
        </div>
    </section>

    {{-- Buy menu --}}
    <section>
        <div class="shop_bg_bottom">
            <div class="details_container">
                <div class="shop_icons">
                    <div class="digital">
                        <span>
                            Digital Comics
                        </span>
                        <span class="digital_img"></span>
                    </div>
    
                    <div class="shop">
                        <span>
                            Shop DC
                        </span>
                        <span class="shop_img"></span>
                    </div>
                    <div class="locator">
                        <span>
                            Comic shop locator
                        </span>
                        <span class="locator_img"></span>
                    </div>
                    <div class="subscriptions">
                        <span>
                            Subscriptions
                        </span>
                        <span class="subscriptions_img"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection