<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel views and blade</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma-rtl.min.css">
        <link rel="stylesheet" href="{{ URL::to('css/styles.css') }}" type="text/css" >
</head>
<body>
    @include('partials.admin-header')
    <div class="container">
        @yield('content')
    </div>
</body>
</html>