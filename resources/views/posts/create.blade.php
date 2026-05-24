<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Create</h2>

    <form action="{{ route('post.store') }}" method="post">
        @csrf

        <label for="">Title:</label>
        <input type="text" name="title" value="{{ old('title') }}"><br>

        <label for="">Body:</label>
        <textarea name="body">{{ old('body') }}</textarea><br>

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
