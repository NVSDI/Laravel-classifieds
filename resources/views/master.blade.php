<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('title') </title>

        
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <script type="text/javascript" src="/js/app.js"></script>
    </head>


    <body>
        <header class="container">
            <div class="col-5">
                <p class="lead">Londra Seri Ilanlar </p>
            </div>
            <div class="col-3">                
                <p>
                    <a href="{{ action('Admin\CategoriesController@create') }}">New Category</a>
                </p>
            </div>
            <div class="col-4" style="text-align: right;">
                <p class="lead">
                    <a href="www.facebook.com/Londa-Seri-Ilanlar-588225534620213">Like us on Facebook!</a>
                </p>
            </div>
        </header>

        @include('shared.navbar')
      
            
        @yield('content')

        @include('shared.footer')
    </body>
</html>
