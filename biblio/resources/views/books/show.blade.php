<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du Livre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Détails du Livre</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $book->title }}</h5>
                <p class="card-text">ID: {{ $book->id }}</p>
                <p class="card-text">Auteur: {{ $book->author->name }}</p>
                <p class="card-text">Catégorie: {{ $book->category->name }}</p>
                <p class="card-text">Créé le: {{ $book->created_at }}</p>
                <p class="card-text">Modifié le: {{ $book->updated_at }}</p>
                <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">Modifier</a>
                <a href="{{ route('books.index') }}" class="btn btn-secondary">Retour à la liste</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>