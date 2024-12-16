@extends('layouts.app')

@section('title', 'Portfolio')

@section('content')
    <div class="container-fluid text-center">

        <p class="fs-1 fw-bold text-center pt-5 pb-1 text-uppercase">Portfolio</p>

        <p class="fs-4 p-2 text-center">Vous trouverez ici toutes mes créations et projets</p>

        <div class="container text-center">
            <div class="row justify-content-evenly pt-3">
                <div class="col-12 col-md-6 col-lg-3 pb-3 text-center">
                    <img src="{{ asset('images/img_le_blog_de_batman.jpg') }}" class="img-thumbnail" alt="Le Blog De Batman">
                </div>
                <div class="col-12 col-md-6 col-lg-3 text-center">
                    <img src="{{ asset('images/img_nina_city.jpg') }}" class="img-thumbnail" alt="Nina City">
                </div>
            </div>

            <div class="row justify-content-evenly pt-3">
                <div class="col-12 col-md-6 col-lg-3 pb-4 text-center">
                    <img src="{{ asset('images/ima_air_crash_disaster.jpg') }}" class="img-thumbnail" alt="Air Crash Disaster">
                </div>
                <div class="col-12 col-md-6 col-lg-3 text-center">
                    <img src="{{ asset('images/MonCV 2024.jpg') }}" class="img-thumbnail" alt="Mon CV">
                </div>
            </div>
        </div>
    </div>
@endsection
