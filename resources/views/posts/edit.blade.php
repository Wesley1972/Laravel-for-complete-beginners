<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Edit page.</h1>

    <form action="{{ route('post.update', $post->id) }}" method="post">
        @csrf
        @method('PUT')

        <label for="">Title:</label><br>
        <input type="text" name="title" value="{{ old('title', $post->title) }}"><br>

        <label for="">Body:</label><br>
        <textarea name="body" id="">{{ old('body', $post->body) }}</textarea><br>

        <button type="submit">Save</button>
    </form>

    <a href="{{ route('posts.index') }}">
        <button>Back</button>
    </a>


    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</body>

</html>
