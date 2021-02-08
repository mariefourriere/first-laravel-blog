<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel-pluralsight_blog</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma-rtl.min.css">
        <link rel="stylesheet" href="{{ URL::to('css/styles.css') }}" type="text/css" >
       
    </head>
    
    <body>
    @include('partials.header')
        
        <section>
        @yield('content')
        </section>
        
        
    </body>
</html>