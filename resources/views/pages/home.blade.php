@extends('layouts.master')

@section('content')
    <section class="hero is-medium is-primary is-bold">
        <div class="hero-body has-text-centered">
            <div class="container">
                <h1 class="title is-2">
                    Engage. Entertain. Enlighten.
                </h1>
                <h4 class="subtitle is-4">
                    A little something about the studio and how we build games.
                </h4>

                <button class="button is-primary is-large is-outlined is-inverted">Button</button>
            </div>
        </div>
    </section>

    <section class="hero is-medium">
        <div class="hero-body has-text-centered">
            <div class="container">
                <h1 class="title is-2">
                    What we're working on...
                </h1>
                <h4 class="subtitle is-4">
                    A feature on <a href="https://combinusgame.com">Combinus</a> goes here.
                </h4>

                <button class="button is-primary is-large">
                    Click me!
                </button>

                <button class="button is-primary is-outlined is-large">
                    Click me!
                </button>
            </div>
        </div>
    </section>

    <section class="hero is-medium is-light is-bold">
        <div class="hero-body has-text-centered">
            <div class="container">
                <h1 class="title is-2">
                    Our Games
                </h1>
                <h4 class="subtitle is-4">
                    Past projects...links to sites...
                </h4>
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