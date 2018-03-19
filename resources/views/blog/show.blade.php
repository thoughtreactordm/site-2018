@extends('layouts.master')

@section('title', $post->title)

@section('content')
    <section class="blog-header-image"
             style="background-image: url('{{ asset('/storage/'.$post->image) }}');">
    </section>
    <div class="content">
        <h1 class="title is-1">{{ $post->title }}</h1>
        <h4 class="subtitle is-3">
            Posted on {{ $post->created_at->format('F d, Y') }}
        </h4>

        <div class="blog-body">
            {!! $post->body !!}
        </div>

        <div class="has-text-centered">
            <hr>
            <p>
                <em>Dig this article? Share it with your buddies:</em>
            </p>
            <div id="shares"></div>
            <hr>
        </div>

        <div class="has-text-right">
            @if(isset($previous))
                <a href="/blog/{{ $previous->slug }}" class="button">« Previous</a>
            @endif

            @if(isset($next))
                <a href="/blog/{{ $next->slug }}" class="button">Next »</a>
            @endif
        </div>
    </div>

    @if(!count($related))
        <section class="section related has-text-centered">
            <h3 class="title is-3">
                Related Posts
            </h3>
            <div class="columns">
                @foreach($related as $post)
                    <div class="column is-4">
                        @include('blog.card')
                    </div>
                @endforeach
            </div>
        </section>
    @endif

@endsection

@section('scripts')
    <script>
        $("#shares").jsSocials({
            shares: [
                {
                    share: "twitter",
                    logo: "fab fa-twitter"
                },
                {
                    share: "facebook",
                    logo: "fab fa-facebook"
                },
                {
                    share: "googleplus",
                    logo: "fab fa-google-plus-g"
                }
            ],
            shareIn: "popup",
            url: "{{ url()->current() }}",
            text: "{!! $post->excerpt !!}"
        });

        $("a#blog").addClass('active');
    </script>
@endsection