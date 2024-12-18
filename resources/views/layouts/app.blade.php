<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - {{ config('app.name') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}?v={{ time() }}">
    @stack('css')
</head>
<body>
<!-- Inclusion du menu principal du site -->
@include('partials._main_navbar')
<!-- Bloc pour afficher le contenu des pages -->
@yield('content')
<!-- Inclusion du pied de page du site -->
@include('partials._footer')
<!-- Affichage du bouton "Scroll To Top" -->
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <button class="btn btn-danger" onclick="topFunction()" id="myBtn" title="Go to top">
        <i class="fa-solid fa-circle-chevron-up"></i>
    </button>
</div>
<!-- Inclusion JS Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Bloc pour afficher des fichiers JS additionnels -->
@stack('js')
<!-- Fichier JS du bouton "Scroll To Top" -->
<script src="{{ asset('js/script.js') }}?v={{ time() }}"></script>
<!-- Fichier librairie Jquery -->
<script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
</body>
</html>
