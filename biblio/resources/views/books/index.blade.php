@extends('layouts.app')
@section('content') 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Livres</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Liste des Livres</h1>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <a href="{{ route('books.create') }}" class="btn btn-primary mb-3">Ajouter un livre</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Catégorie</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($books as $book)
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author_id }}</td>
                        <td>{{ $book->category_id }}</td>
                        <td>
                            {{-- <a href="{{ route('books.show', $book->id) }}" class="btn btn-info btn-sm">Voir</a> --}}
                            {{-- <a href="{{ route('books.show', $book) }}" class="btn btn-info btn-sm">Voir</a> --}}
                            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                            <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce livre ?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="5">Aucun livre trouvé.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection