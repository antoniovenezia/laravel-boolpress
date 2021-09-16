<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div>
        <h1>{{ $singlePost->name_social }}</h1>
        <h5>Data di uscita: {{ $singlePost->date }}</h5>
        <p>{{ $singlePost->user }}</p>
        <p>{{ $singlePost->category }}</p>
        <p>{{ $singlePost->genere }}</p>
        <p>{{ $singlePost->description }}</p>
        <img src="{{ $singlePost->picture }}" alt="copertina di {{ $singleFilm->name_social }}">
    </div>
    
</body>
</html>