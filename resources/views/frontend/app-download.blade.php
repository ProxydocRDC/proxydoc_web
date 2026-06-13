@extends('layouts.app')

@section('title', 'Télécharger ProxyDoc')
@section('meta_description', 'Téléchargez l\'application ProxyDoc sur l\'App Store ou Google Play.')

@section('body_wrapper_start')
<div class="sub-banner">
@endsection

@section('banner')
<section class="banner-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="banner_content" data-aos="fade-up">
                    <div class="box">
                        <a href="{{ route('home') }}" class="text text-decoration-none text-white"><span class="mb-0">Accueil</span></a>
                        <figure class="mb-0"><img src="{{ asset('assets/images/subbanner_arrow.png') }}" alt="" class="img-fluid"></figure>
                        <span class="mb-0 box_span">Application</span>
                    </div>
                    <h1>Télécharger ProxyDoc</h1>
                    <p class="mb-0 text-white">Choisissez votre store pour installer l'application sur votre appareil.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('body_wrapper_end')
</div>
@endsection

@section('content')
<section class="available-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12 col-12 text-center">
                <h2 class="text-white mb-3">L'app disponible sur tous les appareils</h2>
                <p class="text-white mb-4">Sélectionnez la boutique correspondant à votre téléphone pour télécharger ProxyDoc.</p>
                <div class="available-imagewrapper d-flex flex-wrap justify-content-center align-items-center">
                    <a class="image_apple mr-3 mb-3" href="{{ $iosUrl }}" data-track-action="qr_fallback_ios" data-track-context="app_qr" target="_blank" rel="noopener">
                        <figure class="mb-0 available-apple">
                            <img class="img-fluid" src="{{ asset('assets/images/bannerapple-img1.png') }}" alt="App Store">
                        </figure>
                    </a>
                    <a class="image_google mb-3" href="{{ $androidUrl }}" data-track-action="qr_fallback_android" data-track-context="app_qr" target="_blank" rel="noopener">
                        <figure class="mb-0 available-google">
                            <img class="img-fluid" src="{{ asset('assets/images/bannergoogle-img2.png') }}" alt="Google Play">
                        </figure>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
