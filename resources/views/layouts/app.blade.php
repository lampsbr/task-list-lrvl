<!DOCTYPE html>
<html>
    <head>
        <title>Laravel Task List App</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        @yield('styles')
    </head>
    <body class="container mx-auto my-10 max-w-lg">
        <h1 class="text-2xl">
            @yield('title', 'Task List App')
        </h1>
        <div>
            @if(session()->has('success'))
                <div>{{ session('success') }}</div>
            @endif
            @yield('content')
        </div>
    </body>
</html>
