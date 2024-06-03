
{{-- {{ Form::open(['route' => 'store', 'method' => 'POST']) }}
    {{ Form::text('title', null, ['placeholder' => 'Title']) }}
    {{ Form::textarea('content', null, ['placeholder' => 'content']) }}
    <form action="" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="file" name="file">
    </form>
    {{ Form::submit('Add')}}
{{ Form::close() }} --}}



<h3>Create Album</h3>
{!!Form::open(["route" => "store" , "method" => "POST", "enctype" => "multipart/form-data"])!!}
{{ csrf_field() }}
{{Form::text("title","",["placeholder" => "Album title"])}}
{{Form::textarea("content","",["placeholder" => "Album content"])}}
{{Form::file("image")}}
{{Form::submit("submit")}}
{!!Form::close()!!}

<a href="{{ route('index') }}">ここをクリックしてな</a>
