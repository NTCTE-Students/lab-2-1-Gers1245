<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post: {{ $post->title }}</title>
</head>
<body>
    <h1>Edit Post</h1>
    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PATCH')
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ $post->title }}" required>
        </div>
        <div>
            <label for="content">Content:</label>
            <textarea name="content" id="content" required>{{ $post->content }}</textarea>
        </div>
        <button type="submit">Update Post</button>
    </form>
    <a href="{{ route('posts.show', $post) }}">Cancel</a>
</body>
</html>