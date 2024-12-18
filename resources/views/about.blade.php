@extends('layouts.app')

@section('title', 'A Propos')

@section('content')
    <div class="container-fluid text-center">

        <div class="row justify-content-evenly">

            <p class="fs-1 fw-bold text-center p-5 text-uppercase">Qui suis-je ?</p>

            <div class="col-12 col-md-6 col-lg-3 text-center">
                <img src="{{ asset('images/photoDeMoi.jpg') }}" class="rounded w-75 mt-5" alt="photo de moi">
            </div>

            <div class="col-12 col-md-6 col-lg-4 text-justify" style="text-align: justify;">
                <p class="fs-6 mt-5">Passionné par l'informatique le numérique et la programmation en général, j’ai suivi une filière STI2D option SIN (Systèmes Informatiques et Numériques). J’y ai appris les bases de HTML et CSS, le réseau informatique, le code binaire avec des conversions de base, etc. À partir de là, l’idée d’être développeur web m’est apparue comme une évidence, surtout le côté programmation. Puis, après avoir quitté les études pour raisons personnelles, j’ai été stagiaire à Une Formation Pour Moi, c’est Possible ? par OnlineFormaPRO à Dijon.<br>Ensuite, c’est écoulé 2 années de pandémie où ne trouvant pas de formation à proprement parler, j’ai suivi pas mal de dispositifs, du Digital’Access à Fabrik Ton Parcours en passant par la Garantie Jeune et l’E2C (École de la 2ème chance) ainsi que le Contrat Engagement Jeune. Après Fabrik Ton Parcours (préparation aux métiers du sport, de l’animation et du numérique), j’ai finalement entamé une formation Développeur Web et Web Mobile par Web Force 3 à l’issue de laquelle j’ai effectué un stage, à savoir la création d’un site internet en intégrant les recommandations de sécurité pour mon association de musique, ayant obtenu avec succès le Titre Professionnel Développeur Web et Web Mobile de niveau 5 (BAC + 2).<br>Après cette formation, sur les conseils du jury lors du passage du Titre Professionnel, j’ai suivi la formation Concepteur Développeur d’Applications durant laquelle j’ai effectué ce stage dans le laboratoire CIAD, une antenne de l’Université de Bourgogne-Franche-Comté ayant obtenu avec succès la Certification Développement d'Applications pour enchaîner sur un Bachelor Développeur Full Stack (BAC+3) enfin finir sur un master IA & DATA (BAC+5). Je suis également depuis bientôt 10 ans musicien en fanfare, batterie-fanfare, harmonie et dans plusieurs projets musicaux en tout genre (rock, metal, électro, etc...).</p>
            </div>
        </div>

        <div class="row justify-content-evenly">
            <p class="fs-2 text-center p-5">Les différents langages que je suis capable d'utiliser :</p>

            <div class="container text-center">
                <div class="row justify-content-evenly pt-3">
                    <div class="col-12 col-md-6 col-lg-3 pb-3 text-center">
                        <img src="{{ asset('images/htmlcssjslogos.jpg') }}" class="img-thumbnail" alt="Logos HTML, CSS et JavaScript">
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 text-center">
                        <img src="{{ asset('images/php.png') }}" class="img-thumbnail" alt="Logo PHP">
                    </div>
                </div>

                <div class="row justify-content-evenly pt-3">
                    <div class="col-12 col-md-6 col-lg-3 pb-4 text-center">
                        <img src="{{ asset('images/pythonjavaarduinoclogos.png') }}" class="img-thumbnail" alt="Logos Python, Java, Arduino et C++">
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 text-center">
                        <img src="{{ asset('images/sql.png') }}" class="img-thumbnail" alt="Logo SQL">
                    </div>
                </div>

                <p class="fs-2 text-center p-5">Ainsi que ces différents Frameworks et environnements :</p>

                <div class="row justify-content-evenly pt-3">
                    <div class="col-12 col-md-6 col-lg-3 pb-3 text-center">
                        <img src="{{ asset('images/bootstrap5logo.jpg') }}" class="img-thumbnail" alt="Logo Bootstrap">
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 text-center">
                        <img src="{{ asset('images/flutter.png') }}" class="img-thumbnail" alt="Logo Flutter">
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 text-center">
                        <img src="{{ asset('images/docker.jpg') }}" class="img-thumbnail" alt="Logo Docker">
                    </div>
                </div>

                <div class="row justify-content-evenly pt-3">
                    <div class="col-12 col-md-6 col-lg-3 pb-4 text-center">
                        <img src="{{ asset('images/symfonylogos.jpg') }}" class="img-thumbnail" alt="Logo Symfony">
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 text-center">
                        <img src="{{ asset('images/laravel.jpg') }}" class="img-thumbnail" alt="Logo Laravel">
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 text-center">
                        <img src="{{ asset('images/fastapi.png') }}" class="img-thumbnail" alt="Logo FastAPI">
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
