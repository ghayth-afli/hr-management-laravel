<!DOCTYPE html>
<html lang="en">

    <head>
        @yield('title')
        <meta charset="utf-8" />
		<meta name="author" content="Themezhub" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="https://amagroup.tn/wp-content/uploads/2021/10/logobleu.png">
        @yield('css')
    </head>

    <body>
        <div class="preloader"></div>
        <div id="main-wrapper">
            @include('interface_visit.layouts.header')
            @yield('content')
        </div>
        @yield('js') 
    </body>

</html>