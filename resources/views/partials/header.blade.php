{{-- Header --}}
<header>
   {{-- Top header --}}
   <div class="top_header">
      <div class="container">
         {{-- &nbsp; codice che permette di avere un pò di spazio extra tra le parole, usato perchè altrimenti poco leggibile --}}
         <a href="#">dc power<span>sm</span>&nbsp; visa®</a>
         <a href="#">additional&nbsp;DC&nbsp; sites <i class="fas fa-sort-down"></i></a>
      </div>
   </div>

   {{-- Nav --}}
   <div class="container">
      {{-- Flex container --}}
      <div class="flex_container">
         {{-- Logo --}}
         <div class="logo">
            <a href="/">
               <img src="{{ asset('img/dc-logo.png') }}" alt="DC logo">
            </a>
         </div>

         {{-- Menu --}}
         <ul class="menu">
            <li>
               <a href="#">Characters</a>
            </li>
            <li class="active">
               <a href="#">Comics</a>
            </li>
            <li>
               <a href="#">Movies</a>
            </li>
            <li>
               <a href="#">Tv</a>
            </li>
            <li>
               <a href="#">Games</a>
            </li>
            <li>
               <a href="#">Collectibles</a>
            </li>
            <li>
               <a href="#">Videos</a>
            </li>
            <li>
               <a href="#">Fans</a>
            </li>
            <li>
               <a href="#">News</a>
            </li>
            <li>
               <a href="#">Shop <i class="fas fa-sort-down"></i></a>
            </li>
         </ul>
         {{-- Menu End --}}

         {{-- Search bar --}}
         <div class="search">
            <input type="text" placeholder="Search"><i class="fas fa-search"></i>
         </div>
      </div>
      {{-- Flex container End --}}
   </div>

   {{-- Jumbotron --}}
   <section>
      <div class="jumbotron"></div>
  </section>

</header>
{{-- Header end--}}