<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Title --}}
    <title>@yield('tag_title')</title>
    {{-- Icon --}}
    <link rel="icon" href=" {{ asset('img/favicon.ico') }} ">

    {{-- Google font --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    {{-- Fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Css --}}
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
</head>

{{-- BODY --}}
<body>

    {{-- Header --}}
    @include('partials.header')

    {{-- Segnaposto per il contenuto del main --}}
    <main>
        @yield('main_content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

</body>
{{-- BODY END --}}
</html>