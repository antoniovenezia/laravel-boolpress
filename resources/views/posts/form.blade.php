<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('posts.store') }}" method="post">
        @csrf

        <div>
            <label for="name_social">Nome Social</label>
            <input type="text" name="name_social" id="name_social">
        </div>

        <div>
            <label for="category">Categoria</label>
            <input type="text" name="category" id="category">
        </div>


        <div>
            <label for="user">User</label>
            <input type="text" name="user" id="user">
        </div>


        <div>
            <label for="date">Data</label>
            <input type="text" name="date" id="date">
        </div>


        <div>
            <label for="picture">Foto</label>
            <input type="text" name="picture" id="picture">
        </div>


        <div>
            <label for="description">Descrizione</label>
            <input type="text" name="description" id="description">
        </div>


        <button>Submit</button>
    
    </form>
    
</body>
</html>