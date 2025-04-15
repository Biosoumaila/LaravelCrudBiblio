@extends('layouts.base')

@section('header')
    <h2 class="mb-0">Créer un Livre</h2>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('livres.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="titre" class="form-label">Titre :</label>
                    <input type="text" class="form-control @error('titre') is-invalid @enderror" id="titre" name="titre" value="{{ old('titre') }}" required>
                    @error('titre')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description :</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="auteur_id" class="form-label">Auteur :</label>
                    <select class="form-select @error('auteur_id') is-invalid @enderror" id="auteur_id" name="auteur_id" required>
                        <option value="">Sélectionner un auteur</option>
                        @foreach ($auteurs as $auteur)
                            <option value="{{ $auteur->id }}" {{ old('auteur_id') == $auteur->id ? 'selected' : '' }}>{{ $auteur->nom }} {{ $auteur->prenom }}</option>
                        @endforeach
                    </select>
                    @error('auteur_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save me-2"></i> Enregistrer
                    </button>
                    <a href="{{ route('livres.index') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left me-2"></i> Annuler
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection