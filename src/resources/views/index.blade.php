
{{ Form::open(['route' => 'store', 'method' => 'POST']) }}
{{ Form::text('title', null, ['placeholder' => 'Title']) }}
{{ Form::textarea('content', null, ['placeholder' => 'content']) }}
<form action="" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="file" name="file">
    <button type="submit">保存</button>
</form>
{{ Form::submit('Add')}}
{{ Form::close() }}

<a href="{{ route('show') }}">ここをクリックしてな</a>

