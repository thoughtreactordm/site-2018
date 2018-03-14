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
    <div class="scroll-shim" v-show="menu"></div>
    @include('layouts.partials.nav')

    <section class="main">
        @yield('content')

        @include('layouts.partials.footer')
    </section>
</div>

<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
<script src="/js/app.js"></script>
@yield('scripts')
</body>
</html>