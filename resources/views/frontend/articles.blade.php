@extends('layouts.app')

@section('title', 'Articles & actualités – ProxyDoc')
@section('meta_description', 'Articles et actualités médicales ProxyDoc : prévention, santé, pharmacies.')

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
                        <span class="mb-0">Accueil</span>
                        <figure class="mb-0"><img src="{{ asset('assets/images/subbanner_arrow.png') }}" alt="" class="img-fluid"></figure>
                        <span class="mb-0 box_span">Articles</span>
                    </div>
                    <h1>Articles &amp; actualités</h1>
                    <p class="mb-0 text-white">Contenus médicaux et conseils santé accessibles au public.</p>
                </div>
            </div>
        </div>
        <figure class="mb-0 bannersidecircle1" data-aos="fade-left">
            <img src="{{ asset('assets/images/banner-sidecircle1.png') }}" alt="">
        </figure>
        <figure class="mb-0 bannersidecircle2" data-aos="fade-left">
            <img src="{{ asset('assets/images/banner-sidecircle2.png') }}" alt="">
        </figure>
    </div>
</section>
@endsection

@section('body_wrapper_end')
</div>
@endsection

@section('content')
<section class="feature-aboutsection about-section" id="about-app">
    <div class="container">
        <figure class="mb-0 price-circle">
            <img class="img-fluid" src="{{ asset('assets/images/price-circle.png') }}" alt="">
        </figure>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="feature_aboutheading">
                    <h2>Derniers articles</h2>
                </div>
            </div>
        </div>
        <div class="feature-block">
            <div class="row" data-aos="fade-up">
                <figure class="mb-0 price-sidecircle">
                    <img class="img-fluid" src="{{ asset('assets/images/price-sidecircle.png') }}" alt="">
                </figure>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="feature_aboutcontent box hover1">
                        <div class="icon-size1">
                            <figure class="mb-0 feature-friendicon">
                                <img src="{{ asset('assets/images/feature-friendicon.png') }}" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <h5>Prévention</h5>
                        <p class="mb-0 text-size-18">Bons réflexes pour la prise de médicaments : comprendre les ordonnances, respecter les posologies et éviter l’automédication dangereuse.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="feature_aboutcontent box hover2">
                        <div class="icon-size1 icon-size2">
                            <figure class="mb-0 feature-syncicon">
                                <img src="{{ asset('assets/images/feature-syncicon.png') }}" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <h5>Pharmacies</h5>
                        <p class="mb-0 text-size-18">Choisir une pharmacie de confiance : traçabilité, disponibilité des produits et conseils d’un professionnel.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="feature_aboutcontent box hover3">
                        <div class="icon-size1 icon-size3">
                            <figure class="mb-0 feature-powericon">
                                <img src="{{ asset('assets/images/feature-powericon.png') }}" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <h5>Santé digitale</h5>
                        <p class="mb-0 text-size-18">Les avantages de la e-santé au quotidien : comment des plateformes comme ProxyDoc simplifient l’accès à l’information et aux services.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('frontend.partials.available-app')
@endsection
