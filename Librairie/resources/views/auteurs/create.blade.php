@extends('layouts.base')

@section('header')
    <h2 class="mb-0">Créer un Auteur</h2>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('auteurs.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nom" class="form-label">Nom :</label>
                    <input type="text" class="form-control @error('nom') is-invalid @enderror" id="nom" name="nom" value="{{ old('nom') }}" required>
                    @error('nom')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="prenom" class="form-label">Prénom :</label>
                    <input type="text" class="form-control @error('prenom') is-invalid @enderror" id="prenom" name="prenom" value="{{ old('prenom') }}" required>
                    @error('prenom')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save me-2"></i> Enregistrer
                    </button>
                    <a href="{{ route('auteurs.index') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left me-2"></i> Annuler
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection