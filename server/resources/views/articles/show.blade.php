<h1>論文詳細</h1>
<p>タイトル:{{ $item->title }}</p>
<p>{{ $item->body }}</p>
<a href="/articles"><button>一覧へ戻る</button></a>
<a href="/articles/{{ $item->id }}/edit"><button>編集する</button></a>
<form action="/articles/{{ $item->id }}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
</form>
