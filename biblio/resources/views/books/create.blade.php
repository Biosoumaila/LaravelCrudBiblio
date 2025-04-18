@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Livre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Ajouter un Livre</h1>
        <form action="{{ route('books.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titre du Livre:</label>
                <input type="text" class="form-control" id="title" name="title" required>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="author_id" class="form-label">Auteur:</label>
                <select class="form-select" id="author_id" name="author_id" required>
                    <option value="" disabled selected>Sélectionner un auteur</option>
                    @foreach($authors as $author)
                        <option value="{{ $author->author_id }}">{{ $author->name }}</option>
                    @endforeach
                </select>
                @error('author_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">Catégorie:</label>
                <select class="form-select" id="category_id" name="category_id" required>
                    <option value="" disabled selected>Sélectionner une catégorie</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->category_id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
            <a href="{{ route('books.index') }}" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection