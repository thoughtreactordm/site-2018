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
        <nav class="navbar is-dark">
            <div class="container">
                <div class="navbar-brand">
                    <a href="/" class="navbar-item">
                        <img src="/img/nav-logo.png" alt="Thought Reactor" width="180px" height="72px">
                    </a>

                    <div class="navbar-burger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>

                <div class="navbar-menu">
                    <div class="navbar-end">
                        <a href="/" class="navbar-item">Home</a>

                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link">
                            Games
                            </a>

                            <div class="navbar-dropdown is-boxed">
                                <a class="navbar-item">
                                    Combinus
                                </a>
                                <a class="navbar-item">
                                    IGEO
                                </a>
                                <a class="navbar-item">
                                    Pie Quest
                                </a>
                            </div>
                        </div>

                        <a href="/" class="navbar-item">Press</a>
                        <a href="/" class="navbar-item">About</a>
                    </div>
                </div>
            </div>
        </nav>

        <section>
            @yield('content')
        </section>

        <footer class="hero is-primary is-bold">
            <div class="container">
                <div class="hero-body has-text-centered">
                    <div>
                        <a href="https://facebook.com/ThoughtReactor">
                            <i class="fab fa-facebook fa-fw fa-2x"></i>
                        </a>

                        <a href="https://twitter.com/thought_reactor">
                            <i class="fab fa-twitter-square fa-fw fa-2x"></i>
                        </a>

                        <a href="https://youtube.com/TheThoughtReactor">
                            <i class="fab fa-youtube-square fa-fw fa-2x"></i>
                        </a>

                        <a href="https://github.com/thoughtreactordm">
                            <i class="fab fa-github-square fa-fw fa-2x"></i>
                        </a>
                    </div>
                    <strong>&copy;{{ date('Y') }} Thought Reactor, All Rights Reserved.</strong>
                </div>
            </div>
        </footer>
    </div>

    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
</body>
</html>