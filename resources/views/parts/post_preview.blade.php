<article>
    <a href="{{ $post_link }}"><h1>{{ $post->title }}</h1></a>

    <p>{{ str_limit($post->content, 100) }}</p>
</article>