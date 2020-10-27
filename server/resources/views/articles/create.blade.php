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
<h1>新規論文投稿</h1>
<form action="/articles" method="post">
    @csrf
    <p>
        タイトル:<br>
        <input type="text" name="title" value="{{ old('title') }}">
    </p>
    <p>
        本文:<br>
        <textarea name="body" rows="8" cols="80" value="{{ old('body') }}"></textarea><br>
    </p>
    <input type="submit" value="投稿">
</form>
