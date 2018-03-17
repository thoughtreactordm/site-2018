<?php
$page = ['description' => 'We build engaging indie games with challenging gameplay and artistic expression. Follow the blog as we work on games and participate in game jams.'];
?>

@extends('layouts.master')

@section('title', 'Engaging Indie Games')

@section('content')
    @if(count($posts))
        @foreach($posts as $post)
            @include('blog.list')
        @endforeach
    @else
        <section class="section is-medium is-hidden-tablet"></section>
        <section class="hero is-medium">
            <div class="hero-body has-text-centered">
                <img src="/img/meeseeks.png" alt="Oooo yeah!">
                <h4 class="title is-1">
                    He's tryin'!
                </h4>
                <h5 class="subtitle is-3">
                    The site is live but I'm still working on the first post! Stay tuned.
                </h5>
            </div>
        </section>
    @endif

    {{ $posts->links('vendor.pagination.simple-default') }}
@endsection

@section('scripts')
    <script>
        $("a#blog").addClass('active');
    </script>
@endsection