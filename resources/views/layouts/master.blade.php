<html prefix="og: http://ogp.me/ns#" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>TRABUS APP | @yield('page-title')</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
<!-- style -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
    <body id="app" class="bg-gray-900 overflow-hidden">
        <header class="bg-purple-700 flex justify-center items-center w-full py-2 mb-10 text-white">
            @yield('header')
        </header>
        <main class="">
            <div class="">
                @yield('main')
            </div>
        </main>
        <footer class=" bg-purple-700 flex justify-center items-center fixed bottom-0 w-full py-2">
            @yield('footer')
        </footer>
        <script src="{{ mix('/js/app.js')}}" defer></script>
    </body>
</html>
