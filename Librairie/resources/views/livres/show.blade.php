@extends('layouts.base')

@section('header')
    <h2 class="mb-0">Détails du Livre</h2>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Informations du livre</h5>
            <p class="card-text"><strong>ID :</strong> {{ $livre->id }}</p>
            <p class="card-text"><strong>Titre :</strong> {{ $livre->titre }}</p>
            <p class="card-text"><strong>Description :</strong> {{ $livre->description ?? 'Aucune description.' }}</p>
            <p class="card-text"><strong>Auteur :</strong> <a href="{{ route('auteurs.show', $livre->auteur->id) }}" class="text-info">{{ $livre->auteur->nom }} {{ $livre->auteur->prenom }}</a></p>

            <div class="mt-3">
                <a href="{{ route('livres.edit', $livre->id) }}" class="btn btn-warning me-2">
                    <i class="bi bi-pencil-square me-2"></i> Modifier
                </a>
                <a href="{{ route('livres.index') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left me-2"></i> Retour à la liste
                </a>
            </div>
        </div>
    </div>
@endsection