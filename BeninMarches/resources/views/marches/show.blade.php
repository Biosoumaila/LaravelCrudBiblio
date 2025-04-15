<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Marche</title>
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
             {{-- <a class="btn btn-sm btn-success" href={{ route('marches.show') }}>Afficher les  Marches</a> --}}
             <a class="btn btn-sm btn-success" href={{ route('marches.show', $marche->id) }}>Afficher les  Marches</a>
           </div>
         </div>
         
        </div>
      </nav>
    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">{{ $marche->title }}</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">{{ $marche->body }}</p>
                </div>
                <div class="card-footer">
                    <a href="{{ route('marches.edit', $marche->id) }}" class="btn btn-primary btn-sm">Mettre a jour</a>
                    <form action="{{ route('marches.destroy', $marche->id) }}" method="marche">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>