@if (count($errors) > 0)
    <div>
        <P>
            <b>{{ count($errors) }}件のエラーがあります。</b>
        </P>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<h1>論文編集</h1>
<form action="/articles/{{ $item->id }}" method="post">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{ $item->id }}">
    <p>
        タイトル:<br>
        <input type="text" name="title" value="{{ $item->title }}">
    </p>
    <p>
        論文:<br>
        <textarea name="body" rows="8" cols="80">{{ $item->body }}</textarea><br>
    </p>
    <input type="submit" value="更新">
</form>
