@extends('layouts.app')

@section('title', 'Contactez-moi')

@section('content')
    <div class="container-fluid text-center">
        <p class="fs-1 fw-bold text-center p-5 text-uppercase">Contactez-moi</p>

        
	@if(session('success'))
            <div style="color: #029015;" class="mt-3 fs-3 mb-3 fw-bold">
               {{ session('success') }}
    	    </div>
	@endif

        {{-- Formulaire de contact --}}
        <form action="{{ route('contact.submit') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" name="nom" id="nom" class="form-control @error('nom') is-invalid @enderror" value="{{ old('nom') }}" placeholder="Ex : Duchemin" required>
                @error('nom')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" name="prenom" id="prenom" class="form-control @error('prenom') is-invalid @enderror" value="{{ old('prenom') }}" placeholder="Ex : Alice" required>
                @error('prenom')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Ex : alice.duchemin@mail.a" required>
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="contenu" class="form-label">Votre message</label>
                <textarea name="contenu" id="contenu" rows="5" class="form-control @error('contenu') is-invalid @enderror" placeholder="Écrivez votre message ici..." required>{{ old('contenu') }}</textarea>
                @error('contenu')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>
@endsection
