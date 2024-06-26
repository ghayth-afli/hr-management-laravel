<!DOCTYPE html>
<html lang="en">

    <head>
        @yield('title')
        <meta charset="utf-8" />
		<meta name="author" content="Themezhub" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="https://amagroup.tn/wp-content/uploads/2021/10/logobleu.png">
        <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/styles.css")}}">
        @yield('css')
        @livewireStyles
    </head>

    <body>
        <div class="preloader"></div>
        <div id="main-wrapper">
            @yield('content')
        </div>
        @livewireScripts
        @yield('js') 
    </body>

</html>