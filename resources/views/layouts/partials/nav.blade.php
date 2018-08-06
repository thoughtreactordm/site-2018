<nav class="sidebar" :class="{ 'active': menu }">
    <a href="/" class="nav-brand">
        <img src="/img/vert-logo.svg" alt="" class="nav-logo">
    </a>

    <div class="nav-social">
        <a href="https://twitter.com/thought_reactor">
            <i class="fab fa-twitter fa-fw fa-lg"></i>
        </a>

        <a href="https://twitch.tv/thoughtreactordev">
            <i class="fab fa-twitch fa-fw fa-lg"></i>
        </a>

        <a href="https://youtube.com/TheThoughtReactor">
            <i class="fab fa-youtube fa-fw fa-lg"></i>
        </a>

        <a href="https://facebook.com/ThoughtReactor">
            <i class="fab fa-facebook fa-fw fa-lg"></i>
        </a>

        <a href="https://discord.gg/SjAPDGm">
            <i class="fab fa-discord fa-fw fa-lg" style="position: relative; top: 1px;"></i>
        </a>
    </div>

    <div class="nav-links">
        <a href="/" id="blog">Blog</a>
        <a href="https://thoughtreactor.itch.io" target="_blank">Games</a>
        <a href="/about" id="about">About</a>
    </div>

    <div class="nav-form">
        <h4 class="title is-4"  style="margin-bottom: 0;">Subscribe</h4>
        <small style="margin-bottom: 6px;"><em>Sign up for updates!</em></small>
        @include('pages.partials.newsletter-form')
    </div>
</nav>
