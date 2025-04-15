<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="chemin/vers/votre/css/bootstrap.min.css">
        <script src="chemin/vers/votre/js/bootstrap.bundle.min.js"></script>
    <title>Affichage</title>
</head>
<body>
    <div>
        <h1 class="container">Oeuvre Détails</h1>
    <div class="container">
        <div class="card mb-3" style="max-width: 2040px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{ asset('storage/' . $oeuvre->image) }}" class="img-fluid rounded-start" alt="Image">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><strong>{{ $oeuvre->nom }}</strong></h5>
                  <p class="card-text">
                    {{ $oeuvre->description }} <hr>
                    <strong>Année : {{ $oeuvre->annee }}</strong>
                  </p>
                  <p class="card-text"><span>Categorie : {{ $oeuvre->categorie->nomCategorie }}</span> <br> <span>Artiste : {{ $oeuvre->artiste->nom }} {{ $oeuvre->artiste->prenom }}</span> </p>
                  <p class="card-text"><small class="text-muted">Créé le : {{ $oeuvre->created_at->format('d-m-Y') }}</small></p>
                </div>
              </div>
            </div>
          </div>
    </div>
    </div>
</body>
</html>
