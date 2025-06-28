<!DOCTYPE html>
    <html>
        <head>
            <title> Laravel 12 Task List App</title>
            @vite('resources/css/app.css')
            @yield('styles')
        </head>

        <body class="container mx-auto mt-10 mb-10 max-w-lg">
            <h1>
                @yield('title')
            </h1>
            <div>
                @if(session()->has('success'))
                    <div>{{session('success')}}</div>
                @endif
                @yield('content')
            </div>
        </body>

    </html>
