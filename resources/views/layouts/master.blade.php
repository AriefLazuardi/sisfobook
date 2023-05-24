<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            Home <br>
            About <br>
        @show
 
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
