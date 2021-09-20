@extends('layouts.app')

@section('content')

<div class="container cars-container">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="name_social">Nome Social</label>
            <input type="text" name="name_social" id="name_social" value="{{ $post->name_social }}">
        </div>

        <div>
            <label for="category">Categoria</label>
            <input type="text" name="category" id="category" value="{{ $post->category }}">
        </div>


        <div>
            <label for="user">User</label>
            <input type="text" name="user" id="user" value="{{ $post->user }}">
        </div>


        <div>
            <label for="date">Data</label>
            <input type="text" name="date" id="date" value="{{ $post->date }}">
        </div>


        <div>
            <label for="picture">Foto</label>
            <input type="text" name="picture" id="picture" value="{{ $post->picture }}">
        </div>


        <div>
            <label for="description">Descrizione</label>
            <input type="text" name="description" id="description" value="{{ $post->description }}">
        </div>


        <button>Submit</button>
    
    </form>

</div>
@endsection