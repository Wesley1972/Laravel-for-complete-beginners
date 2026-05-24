<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>All post</h2>

    @if (session('success'))
      <div style="color: green; border: 1px solid green; padding: 10px; margin-bottom: 15px;">
          {{ session("success") }}
      </div>
    @endif

    <a href="{{ route('post.create') }}">Create</a>

    @foreach ($posts as $post)
      <h2>{{ $post->title }}</h2>
      <p>{{ $post->body }}</p>
      <a href="{{ route('post.edit', $post->id) }}">Edit</a>

      <form action="{{ route('post.destroy', $post->id) }}" method="post">
          @csrf
          @method('DELETE')
          
          <button type="submit" onclick="return confirm('Are you sure you want to delete this post?')" >Delete</button>
      </form>

    @endforeach

</body><br><br><br><br><br>

</html>
