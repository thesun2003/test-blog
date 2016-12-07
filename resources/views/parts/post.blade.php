<article>
    <h1>{{ $post->title }}</h1>

    <p>{!! strip_tags($post->content, config('app.edit_post_allowed_html_tags')) !!}</p>

    @if ($post->updated_at)
        <div><strong>Updated:</strong> {{ $post->updated_at }}</div>
    @endif
</article>
