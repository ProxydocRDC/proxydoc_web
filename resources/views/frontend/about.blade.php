@extends('layouts.app')

@section('title', 'À propos – ProxyDoc')
@section('meta_description', 'Historique et contexte de ProxyDoc, plateforme digitale de santé en RDC.')

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
                        <span class="mb-0 box_span">À propos</span>
                    </div>
                    <h1>À propos de ProxyDoc</h1>
                    <p class="mb-0 text-white">Découvrez l’historique et la vision de la plateforme digitale de santé ProxyDoc.</p>
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
<section class="about-section">
    <div class="container">
        <figure class="mb-0 price-circle">
            <img class="img-fluid" src="{{ asset('assets/images/price-circle.png') }}" alt="">
        </figure>
        <div class="row position-relative" data-aos="fade-up">
            <figure class="mb-0 price-sidecircle">
                <img class="img-fluid" src="{{ asset('assets/images/price-sidecircle.png') }}" alt="">
            </figure>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="about_content hover1">
                    <div class="icon-size1">
                        <figure class="mb-0 about-historyicon">
                            <img src="{{ asset('assets/images/about-historyicon.png') }}" alt="" class="img-fluid">
                        </figure>
                    </div>
                    <h3>Notre histoire</h3>
                    <p class="mb-0">ProxyDoc est née en République Démocratique du Congo de la volonté d’améliorer l’accès aux services pharmaceutiques et médicaux grâce au numérique. Le projet associe une application mobile, un site vitrine officiel et un panneau d’administration pour les pharmacies et partenaires.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="about_content about_content1 hover2">
                    <div class="icon-size1 icon-size2">
                        <figure class="mb-0 about-visionicon">
                            <img src="{{ asset('assets/images/about-visionicon.png') }}" alt="" class="img-fluid">
                        </figure>
                    </div>
                    <h3>Notre vision</h3>
                    <p class="mb-0">Devenir un acteur majeur de la e-santé en Afrique en connectant patients, pharmacies et professionnels de santé via une plateforme fiable, sécurisée et évolutive, avec à terme des API partenaires, du téléconseil et des services avancés.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="count-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="count_content" data-aos="fade-up">
                    <h2>Qui sommes-nous ?</h2>
                    <p>ProxyDoc est une plateforme digitale de santé qui vise à faciliter l’accès aux pharmacies, aux produits de santé et aux contenus médicaux. Le site web présente l’entreprise, son équipe, ses services et oriente les utilisateurs vers l’application mobile disponible sur Android et iOS.</p>
                    <div class="count-imagewrapper">
                        <a class="image_apple" href="https://apps.apple.com/cd/app/proxydoc/id6752807730?l=fr-FR" target="_blank" rel="noopener">
                            <figure class="mb-0 offer-apple">
                                <img class="img-fluid" src="{{ asset('assets/images/bannerapple-img1.png') }}" alt="App Store">
                            </figure>
                        </a>
                        <a class="image_google" href="https://play.google.com/store/apps/details?id=org.proxydoc.mobileapp" target="_blank" rel="noopener">
                            <figure class="mb-0 offer-google">
                                <img class="img-fluid" src="{{ asset('assets/images/bannergoogle-img2.png') }}" alt="Google Play">
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="count-rightcontent">
                    <div class="number1">
                        <span class="value1 counter">120</span>
                        <sup class="mb-0 plus1">+</sup>
                        <span class="mb-0 text1">Pharmacies</span>
                    </div>
                    <div class="number1 number2">
                        <span class="value1 value2 counter">10000</span>
                        <sup class="mb-0 plus1 plus2">+</sup>
                        <span class="mb-0 text1 text2">Utilisateurs</span>
                    </div>
                    <div class="number1 number3">
                        <span class="value1 value3 counter">500</span>
                        <sup class="mb-0 plus1 plus3">+</sup>
                        <span class="mb-0 text1 text3">Avis</span>
                    </div>
                    <div class="number1 number4">
                        <span class="value1 value4 counter">15000</span>
                        <sup class="mb-0 plus1 plus4">+</sup>
                        <span class="mb-0 text1 text4">Téléchargements</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="team-section" id="our-team">
    <div class="teams-background">
        <div class="container">
            <figure class="mb-0">
                <img src="{{ asset('assets/images/teamt-sidelayer.png') }}" alt="" class="img-fluid">
            </figure>
        </div>
    </div>
    <div class="our-teams-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="team_content">
                        <h2 class="text-white">Notre équipe</h2>
                    </div>
                </div>
            </div>
            <div class="row" data-aos="fade-up">
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="team-box">
                        <div class="upper-part">
                            <figure class="mb-0">
                                <img src="{{ asset('assets/images/team-image1.png') }}" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <div class="lower-part">
                            <h3>Fondateur</h3>
                            <p>Direction &amp; stratégie</p>
                            <ul class="list-unstyled mb-0">
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="team-box">
                        <div class="upper-part">
                            <figure class="mb-0">
                                <img src="{{ asset('assets/images/team-image2.png') }}" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <div class="lower-part">
                            <h3>Équipe technique</h3>
                            <p>Développement &amp; produit</p>
                            <ul class="list-unstyled mb-0">
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="team-box">
                        <div class="upper-part">
                            <figure class="mb-0">
                                <img src="{{ asset('assets/images/team-image3.png') }}" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <div class="lower-part">
                            <h3>Conseil médical</h3>
                            <p>Santé &amp; conformité</p>
                            <ul class="list-unstyled mb-0">
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="review-section">
    <div class="container">
        <div class="row position-relative">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="review_content">
                                <h2>Avis utilisateurs</h2>
                                <div class="content-box" data-aos="fade-up">
                                    <p>« ProxyDoc m’a permis de trouver rapidement une pharmacie ouverte près de chez moi. L’application est simple et les informations sont à jour. »</p>
                                    <h6>Utilisateur ProxyDoc</h6>
                                    <span>Patient</span>
                                    <ul class="list-unstyled mb-0">
                                        <li><a href=""><i class="fa-solid fa-star"></i></a></li>
                                        <li><a href=""><i class="fa-solid fa-star"></i></a></li>
                                        <li><a href=""><i class="fa-solid fa-star"></i></a></li>
                                        <li><a href=""><i class="fa-solid fa-star"></i></a></li>
                                        <li><a href=""><i class="fa-solid fa-star"></i></a></li>
                                    </ul>
                                    <div class="circle">
                                        <figure class="review-circlecoma">
                                            <img src="{{ asset('assets/images/review-circlecoma.png') }}" alt="" class="img-fluid">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <i class="fa-solid fa-arrow-left"></i>
                        <span class="sr-only">Précédent</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <i class="fa-solid fa-arrow-right"></i>
                        <span class="sr-only">Suivant</span>
                    </a>
                </div>
            </div>
            <figure class="mb-0 review-sidecircle">
                <img src="{{ asset('assets/images/review-sidecircle.png') }}" alt="" class="img-fluid">
            </figure>
        </div>
    </div>
</section>

@include('frontend.partials.available-app')
@endsection
