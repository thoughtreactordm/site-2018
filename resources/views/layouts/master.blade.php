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
    
    <nav class="navbar is-dark">
        <div class="container">
            <div class="navbar-brand">
                <a href="/" class="navbar-item">
                    <img src="/img/nav-logo.png" alt="Thought Reactor" width="180px" height="72px">
                </a>
            </div>
        </div>
    </nav>

    <section>
        @yield('content')
    </section>

    <footer class="hero is-primary">
        <div class="container">
            <div class="hero-body has-text-centered">
                Thought Reactor &copy;{{ date('Y') }}
            </div>
        </div>
    </footer>
</body>
</html>