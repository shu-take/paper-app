<h1>論文一覧</h1>
    @foreach ($articles as $article)
        <p><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></p>
    @endforeach
<a href="/articles/create"><button>新規論文投稿</button></a>
