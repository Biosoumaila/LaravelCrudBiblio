@extends('layouts.base')

@section('header')
    <h2 class="mb-0">Détails de l'Auteur</h2>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Informations de l'auteur</h5>
            <p class="card-text"><strong>ID :</strong> {{ $auteur->id }}</p>
            <p class="card-text"><strong>Nom :</strong> {{ $auteur->nom }}</p>
            <p class="card-text"><strong>Prénom :</strong> {{ $auteur->prenom }}</p>

            <h6 class="mt-4 card-subtitle mb-2 text-muted">Livres de cet auteur :</h6>
            @if ($auteur->livres->count() > 0)
                <ul class="list-group">
                    @foreach ($auteur->livres as $livre)
                        <li class="list-group-item">{{ $livre->titre }}</li>
                    @endforeach
                </ul>
            @else
                <p class="card-text">Aucun livre pour cet auteur.</p>
            @endif

            <div class="mt-3">
                <a href="{{ route('auteurs.edit', $auteur->id) }}" class="btn btn-warning me-2">
                    <i class="bi bi-pencil-square me-2"></i> Modifier
                </a>
                <a href="{{ route('auteurs.index') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left me-2"></i> Retour à la liste
                </a>
            </div>
        </div>
    </div>
@endsection