<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
    <h1>Posts</h1>
    <a href="{{ route('posts.create') }}">Create New Post</a>
    <ul>
        @foreach ($posts as $post)
            <li>{{ $post->title }}</li>
        @endforeach
    </ul>
    <li>
        <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
        <a href="{{ route('posts.edit', $post) }}">Edit</a>
    </li>
</body>
</html>