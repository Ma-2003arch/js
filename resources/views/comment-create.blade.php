<!-- resources/views/comments/create.blade.php -->

@extends('layout.main')

@section('content')
<div class="container">
    <h1>Ajouter un commentaire</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('comments.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="contenu">Contenu</label>
            <textarea name="contenu" id="contenu" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="user_id">Utilisateur</label>
            <select name="user_id" id="user_id" class="form-control" required>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="article_id">Article</label>
            <select name="article_id" id="article_id" class="form-control" required>
                @foreach ($articles as $article)
                    <option value="{{ $article->id }}">{{ $article->title }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection