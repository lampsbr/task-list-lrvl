<!DOCTYPE html>
<html>
    <head>
        <title>Laravel Task List App</title>
    </head>
    <body>
        <h1>
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
