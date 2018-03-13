<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.partials.meta')
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<div id="app">
    <button class="menu-toggle is-hidden-tablet" @click.prevent="toggleMenu()">
        <i class="fas fa-bars fa-2x"></i>
    </button>
    <section class="menu-fader"
             :class="{ 'active': menu }"
             @dblclick.prevent="toggleMenu()"
    ></section>
    @include('layouts.partials.nav')

    <section class="main" :class="{ 'noscroll': menu }">
        @yield('content')
    </section>
</div>

<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
<script async src="/js/app.js"></script>
</body>
</html>