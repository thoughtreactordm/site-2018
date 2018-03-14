<section class="blog-header-image"
        style="background-image: url('{{ asset('/storage/'.$post->image) }}');">
</section>
<div class="content">
    <h2 class="title is-2">
        <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
    </h2>
    <h4 class="subtitle is-4">
        Posted on {{ $post->created_at->format('F d, Y') }}
    </h4>

    <div class="blog-body">
        {!! $post->body !!}
    </div>
</div>