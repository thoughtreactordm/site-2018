<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.partials.meta')
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<div id="app">

    <transition name="fade">
        <div class="loading" v-show="loading">
            <i class="fas fa-spinner fa-spin fa-3x"></i>
        </div>
    </transition>

    <button class="menu-toggle is-hidden-tablet" @click.prevent="toggleMenu()">
        <i class="fas fa-bars fa-2x"></i>
    </button>
    <section class="menu-fader"
             :class="{ 'active': menu }"
             @dblclick.prevent="toggleMenu()"
    ></section>
    @include('layouts.partials.nav')

    <section class="main">
        @yield('content')

        @include('layouts.partials.footer')
    </section>
</div>
<script src="/js/app.js"></script>
@yield('scripts')
</body>
</html>