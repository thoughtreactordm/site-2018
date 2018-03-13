<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-47036341-4"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-47036341-4');
</script>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>@yield('title') | {{ setting('site.title') }}</title>

@if(isset($post))
    <meta name="description" content="{{ $post->excerpt }}"/>
@endif

<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="@yield('title') | {{ setting('site.title') }}">
@if(isset($post))
    <meta itemprop="description" content="{{ $post->excerpt }}">
    <meta itemprop="image" content="{{ asset('/storage/'.$post->image) }}">
@endif

<!-- Twitter Card data -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@asceticgames">
<meta name="twitter:title" content="@yield('title') | {{ setting('site.title') }}">
@if(isset($post))
    <!-- Twitter summary card with large image must be at least 280x150px -->
    <meta name="twitter:image:src" content="{{ asset('/storage/'.$post->image) }}">
    <meta name="twitter:description" content="{{ $post->excerpt }}">
@endif

<!-- Open Graph data -->
<meta property="og:title" content="@yield('title') | {{ setting('site.title') }}"/>
@if(isset($post))
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="{{ request()->fullUrl() }}"/>
    <meta property="og:image" content="{{ asset('/storage/'.$post->image) }}"/>
    <meta property="og:site_name" content="{{ setting('site.title') }}"/>
    <meta property="og:description" content="{{ $post->excerpt }}"/>
@endif