<form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="file" name="file">
    <button type="submit">保存</button>
</form>

<a href="{{ route('show') }}">ここをクリックしてな</a>
