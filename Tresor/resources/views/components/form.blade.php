<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire Oeuvre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /* Styles personnalisés pour améliorer l'apparence */
        body {
            background-color: #f8f9fa; /* Couleur de fond légère */
        }
        .container {
            margin-top: 20px;
        }
        .form-label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #007bff; /* Couleur primaire Bootstrap */
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Couleur plus foncée au survol */
            border-color: #0056b3;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Gestion des Oeuvres</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                    </li>
                    </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @if (isset($oeuvre))
            <h1>Editer une oeuvre</h1>
            <form method="POST" action="{{ route('oeuvre.update', ['id'=>$oeuvre->id]) }}" enctype="multipart/form-data">
        @else
            <h1>Créer une oeuvre</h1>
            <form method="POST" action="{{ route('oeuvre.store') }}" enctype="multipart/form-data">
        @endif

            @csrf
            <div class="mb-3">
                <label for="nom" class="form-label">Nom Oeuvre </label>
                <input type="text" class="form-control" id="nom"
                    value="{{ isset($oeuvre->nom) ? $oeuvre->nom : old('nom') }}" name="nom"
                    placeholder="Nom oeuvre">
            </div>
            <div class="mb-3">
                <div class="row">
                    <div class="col">
                        <label for="artiste" class="form-label">Artiste</label>
                        <select class="form-select" name="artiste" id="artiste" aria-label="Default select example">
                            <option selected>Selectionner un artiste</option>
                            @if ($artistes->count() > 0)
                                @foreach ($artistes as $artiste)
                                    <option <?php if( isset( $oeuvre ) ) { if( $oeuvre->artiste->id == $artiste->id ) echo 'selected'; } ?> value="{{ $artiste->id }}">{{ $artiste->nom }} {{ $artiste->prenom }}</option>
                                @endforeach
                            @else
                                <option value="">Pas d'artiste</option>
                            @endif
                        </select>
                    </div>
                    <div class="col">
                        <label for="categorie" class="form-label">Catégorie</label>
                        <select class="form-select" name="categorie" id="categorie" aria-label="Default select example">
                            <option selected>Selectionner une catégorie</option>
                            @if ($categories->count() > 0)
                                @foreach ($categories as $categorie)
                                    <option <?php if( isset( $oeuvre ) ) { if( $oeuvre->categorie->id == $categorie->id ) echo 'selected'; } ?> value="{{ $categorie->id }}">{{ $categorie->nomCategorie }}</option>
                                @endforeach
                            @else
                                <option value="">Pas de catégorie</option>
                            @endif
                        </select>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="annee" class="form-label">Année</label>
                <input type="text" class="form-control" id="annee"
                    value="{{ isset($oeuvre->annee) ? $oeuvre->annee : 1960 }}" name="annee"
                    placeholder="Annee">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3">{{ isset($oeuvre->description) ? $oeuvre->description : old('description') }}</textarea>
            </div>
            <div class="mb-3">
                @if (isset($oeuvre->image))
                    <p>
                        <span>Image actuelle</span><br />
                        <img src="{{ asset('storage/' . $oeuvre->image) }}" alt="image de couverture actuelle"
                            style="max-height: 200px;">
                    </p>
                @endif

                <p>
                    <label for="image">Image Oeuvre</label><br />
                    <input type="file" name="image" id="image">
                </p>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">{{ isset($oeuvre) ? 'Mettre à jour' : 'Enregistrer' }}</button>
            </div>
        </form>
    </div>
</body>
</html>