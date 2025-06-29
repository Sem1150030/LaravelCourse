<!DOCTYPE html>
    <html>
        <head class="mb-5">
    <title>Laravel 12 Task List App</title>

    {{-- Load compiled CSS --}}
    @vite('resources/css/app.css')

    {{-- blade-formatter-disable --}}
    <style type="text/tailwindcss">
        .btn {
            @apply rounded-md px-2 py-1 text-center font-medium shadow-sm ring-1 ring-slate-700/90
            hover:bg-slate-50 text-slate-500;
        }
    </style>
    {{-- blade-formatter-enable --}}

    @yield('styles')
</head>


        <body class="container mx-auto mt-10 mb-10 max-w-lg ">
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
