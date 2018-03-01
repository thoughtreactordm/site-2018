<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ setting('site.title') }}</title>

    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<div id="app">
    @include('layouts.partials.nav')

    @yield('content')

    @include('layouts.partials.footer')
</div>

<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
</body>
</html>