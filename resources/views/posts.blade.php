<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
    <h1>all post</h1>
    @foreach($posts as $post)
    <h3>{{$post->title}}</h3>
    <h3>{{$post->body}}</h3>
    @endforeach
</body>
</html>