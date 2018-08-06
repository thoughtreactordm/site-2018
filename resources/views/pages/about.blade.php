<?php
$page = ['description' => 'Thought Reactor, a small indie game studio, is focused on making artistic and challenging games. The studio is just beginning to find itself and trying to find its place in a crowded but emerging market.'];
?>

@extends('layouts.master')

@section('title', 'About')

@section('content')
    <section class="hero is-primary is-bold">
        <div class="hero-body">
            <h1 class="title is-1">About</h1>
        </div>
    </section>

    <div class="content">
        <div class="columns">
            <div class="column is-7">
                <p>
                    Thought Reactor is a small indie game studio that is focused on making artistic and challenging
                    games. Maintained part time by Michael DeLally, the studio is just beginning to find itself and
                    trying to find its place in a crowded but emerging market.
                </p>

                <p>
                    We bleed video gaming and want to transmit that passion into our craft. Like many studios we've sort
                    of fallen into a niche - challenging, puzzle-driven games that test logic, reflexes, and spacial
                    reasoning. Thought Reactor believes games that challenge those faculties can not only be insanely
                    fun but incredibly rewarding, allowing players to sharpen their minds and engage areas of their
                    brain often neglected by daily life.
                </p>

                <p>
                    There isn't a genre of game that our team doesn't play or hasn't played and we incorporate the
                    designs from many genres into our games in order to build titles that are easy to approach but
                    challenging to master. We're just getting started - <em>come join us on our journey by following the
                        development blog on the site.</em>
                </p>

                <p>
                    We are currently developing a FPS puzzle-platformer called <em><a href="https://parabolagame.com">PARABOLA</a></em>. To keep up with development, demo builds, and more please checkout the official site and social media channels.
                </p>
            </div>

            <div class="column">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-6by9">
                            <a href="https://img.itch.zone/aW1hZ2UvNjMwMTYvNTM2MDg2LmpwZw==/original/8S3Yft.jpg"
                               data-lightbox="igeo-1" data-title="IGEO, our latest puzzle game">
                                <img src="https://img.itch.zone/aW1hZ2UvNjMwMTYvNTM2MDg2LmpwZw==/original/8S3Yft.jpg"
                                     alt="IGEO, our latest puzzle game">
                            </a>
                        </figure>
                    </div>

                    <div class="card-content">
                        <em><a href="https://thoughtreactor.itch.io/igeo">IGEO</a>, our latest puzzle game based on
                            spacial reasoning and pattern logic.</em>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="hero is-dark">
        <div class="hero-body has-text-centered">
            <h4 class="title is-3 has-text-white" style="max-width: 900px; margin: auto;">
                Be sure to follow us on your favorite social channels to recieve updates on releases, live streams, and
                game jams!
            </h4>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        $("a#about").addClass('active');
    </script>
@endsection
