{{-- Utilisation du squelette de page app.blade.php --}}
@extends('layouts.app')
{{-- Titre de la page --}}
@section('title', 'Accueil')
{{-- Contenu de la page --}}
@section('content')
    {{-- Grille Bootstrap --}}
    <div class="container-fluid text-center">
        {{-- Affichage de tous les flash messages de type "success" --}}
        @foreach (session('success', []) as $message)
            <div style="color: #029015;" class="mt-3 fs-3 mb-3 fw-bold">{{ $message }}</div>
        @endforeach
        {{-- Affichage de l'image fixe en bandeau --}}
        <div class="row my-5 background-cover justify-content-center">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <p class="fs-1 pt-3 fw-bold text-dark display-4 fw-normal">ANTOINE David, Développeur Web, Mobile et Desktop, Bloggeur, Programmeur...</p><br>
                <p class="fs-5 pb-2 text-dark">Bienvenue sur mon site, un "portfolio" pour vous montrer le métier que je souhaite exercer, à savoir Développeur Informatique (Sites, API, Applications Web, Mobile, Desktop, etc).</p>
            </div>
            <div class="col-md-5 p-lg-5 mx-auto my-2">
                <p class="fs-1 pt-3 text-dark fw-bold pb-3">Mon CV</p>
                <a href="https://www.unitag.io/qrcode">
                    <img src="{{ asset('images/CV.png') }}" class="rounded w-75" alt="QR Code">
                </a>
            </div>
        </div>
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v4.0"></script>
        {{-- "div" affichant la page facebook "Développement du numérique" --}}
        <div class="fb-page" data-href="https://www.facebook.com/profile.php?id=61570127139690" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"> <blockquote cite="https://www.facebook.com/profile.php?id=61570127139690" class="fb-xfbml-parse-ignore">
                <a href="https://www.facebook.com/profile.php?id=61570127139690">Développement du numérique</a>
            </blockquote>
        </div>
        <!-- Affichage du bouton "Scroll To Top" -->
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-danger" onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-circle-chevron-up"></i></button>
        </div>
    </div>

@endsection
