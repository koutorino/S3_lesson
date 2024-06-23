{{-- <img src="{{ '' . $memo['image']}}" class='w-100 mb-3'/> --}}

<table >
    <thead>
      <tr >
        <th>Title</th>
        <th>Content</th>
        <th>image</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
        <tr>
          <td>{{ $post->title }}</td>
          <td>{{ $post->content }}</td>
          <td><img src='{{ $post->image }}'></td>
        </tr>
      @endforeach
    </tbody>
  </table>
