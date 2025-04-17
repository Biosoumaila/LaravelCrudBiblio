<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de la Catégorie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Détails de la Catégorie</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $category->name }}</h5>
                {{-- <p class="card-text">ID: {{ $category->id }}</p> ['author' => 'author_id'] --}}
                <p class="card-text">ID: {{ $category->category_id }}</p>
                <p class="card-text">Créé le: {{ $category->created_at }}</p>
                <p class="card-text">Modifié le: {{ $category->updated_at }}</p>
                {{-- <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Modifier</a> --}}
                <a href="{{ route('categories.edit', $category->category_id) }}" class="btn btn-warning">Modifier</a>
                <a href="{{ route('categories.index') }}" class="btn btn-secondary">Retour à la liste</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>