<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Mettre a jour un marche</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container-fluid">
      <a class="navbar-brand h1" href={{ route('marches.index') }}>Marche Benin</a>
      <div class="justify-end ">
        <div class="col ">
          <a class="btn btn-sm btn-success" href={{ route('marches.create') }}>Ajouter un Marche</a>
        </div>
      </div>
      <div class="justify-end ">
       <div class="col ">
         <a class="btn btn-sm btn-success" href={{ route('marches.index') }}>Afficher les  Marches</a>
       </div>
     </div>
    </div>
  </nav>
  <div class="container h-100 mt-5">
    <div class="row h-100 justify-content-center align-items-center">
      <div class="col-10 col-md-8 col-lg-6">
        <h3>Update marche</h3>
        <form action="{{ route('marches.update', $marche->id) }}" method="post">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="title">Nom Marche</label>
            <input type="text" class="form-control" id="nomMarche" name="nomMarche"
              value="{{ $marche->nomMarche }}" required>
          </div>
          <div class="form-group">
            <label for="body">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ $marche->description }}</textarea>
          </div>
          <div class="form-group">
            <label for="title">Capacite</label>
            <input type="text" class="form-control" id="capacite" name="capacite"
              value="{{ $marche->capacite }}" required>
          </div>
          <div class="form-group">
            <label for="title">Adresse</label>
            <input type="text" class="form-control" id="adresse" name="adresse"
              value="{{ $marche->adresse }}" required>
          </div>
          <div class="form-group">
            <label for="title">Telephone</label>
            <input type="text" class="form-control" id="telephone" name="telephone"
              value="{{ $marche->telephone }}" required>
          </div>
          <div class="form-group">
            <label for="title">Image</label>
            <input type="text" class="form-control" id="image" name="image"
              value="{{ $marche->image }}" required>
          </div>
          <button type="submit" class="btn mt-3 btn-primary">Update marche</button>
        </form>
      </div>
    </div>
</div>
</body>
</html>