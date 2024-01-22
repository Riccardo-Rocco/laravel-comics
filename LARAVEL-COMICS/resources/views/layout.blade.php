<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbs5VPzLlDrJOhiAx1E63RFw6Q/KJ6a8LZjnrWGS7LDAeexNE8sz/LFuoUz5S9xJ" crossorigin="anonymous">
</head>
<body>
    @include('partials.header')

    @yield('content')

    @include('partials.footer')

  
</body>
</html>
