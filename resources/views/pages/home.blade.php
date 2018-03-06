@extends('layouts.master')

@section('content')
    {{--<section class="hero is-primary is-bold">--}}
        {{--<div class="hero-body has-text-centered">--}}
            {{--<div class="container">--}}
                {{--<h1 class="title is-2">--}}
                    {{--Engage. Entertain. Enlighten.--}}
                {{--</h1>--}}
                {{--<h4 class="subtitle is-4">--}}
                    {{--Building games with artistic flair and challenging gameplay is our passion.--}}
                {{--</h4>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

    <section class="hero is-medium is-combinus">
        <div class="hero-body">
            {{--LOGO CONTAINER--}}
            <div class="is-flex" style="justify-content: center">
                <div>
                    <img src="/img/combinus-logo.png" alt="COMBINUS" height="auto">
                </div>
            </div>

            <div class="container">
                <div class="columns combinus-body">
                    <div class="column is-offset-2 is-8">
                        <h2>The Classic Push Puzzle - Redefined.</h2>
                        <em>COMBINUS</em> is a mechanically simple but challengingly deep puzzle game where players move
                        and combine shapes together to clear them from a game board. Shapes have unique characteristics
                        and can take on one of four states adding to the complexity of how they move and combine.
                    </div>
                </div>

                <div class="columns">
                    <div class="column is-4">
                        <img src="/img/mock-screen.png" class="combinus-screen"
                             alt="Combinus Screenshot"
                        >
                    </div>
                    <div class="column is-4">
                        <img src="/img/mock-screen.png" class="combinus-screen"
                             alt="Combinus Screenshot"
                        >
                    </div>
                    <div class="column is-4">
                        <img src="/img/mock-screen.png" class="combinus-screen"
                             alt="Combinus Screenshot"
                        >
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hero is-medium is-dark is-bold" id="newsletter">
        <div class="hero-body has-text-centered">
            <div class="container">
                <h1 class="title is-2">
                    Newsletter
                </h1>
                <h4 class="subtitle is-4">
                    Sign up for news, updates, and exclusive offers!
                </h4>
                <p>
                    <em>All fields required.</em>
                </p>

                <div class="columns">
                    <div class="column is-4 is-offset-4">
                        @include('pages.partials.newsletter-form')
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection