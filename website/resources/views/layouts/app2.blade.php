<!DOCTYPE html>
    <html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>basic website</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>

    <body>
    @include('inc.navbar')
    @yield('content')
    @include('inc.sidebar')
    </body>

</html>
