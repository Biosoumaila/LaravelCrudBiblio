<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
 <title> Page Accueil Marches</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container-fluid">
        {{-- <a class="navbar-brand h1" href="{{ route('marches.index') }}">Marche Benin</a> --}}
        <h1>BENIN MARCHE</h1>
        <div class="justify-end ">
            <div class="col ">
                {{-- <a class="btn btn-sm btn-success" href="{{ route('marches.create') }}">Ajouter un Marche</a> --}}
                <a class="btn btn-sm btn-success" href="{{ route('marches.index') }}">Infos</a>
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
                <a class="btn btn-sm btn-success" href="{{ url('/')}}">Afficher les  Marches</a>
            </div>
        </div>

    </div>
</nav>
 <div class="container mt-5">
   <div class="row">
     @foreach ($marches as $marche)
     <div class="col-sm">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">{{ $marche->nomMarche }}</h5>
          </div>
          <div class="card-body">
            <p class="card-text">{{ $marche->description }}</p>
          </div>
          <div class="card-header">
            <h5 class="card-title">{{ $marche->capacite }}</h5>
          </div>
          <div class="card-header">
            <h5 class="card-title">{{ $marche->adresse }}</h5>
          </div>
          <div class="card-header">
            <h5 class="card-title">{{ $marche->telephone }}</h5>
          </div>
          <div class="card-header">
            <h5 class="card-title">{{ $marche->image }}</h5>
          </div>
          <div class="card-footer">
            <div class="row">
              <div class="col-sm">
                <a href="{{ route('marches.edit', $marche->id) }}"
          class="btn btn-primary btn-sm">Mettre a jour</a>
              </div>
              <div class="col-sm">
                  <form action="{{ route('marches.destroy', $marche->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
</body>
</html>