<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/public/css/app.css">
        <title>Laravel</title>
    </head>

    <body>
    
        @foreach($allPosts as $post)
            <div class="container">
                <h1>
                    <a href="{{ route('posts.show', ['post'=>$post->id]) }}">{{ $post->name_social }}</a>
                </h1>
                <h5>Data di uscita: {{ $post->date }}</h5>
                <p>{{ $post->description }}</p>
                <p>{{ $post->category }}</p>
                <p>{{ $post->user }}</p>
                <img src="{{ $post->picture }}" alt="copertina di {{ $post->name_social }}">
            </div>
        @endforeach
        
    </body>
</html>
