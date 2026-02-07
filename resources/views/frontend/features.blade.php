@extends('layouts.app')

@section('title', 'Fonctionnalités – ProxyDoc')
@section('meta_description', 'Découvrez les fonctionnalités de l’application ProxyDoc : pharmacies, contenus santé, support.')

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
                        <span class="mb-0 box_span">Fonctionnalités</span>
                    </div>
                    <h1>Nos fonctionnalités</h1>
                    <p class="mb-0 text-white">Découvrez les atouts de l’application ProxyDoc pour les patients et les professionnels de santé.</p>
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
                        <h2>Fonctionnalités de l’application</h2>
                    </div>
            </div>
        </div>
        <div class="feature-block">
            <div class="row" data-aos="fade-up">
                <figure class="mb-0 price-sidecircle">
                    <img class="img-fluid" src="{{ asset('assets/images/price-sidecircle.png') }}" alt="">
                </figure>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12" id="proxychat">
                    <div class="feature_aboutcontent box hover1">
                        <div class="icon-size1">
                            <figure class="mb-0 feature-friendicon">
                                <img src="{{ asset('assets/images/feature-friendicon.png') }}" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <h5>ProxyChat</h5>
                        <p class="mb-0 text-size-18">Consultations médicales en ligne avec prise de rendez-vous et échanges par chat, appel vocal ou vidéo directement dans l’application.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12" id="proxychem">
                    <div class="feature_aboutcontent box hover2">
                        <div class="icon-size1 icon-size2">
                            <figure class="mb-0 feature-syncicon">
                                <img src="{{ asset('assets/images/feature-syncicon.png') }}" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <h5>ProxyChem</h5>
                        <p class="mb-0 text-size-18">Pharmacie en ligne pour acheter des produits pharmaceutiques et se faire livrer rapidement à domicile.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12" id="proxygency">
                    <div class="feature_aboutcontent box hover3">
                        <div class="icon-size1 icon-size3">
                            <figure class="mb-0 feature-powericon">
                                <img src="{{ asset('assets/images/feature-powericon.png') }}" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <h5>ProxyGency</h5>
                        <p class="mb-0 text-size-18">Organisation des soins d’urgence et assistance médicale par ambulance via la plateforme ProxyDoc.</p>
                    </div>
                </div>
            </div>
            <div class="row" data-aos="fade-up">
                <div class="col-lg-4 col-md-4 col-sm-12 col-12" id="proxynews">
                    <div class="feature_aboutcontent box hover4">
                        <div class="icon-size1 icon-size4">
                            <figure class="mb-0 feature-effecticon">
                                <img src="{{ asset('assets/images/feature-effecticon.png') }}" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <h5>ProxyNews</h5>
                        <p class="mb-0 text-size-18">Flux d’articles et d’actualités santé pour rester informé des bonnes pratiques et des campagnes de prévention.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12" id="proxyfamily">
                    <div class="feature_aboutcontent box hover5">
                        <div class="icon-size1 icon-size5">
                            <figure class="mb-0 feature-accessicon">
                                <img src="{{ asset('assets/images/feature-accessicon.png') }}" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <h5>ProxyFamily</h5>
                        <p class="mb-0 text-size-18">Service de médecin de famille pour des consultations programmées à domicile selon des échéances prédéfinies.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="feature_aboutcontent box hover6">
                        <div class="icon-size1 icon-size6">
                            <figure class="mb-0 feature-analyticicon.">
                                <img src="{{ asset('assets/images/feature-analyticicon.png') }}" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <h5>Plateforme sécurisée</h5>
                        <p class="mb-0 text-size-18">Dossier médical électronique, échanges chiffrés de bout en bout et outils d’analytics à long terme.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="basic-feature feature-basicfeature">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="feature_wrapperleft">
                    <figure class="mb-0 feature-circle">
                        <img class="img-fluid" src="{{ asset('assets/images/feature-circle.png') }}" alt="">
                    </figure>
                    <figure class="mb-0 featurephoneback">
                        <img src="{{ asset('assets/images/featurephoneback-img.png') }}" alt="">
                    </figure>
                    <figure class="mb-0 featurephone">
                        <img class="img-fluid" src="{{ asset('assets/images/featurephone-img.png') }}" alt="">
                    </figure>
                    <figure class="mb-0 featurephone-over">
                        <img class="img-fluid" src="{{ asset('assets/images/featurephone-over.png') }}" alt="">
                    </figure>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="feature_wrapperright">
                    <div class="feature_content">
                        <h4>Fonctionnalités de base</h4>
                        <h2>Les meilleurs atouts ProxyDoc</h2>
                    </div>
                    <div class="feature_lowercontent" data-aos="fade-up">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="feature-box">
                                    <figure class="feature-marketicon">
                                        <img src="{{ asset('assets/images/feature-marketicon.png') }}" alt="" class="img-fluid">
                                    </figure>
                                    <h6>Pharmacies & produits</h6>
                                    <p class="text-size-18 mb-0">Recherche et visibilité des pharmacies partenaires et des produits de santé.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="feature-design">
                                    <div class="feature-box">
                                        <figure class="feature-graphicon feature-box-2">
                                            <img src="{{ asset('assets/images/feature-graphicon.png') }}" alt="" class="img-fluid">
                                        </figure>
                                        <h6>Contenus santé</h6>
                                        <p class="text-size-18 mb-0">Articles et conseils médicaux accessibles à tous.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feature-downcontent">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="feature-box">
                                        <figure class="feature-graphicon feature-box-3">
                                            <img src="{{ asset('assets/images/feature-supporticon.png') }}" alt="" class="img-fluid">
                                        </figure>
                                        <h6>Support</h6>
                                        <p class="text-size-18 mb-0">Assistance et accompagnement des utilisateurs.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="feature-design feature-guide">
                                        <div class="feature-box">
                                            <figure class="feature-guideicon feature-box-4">
                                                <img src="{{ asset('assets/images/feature-guideicon.png') }}" alt="" class="img-fluid">
                                            </figure>
                                            <h6>Guide utilisateur</h6>
                                            <p class="text-size-18 mb-0">Interface claire et prise en main facile.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="partner-section feature-partner">
    <div class="container">
        <div class="partner_box" data-aos="fade-up">
            <ul class="mb-0 list-unstyled">
                <li><figure class="mb-0 partner1"><img class="img-fluid" src="{{ asset('assets/images/partner1.png') }}" alt=""></figure></li>
                <li><figure class="mb-0 partner1 partner2"><img class="img-fluid" src="{{ asset('assets/images/partner2.png') }}" alt=""></figure></li>
                <li><figure class="mb-0 partner1 partner3"><img class="img-fluid" src="{{ asset('assets/images/partner3.png') }}" alt=""></figure></li>
                <li><figure class="mb-0 partner1 partner4"><img class="img-fluid" src="{{ asset('assets/images/partner4.png') }}" alt=""></figure></li>
                <li><figure class="mb-0 partner1 partner5"><img class="img-fluid" src="{{ asset('assets/images/partner5.png') }}" alt=""></figure></li>
            </ul>
        </div>
    </div>
</div>

@include('frontend.partials.available-app')
@endsection
