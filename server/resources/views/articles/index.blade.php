<h1>論文一覧</h1>
    @foreach ($items as $item)
        <p><a href="/articles/{{ $item->id }}">{{ $item->title }}</a></p>
    @endforeach
<a href="/articles/create"><button>新規論文投稿</button></a>
