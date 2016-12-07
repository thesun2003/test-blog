<article>
    <h1>{{ $post->title }}</h1>

    <p>{{ $post->content }}</p>

    @if ($post->updated_at)
        <div><strong>Updated:</strong> {{ $post->updated_at }}</div>
    @endif
</article>