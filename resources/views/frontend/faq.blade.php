@extends('layouts.app')

@section('title', 'FAQ – ProxyDoc')
@section('meta_description', 'Questions fréquentes sur ProxyDoc : application, pharmacies, téléchargement, contact.')

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
                        <span class="mb-0 box_span">FAQ</span>
                    </div>
                    <h1>FAQ</h1>
                    <p class="mb-0 text-white">Retrouvez les réponses aux questions les plus fréquentes sur ProxyDoc.</p>
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
<section class="accordian-section about-section faq-section">
    <div class="container">
        <figure class="mb-0 price-circle">
            <img class="img-fluid" src="{{ asset('assets/images/price-circle.png') }}" alt="">
        </figure>
        <div class="row position-relative">
            <figure class="mb-0 price-sidecircle">
                <img class="img-fluid" src="{{ asset('assets/images/price-sidecircle.png') }}" alt="">
            </figure>
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="accordian_content">
                    <h2>Questions fréquentes</h2>
                </div>
            </div>
        </div>
        <div class="row position-relative" data-aos="fade-up">
            <div class="col-lg-1 col-md-1 col-sm-1 d-lg-block d-none"></div>
            <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
                <div class="accordian-section-inner position-relative">
                    <div class="accordian-inner">
                        <div id="accordion1">
                            <div class="accordion-card">
                                <div class="card-header" id="headingOne">
                                    <a href="#" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        <h6>Qu’est-ce que ProxyDoc ?</h6>
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne">
                                    <div class="card-body">
                                        <p class="pp text-left mb-0 p-0">ProxyDoc est une plateforme digitale de santé qui relie les patients aux pharmacies et aux professionnels de santé. L’application mobile et le site web permettent de trouver des pharmacies partenaires, consulter des articles santé et accéder à des services fiables.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="card-header" id="headingTwo">
                                    <a href="#" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <h6>L’application est-elle gratuite ?</h6>
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                                    <div class="card-body">
                                        <p class="pp text-left mb-0 p-0">Oui. L’application ProxyDoc est gratuite pour les particuliers sur Google Play et l’App Store.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="card-header" id="headingThree">
                                    <a href="#" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <h6>Comment contacter ProxyDoc ?</h6>
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree">
                                    <div class="card-body">
                                        <p class="pp text-left mb-0 p-0">Email : support@proxydoc.cd ou via le formulaire de contact sur ce site. République Démocratique du Congo.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="card-header" id="headingFour">
                                    <a href="#" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <h6>ProxyDoc est-il disponible hors RDC ?</h6>
                                    </a>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour">
                                    <div class="card-body">
                                        <p class="pp text-left mb-0 p-0">ProxyDoc est lancé en RDC avec une vision d’extension en Afrique. L’application peut être téléchargée depuis les stores internationaux.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="card-header" id="headingFive">
                                    <a href="#" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        <h6>Comment rejoindre en tant que pharmacie partenaire ?</h6>
                                    </a>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive">
                                    <div class="card-body">
                                        <p class="pp text-left mb-0 p-0">Contactez-nous via le formulaire ou à support@proxydoc.cd avec le sujet « Partenariat pharmacie ». Notre équipe vous présentera les modalités et l’accès au panneau d’administration.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="card-header" id="headingSix">
                                    <a href="#" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        <h6>Où télécharger l’application ?</h6>
                                    </a>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix">
                                    <div class="card-body">
                                        <p class="pp text-left mb-0 p-0">Sur Google Play Store (Android) et Apple App Store (iOS). Les liens sont disponibles sur la page d’accueil et en bas de chaque page du site.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 d-lg-block d-none"></div>
        </div>
    </div>
</section>

@include('frontend.partials.available-app')
@endsection
