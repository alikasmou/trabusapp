<html prefix="og: http://ogp.me/ns#" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>TRABUS APP | @yield('page-title')</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
<!-- style -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
    <body id="app" class="grid grid-cols-12 grid-rows-6 bg-gray-900 w-screen h-screen overflow-hidden gap-20">
        <header class="col-span-12 row-span-1 bg-purple-700">
            @yield('header')
        </header>
        <main class="col-span-12 row-span-4">
            <div class="grid grid-cols-12 w-full h-full gap-5">
                @yield('main')
            </div>
        </main>
        <footer class="col-span-12 row-span-1 bg-purple-700 flex justify-center items-center">
            @yield('footer')
        </footer>
        <script src="{{ mix('/js/app.js')}}" defer></script>
    </body>
</html>
