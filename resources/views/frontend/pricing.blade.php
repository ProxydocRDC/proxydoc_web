@extends('layouts.app')

@section('title', 'Tarifs – ProxyDoc')
@section('meta_description', 'Offres ProxyDoc : particuliers, pharmacies partenaires, API et intégrations.')

@section('body_wrapper_start')
<div class="outer_background">
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
                        <span class="mb-0 box_span">Tarifs</span>
                    </div>
                    <h1>Nos offres</h1>
                    <p class="mb-0 text-white">Choisissez l’offre adaptée à votre profil : particulier, pharmacie ou partenaire.</p>
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
</div>
<section class="pricing-section" id="pricing-plan">
    <div class="container">
        <figure class="mb-0 price-circle">
            <img class="img-fluid" src="{{ asset('assets/images/price-circle.png') }}" alt="">
        </figure>
        <div class="row position-relative">
            <figure class="mb-0 price-sidecircle">
                <img class="img-fluid" src="{{ asset('assets/images/price-sidecircle.png') }}" alt="">
            </figure>
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="pricing-box">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <div class="pricing_content hover1">
                                <div class="icon-size1">
                                    <figure class="mb-0 price-basicicon">
                                        <img src="{{ asset('assets/images/price-basicicon.png') }}" alt="" class="img-fluid">
                                    </figure>
                                </div>
                                <h5 class="mb-0">Particuliers</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <ul class="list-unstyled mb-0 content1">
                                <li class="text-size-18">Accès à l’application</li>
                                <li class="text-size-18">Recherche de pharmacies</li>
                                <li class="text-size-18">Articles santé</li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <ul class="list-unstyled mb-0 content1 content2">
                                <li class="text-size-18">Support communautaire</li>
                                <li class="text-size-18">Disponible 24/7</li>
                                <li class="text-size-18">Mises à jour gratuites</li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <div>
                                <span class="text1 content3">Gratuit</span>
                                <div class="price-button">
                                    <a class="get_started basic" href="{{ route('home') }}#get-app">Télécharger</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="pricing-box pricing-box2" data-aos="fade-up">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <div class="pricing_content hover3">
                                <div class="icon-size1 icon-size3">
                                    <figure class="mb-0 price-businessicon">
                                        <img src="{{ asset('assets/images/price-businessicon.png') }}" alt="" class="img-fluid">
                                    </figure>
                                </div>
                                <h5 class="mb-0">Pharmacies</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <ul class="list-unstyled mb-0 content1">
                                <li class="dot3 text-size-18">Gestion des produits</li>
                                <li class="dot3 text-size-18">Visibilité sur la plateforme</li>
                                <li class="dot3 text-size-18">Tableau de bord</li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <ul class="list-unstyled mb-0 content1 content2">
                                <li class="dot3 text-size-18">Rapports mensuels</li>
                                <li class="dot3 text-size-18">Support dédié</li>
                                <li class="dot3 text-size-18">Formation incluse</li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <span class="text1 text3 content1 content3">Sur mesure</span>
                            <div class="price-button">
                                <a class="get_started business" href="{{ route('contact') }}">Nous contacter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="pricing-box pricing-box3" data-aos="fade-up">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <div class="pricing_content hover2">
                                <div class="icon-size1 icon-size2">
                                    <figure class="mb-0 price-premiumicon">
                                        <img src="{{ asset('assets/images/price-premiumicon.png') }}" alt="" class="img-fluid">
                                    </figure>
                                </div>
                                <h5 class="mb-0">Partenaires / API</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <ul class="list-unstyled mb-0 content1">
                                <li class="dot2 text-size-18">API REST</li>
                                <li class="dot2 text-size-18">Synchronisation données</li>
                                <li class="dot2 text-size-18">Intégration e-santé</li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <ul class="list-unstyled mb-0 content1 content2">
                                <li class="dot2 text-size-18">Analytics</li>
                                <li class="dot2 text-size-18">Accompagnement technique</li>
                                <li class="dot2 text-size-18">SLA dédié</li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <div>
                                <span class="text1 text2 content1 content3 value">Sur devis</span>
                                <div class="price-button">
                                    <a class="get_started premium" href="{{ route('contact') }}">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>

<section class="accordian-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="accordian_content">
                    <h4>Des questions ?</h4>
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
                                        <h6>L’app pour les particuliers est-elle vraiment gratuite ?</h6>
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne">
                                    <div class="card-body">
                                        <p class="pp text-left mb-0 p-0">Oui. L’application ProxyDoc est gratuite pour les utilisateurs particuliers. Les pharmacies et partenaires peuvent souscrire à des offres sur mesure.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="card-header" id="headingTwo">
                                    <a href="#" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <h6>Comment devenir pharmacie partenaire ?</h6>
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                                    <div class="card-body">
                                        <p class="pp text-left mb-0 p-0">Contactez-nous via le formulaire de contact ou à support@proxydoc.cd. Nous vous présenterons les modalités et l’accès au panneau d’administration Filament.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="card-header" id="headingThree">
                                    <a href="#" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <h6>Qu’est-ce que l’offre Partenaires / API ?</h6>
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree">
                                    <div class="card-body">
                                        <p class="pp text-left mb-0 p-0">Elle s’adresse aux acteurs de la e-santé qui souhaitent intégrer les données ou services ProxyDoc via une API REST. Tarifs et fonctionnalités sur devis.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="card-header" id="headingFour">
                                    <a href="#" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <h6>Puis-je annuler ou changer d’offre ?</h6>
                                    </a>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour">
                                    <div class="card-body">
                                        <p class="pp text-left mb-0 p-0">Pour les particuliers, l’utilisation reste gratuite. Pour les pharmacies et partenaires, les conditions sont précisées dans le contrat ; notre équipe peut vous accompagner pour toute évolution.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 d-lg-block d-none"></div>
            <figure class="mb-0 faq_shape">
                <img src="{{ asset('assets/images/faq_icon.png') }}" alt="" class="img-fluid">
            </figure>
        </div>
    </div>
</section>

@include('frontend.partials.available-app')
@endsection
