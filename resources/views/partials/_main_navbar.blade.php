{{-- Menu principal du site --}}
<nav class="container d-flex flex-column flex-md-row justify-content-center m-0 p-1 w-100 mw-100 navbar-dark bg-black">
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link fs-5 text-uppercase {{ request()->routeIs('main.home') ? 'active' : '' }}" aria-current="page" href="{{ route('main.home') }}"><i class="fa-solid fa-house-user mx-1"></i>Accueil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-5 text-uppercase {{ request()->routeIs('app.about') ? 'active' : '' }}" href="{{ route('app.about') }}"><i class="fa-solid fa-address-card mx-1"></i>À Propos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-5 text-uppercase {{ request()->routeIs('app.portfolio') ? 'active' : '' }}" href="{{ route('app.portfolio') }}"><i class="fa-solid fa-address-card mx-1"></i>Portfolio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-5 text-uppercase {{ request()->routeIs('contact.show') ? 'active' : '' }}" href="{{ route('contact.show') }}"><i class="fa-solid fa-address-book mx-1"></i>Contact</a>
        </li>
    </ul>
</nav>
