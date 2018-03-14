<a href="/blog/{{ $post->slug }}">
    <div class="card">
        <div class="card-image">
            <figure class="image is-2by1">
                <img src="{{ asset('/storage/'.$post->image) }}" alt="{{ $post->title }}">
            </figure>
        </div>

        <div class="card-content has-text-centered">
            <h4 class="title is-4 related-title">
                {{ $post->title }}
            </h4>
        </div>
    </div>
</a>