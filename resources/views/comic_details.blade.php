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
                    <img src="{{ asset('img/adv.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection