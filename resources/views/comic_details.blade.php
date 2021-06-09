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
        
                    <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="">
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
                    <h1>Testo: extra</h1>
                    <div class="availability_info">
                        <div class="price">
                            <span>20.99</span>
                            <span>availability</span>
                        </div>
                        <select name="availability" value="Check availability">

                        </select>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore similique, fuga provident voluptates corrupti voluptate officia sequi? Beatae fugiat perferendis nemo, eum id voluptates, debitis, assumenda libero aspernatur repudiandae voluptatibus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum molestiae doloribus ex culpa quo autem unde obcaecati, saepe exercitationem quas ut sint enim provident dolorum facilis nostrum ullam similique voluptas!</p>
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