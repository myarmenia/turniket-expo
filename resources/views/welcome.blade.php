<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
         @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- Styles -->
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="title-card">
            <div class="title-info">
                <h1 class="name">Մուտքի հասանելիության և վերահսկողության համակարգեր</h1>
            </div>
        </div>
        <div id="result"></div>


        <script src="{{ asset('assets/js/script.js') }}" type="module"></script>
    </body>
</html>
