<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Créer un marché</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container-fluid">
        {{-- <a class="navbar-brand h1" href="{{ route('marches.index') }}">Marche Benin</a> --}}
        <h1>BENIN MARCHE</h1>
        <div class="justify-end ">
            <div class="col ">
                {{-- <a class="btn btn-sm btn-success" href="{{ route('marches.create') }}">Ajouter un Marche</a> --}}
                <a class="btn btn-sm btn-success" href="{{ route('marches.index') }}">Accueil</a>
            </div>
        </div>
        <div class="justify-end ">
            <div class="col ">
                {{-- <a class="btn btn-sm btn-success" href="{{ route('marches.show', 1) }}">Afficher les  Marches</a> --}}
                <a class="btn btn-sm btn-success" href="{{ route('marches.create', ) }}">Ajouter les  Marches</a>
            </div>
        </div>

        <div class="justify-end ">
            <div class="col ">
                {{-- <a class="btn btn-sm btn-success" href="{{ route('marches.show', 1) }}">Afficher les  Marches</a> --}}
                <a class="btn btn-sm btn-success" href="{{ route('marches.index')}}">Afficher les  Marches</a>
            </div>
        </div>

    </div>
</nav>
<div class="container h-100 mt-5">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
            <h3>Ajouter un marché</h3>
            <form action="{{ route('marches.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nomMarche">Nom Marché</label>
                    <input type="text" class="form-control" id="nomMarche" name="nomMarche" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="capacite">Capacité</label>
                    <input type="text" class="form-control" id="capacite" name="capacite" required>
                </div>
                <div class="form-group">
                    <label for="adresse">Adresse</label>
                    <input type="text" class="form-control" id="adresse" name="adresse" required>
                </div>
                <div class="form-group">
                    <label for="telephone">Téléphone</label>
                    <input type="text" class="form-control" id="telephone" name="telephone" required>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="text" class="form-control" id="image" name="image" required>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Confirmer ajout</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>