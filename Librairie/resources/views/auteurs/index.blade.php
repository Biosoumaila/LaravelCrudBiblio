@extends('layouts.base')

@section('header')
    <h2 class="mb-0">Gestion des Auteurs</h2>
@endsection

@section('content')
    <div class="mb-3">
        <a href="{{ route('auteurs.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle me-2"></i> Créer un auteur
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
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($auteurs as $auteur)
                            <tr>
                                <td>{{ $auteur->id }}</td>
                                <td>{{ $auteur->nom }}</td>
                                <td>{{ $auteur->prenom }}</td>
                                <td class="text-center">
                                    <a href="{{ route('auteurs.show', $auteur->id) }}" class="btn btn-sm btn-info me-1">
                                        <i class="bi bi-eye-fill"></i> Voir
                                    </a>
                                    <a href="{{ route('auteurs.edit', $auteur->id) }}" class="btn btn-sm btn-warning me-1">
                                        <i class="bi bi-pencil-square"></i> Modifier
                                    </a>
                                    <form action="{{ route('auteurs.destroy', $auteur->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet auteur ?')">
                                            <i class="bi bi-trash-fill"></i> Supprimer
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr><td class="text-center" colspan="4">Aucun auteur trouvé.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection