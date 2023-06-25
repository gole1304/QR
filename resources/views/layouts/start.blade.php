<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'SunLight QR') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Import custom CSS from public folder -->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>
    <body>
        @auth
            <div class="control_panel_btn">
                <a href="{{ route('home') }}">Vrati se na kontrolnu ploča</a>
            </div>
        @endauth
        <div class="public_page">
            <div class="header_box">
            <div class="header_box_2">
                <img src="assets/logoSunlight.png" alt="">
            </div>
        </div>
            @yield('public')
            <div class="public_footer">
                <div class="social">
                    <a href="https://www.facebook.com/solarijumsunlight?fref=ts"><i class="fa-brands fa-square-facebook fa-2xl"></i></a>
                    <a href="https://www.instagram.com/sunlight_sarajevo/"><i class="fa-brands fa-square-instagram fa-2xl"></i></a>
                </div>
                <div class="copyright">
                    <small>Created by: <a href="https://visia.ba">VISIA.BA</a></small>
                </div>
            </div>
        </div>
    </body>
</html>
