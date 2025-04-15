@extends('layouts.base')

@section('header')
    <h2 class="mb-0">Gestion des Livres</h2>
@endsection

@section('content')
    <div class="mb-3">
        <a href="{{ route('livres.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle me-2"></i> Créer un livre
        </a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Titre</th>
                            <th>Auteur</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($livres as $livre)
                            <tr>
                                <td>{{ $livre->id }}</td>
                                <td>{{ $livre->titre }}</td>
                                <td>{{ $livre->auteur->nom }} {{ $livre->auteur->prenom }}</td>
                                <td class="text-center">
                                    <a href="{{ route('livres.show', $livre->id) }}" class="btn btn-sm btn-info me-1">
                                        <i class="bi bi-eye-fill"></i> Voir
                                    </a>
                                    <a href="{{ route('livres.edit', $livre->id) }}" class="btn btn-sm btn-warning me-1">
                                        <i class="bi bi-pencil-square"></i> Modifier
                                    </a>
                                    <form action="{{ route('livres.destroy', $livre->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce livre ?')">
                                            <i class="bi bi-trash-fill"></i> Supprimer
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr><td class="text-center" colspan="4">Aucun livre trouvé.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection