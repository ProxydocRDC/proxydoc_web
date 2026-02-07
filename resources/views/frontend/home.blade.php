@extends('layouts.app')

@section('title', 'ProxyDoc – Plateforme digitale de santé')
@section('meta_description', 'ProxyDoc améliore l’accès aux services pharmaceutiques et médicaux grâce au numérique. Téléchargez l’application.')

@section('body_wrapper_start')
<div class="banner_outer">
@endsection

@section('banner')
<section class="banner-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="banner_content" data-aos="fade-down">
                    <h3 class="text-white">Connecter pour une meilleure santé</h3>
                    <p class="text-white">Accédez aux pharmacies, aux professionnels de santé et aux contenus médicaux fiables, partout et à tout moment.</p>
                    <span >Disponible sur :</span>
                    <div class="image_wrapper">
                        <a href="{{ $appLinks->app_store_url ?? 'https://apps.apple.com/cd/app/proxydoc/id6752807730?l=fr-FR' }}" target="_blank" rel="noopener">
                            <figure class="mb-0 image_apple">
                                <img class="img-fluid" src="{{ asset('assets/images/bannerapple-img1.png') }}" alt="App Store">
                            </figure>
                        </a>
<a class="image_google" href="{{ $appLinks->play_store_url ?? 'https://play.google.com/store/apps/details?id=org.proxydoc.mobileapp' }}" target="_blank" rel="noopener">
                                <figure class="mb-0 image_google">
                                    <img class="img-fluid" src="{{ asset('assets/images/bannergoogle-img2.png') }}" alt="Google Play">
                                </figure>
                            </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="banner_wrapper2">
                    <figure class="mb-0 bannerphoneback">
                        <img src="{{ asset('assets/images/bannerphoneback-image1.png') }}" alt="">
                    </figure>
                    <figure class="mb-0 bannerphone2" >
                        <img class="img-fluid" src="{{ asset('assets/images/bannerphone2-img.png') }}" alt="">
                    </figure>
                    <figure class="mb-0 bannerphone-circleicon">
                        <img src="{{ asset('assets/images/bannerphone-circleicon.png') }}" alt="">
                    </figure>
                    <figure class="mb-0 bannerphone-circle">
                        <img class="img-fluid" src="{{ asset('assets/images/bannerphone-circle.png') }}" alt="">
                    </figure>
                    <figure class="mb-0 bannerphone1">
                        <img src="{{ asset('assets/images/bannerphone1-img.png') }}" alt="">
                    </figure>
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
<!-- Partner -->
<div class="partner-section">
    <div class="container">
        <div class="partner_box" data-aos="fade-up">
            <ul class="mb-0 list-unstyled">
                @forelse($partners ?? [] as $index => $partner)
                <li><figure class="mb-0 partner1 {{ $index > 0 ? 'partner' . ($index + 1) : '' }}"><img class="img-fluid" src="{{ asset($partner->logo) }}" alt="{{ $partner->name }}"></figure></li>
                @empty
                <li><figure class="mb-0 partner1"><img class="img-fluid" src="{{ asset('assets/images/partner1.png') }}" alt=""></figure></li>
                <li><figure class="mb-0 partner1 partner2"><img class="img-fluid" src="{{ asset('assets/images/partner2.png') }}" alt=""></figure></li>
                <li><figure class="mb-0 partner1 partner3"><img class="img-fluid" src="{{ asset('assets/images/partner3.png') }}" alt=""></figure></li>
                <li><figure class="mb-0 partner1 partner4"><img class="img-fluid" src="{{ asset('assets/images/partner4.png') }}" alt=""></figure></li>
                <li><figure class="mb-0 partner1 partner5"><img class="img-fluid" src="{{ asset('assets/images/partner5.png') }}" alt=""></figure></li>
                @endforelse
            </ul>
        </div>
    </div>
</div>
<!-- About Us -->
<section class="aboutus-section overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="aboutus_content">
                    <h4>À propos</h4>
                    <h2 class="mb-0">Pourquoi choisir ProxyDoc</h2>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                <div class="aboutus_text" data-aos="fade-left">
                    <p class="mb-0">ProxyDoc est une plateforme digitale conçue pour faciliter l’accès aux services pharmaceutiques et médicaux. Nous connectons les patients aux pharmacies et aux professionnels de santé grâce à une application mobile et un site vitrine professionnel, avec une gestion sécurisée via un panneau d’administration dédié.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features -->
<section class="basic-feature" id="basic-feature">
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
                        <h4>Nos fonctionnalités</h4>
                        <h2>Les atouts de l’application ProxyDoc</h2>
                    </div>
                    <div class="feature_lowercontent" data-aos="fade-up">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="feature-box">
                                    <figure class="feature-marketicon">
                                        <img src="{{ asset('assets/images/feature-marketicon.png') }}" alt="" class="img-fluid">
                                    </figure>
                                    <h6>ProxyChat</h6>
                                    <p class="text-size-18 mb-0">Consultations en ligne avec des médecins généralistes et spécialistes par chat, appel vocal ou vidéo dans l’application.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="feature-design">
                                    <div class="feature-box">
                                        <figure class="feature-graphicon feature-box-2">
                                            <img src="{{ asset('assets/images/feature-graphicon.png') }}" alt="" class="img-fluid">
                                        </figure>
                                        <h6>ProxyChem</h6>
                                        <p class="text-size-18 mb-0">Pharmacie en ligne pour acheter des produits pharmaceutiques et se faire livrer rapidement à domicile.</p>
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
                                        <h6>ProxyFamily</h6>
                                        <p class="text-size-18 mb-0">Suivi de santé par un médecin de famille et consultations à domicile programmées selon vos besoins.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="feature-design feature-guide">
                                        <div class="feature-box">
                                            <figure class="feature-guideicon feature-box-4">
                                                <img src="{{ asset('assets/images/feature-guideicon.png') }}" alt="" class="img-fluid">
                                            </figure>
                                            <h6>ProxyGency</h6>
                                            <p class="text-size-18 mb-0">Organisation des soins d’urgence et déclenchement d’une assistance médicale par ambulance.</p>
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
<!-- offer-video -->
<div class="offer-videosection">
    <div class="container">
        <div class="row position-relative">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="position-relative">
                    <a class="popup-vimeo video-play-link" href="{{ asset('assets/video/video.MP4') }}">
                        <figure class="mb-0 vediosession">
                            <img class="thumb img-fluid"
                            style="cursor: pointer" src="{{ asset('assets/images/video.jpg.jpeg') }}" alt="">
                        </figure>
                        <span class="video-play-btn" aria-hidden="true"><i class="fa-solid fa-play"></i></span>
                    </a>
                </div>
            </div>
            <figure class="mb-0 image-sidecircle">
                <img class="img-fluid" src="{{ asset('assets/images/image-sidecircle.png') }}" alt="">
            </figure>
        </div>
    </div>
</div>
<!-- offers -->
<section class="offer-section">
    <div class="container">
        <figure class="mb-0 offer-sidelayer">
            <img src="{{ asset('assets/images/offer-sidelayer.png') }}" alt="">
        </figure>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="offer_content" data-aos="fade-down">
                    <h4 class="text-white">Ce que nous proposons</h4>
                    <h2 class="text-white">Une plateforme dédiée à votre santé</h2>
                    <p class="text-white">ProxyDoc réunit plusieurs services clés : <strong>ProxyChat</strong> pour les consultations médicales en ligne, <strong>ProxyChem</strong> pour la pharmacie en ligne et <strong>ProxyFamily</strong> pour le suivi par un médecin de famille. L’application mobile est disponible sur Android et iOS afin d’améliorer concrètement l’accès aux soins.</p>
                    <div class="offer-imagewrapper">
                        <a class="image_apple" href="{{ $appLinks->app_store_url ?? 'https://apps.apple.com/cd/app/proxydoc/id6752807730?l=fr-FR' }}" target="_blank" rel="noopener">
                            <figure class="mb-0 offer-apple">
                                <img class="img-fluid" src="{{ asset('assets/images/bannerapple-img1.png') }}" alt="">
                            </figure>
                        </a>
                        <a class="image_google" href="{{ $appLinks->play_store_url ?? 'https://play.google.com/store/apps/details?id=org.proxydoc.mobileapp' }}" target="_blank" rel="noopener">
                            <figure class="mb-0 offer-google">
                                <img class="img-fluid" src="{{ asset('assets/images/bannergoogle-img2.png') }}" alt="">
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Ease of Search -->
<section class="search-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="search_content" data-aos="fade-up">
                    <figure class="search-icon">
                        <img src="{{ asset('assets/images/search-icon.png') }}" alt="" class="img-fluid">
                    </figure>
                    <h2>Recherche simplifiée</h2>
                    <p>Trouvez en quelques clics un médecin généraliste ou spécialiste disponible sur ProxyChat.</p>
                    <p class="p-text">Recherchez également un produit pharmaceutique via ProxyChem, puis faites‑vous livrer rapidement grâce à nos pharmacies partenaires.</p>
                    <div class="search-button">
                        <a class="try_free_btn" href="{{ route('contact') }}" data-track-action="contact_cta" data-track-context="hero">Nous contacter</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="search_wrapper">
                    <figure class="mb-0 search-sidecircle">
                        <img class="img-fluid" src="{{ asset('assets/images/search-sidecircle.png') }}" alt="">
                    </figure>
                    <figure class="mb-0 search-phoneback">
                        <img src="{{ asset('assets/images/search-phoneback.png') }}" alt="">
                    </figure>
                    <figure class="mb-0 search-phone1">
                        <img class="img-fluid" src="{{ asset('assets/images/search-phone1.png') }}" alt="">
                    </figure>
                    <figure class="mb-0 search-phone2">
                        <img class="img-fluid" src="{{ asset('assets/images/search-phone2.png') }}" alt="">
                    </figure>
                </div>
            </div>
        </div>
<!-- Manage -->
        <div class="manage-section">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 order-md-1 order-2">
                    <div class="manage_wrapper">
                        <figure class="mb-0 manage-sidecircle">
                            <img class="img-fluid" src="{{ asset('assets/images/manage-sidecircle.png') }}" alt="">
                        </figure>
                        <figure class="mb-0 manage-phoneback">
                            <img src="{{ asset('assets/images/manage-phoneback.png') }}" alt="">
                        </figure>
                        <figure class="mb-0 manage-phone2">
                            <img class="img-fluid" src="{{ asset('assets/images/manage-phone2.png') }}" alt="">
                        </figure>
                        <figure class="mb-0 manage-phone1">
                            <img class="img-fluid" src="{{ asset('assets/images/manage-phone1.png') }}" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 order-md-2 order-1">
                    <div class="manage_content" data-aos="fade-up">
                        <figure class="search-icon manage-icon">
                            <img src="{{ asset('assets/images/manage-icon.png') }}" alt="" class="img-fluid">
                        </figure>
                        <h2>Gérez votre santé au quotidien</h2>
                        <p>Suivez vos rendez-vous, consultez les pharmacies à proximité et accédez aux articles de prévention et d’information santé.</p>
                        <p class="p-text">ProxyDoc s’engage à mettre à disposition des outils simples et fiables pour une meilleure prise en charge.</p>
                        <div class="manage-button">
                            <a class="try_free_btn" href="{{ route('contact') }}" data-track-action="contact_cta" data-track-context="manage_section">Nous contacter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- statistics -->
<section class="statistics-section" id="statistics">
    <div class="container">
        <figure class="mb-0 statistics-sidelayer">
            <img src="{{ asset('assets/images/statistics-sidelayer.png') }}" alt="">
        </figure>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="statistics_content">
                    <h4 class="text-white">Chiffres clés</h4>
                    <h2 class="text-white">ProxyDoc en quelques chiffres</h2>
                    <p class="text-white">Notre plateforme évolue pour répondre aux besoins des patients et des acteurs de la santé en République Démocratique du Congo et au-delà.</p>
                </div>
            </div>
        </div>
        <div class="statistics-value" data-aos="fade-down">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="number1">
                        <span class="value1 counter">120</span>
                        <sup class="mb-0 plus">+</sup>
                        <span class="text1">Pharmacies</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="number1">
                        <span class="value1 counter">10000</span>
                        <sup class="mb-0 plus">+</sup>
                        <span class="text1 text2">Utilisateurs</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="number1">
                        <span class="value1 counter">500</span>
                        <sup class="mb-0 plus">+</sup>
                        <span class="mb-0 text1 text3">Avis</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="number1 number4">
                        <span class="value1 counter">15000</span>
                        <sup class="mb-0 plus">+</sup>
                        <span class="mb-0 text1 text4">Téléchargements</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Pricing Plan -->
<section class="price-section">
    <div class="container">
        <figure class="mb-0 price-circle">
            <img class="img-fluid" src="{{ asset('assets/images/price-circle.png') }}" alt="">
        </figure>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="price_heading">
                    <h4>Nos offres</h4>
                    <h2>ProxyChat, ProxyChem & ProxyFamily</h2>
                </div>
            </div>
        </div>
        <div class="price-block">
            <div class="row" data-aos="fade-up">
                <figure class="mb-0 price-sidecircle">
                    <img class="img-fluid" src="{{ asset('assets/images/price-sidecircle.png') }}" alt="">
                </figure>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-md-0 mb-4">
                    <div class="price_content hover1">
                        <div class="icon-size1">
                            <figure class="mb-0 price-basicicon">
                                <img src="{{ asset('assets/images/price-basicicon.png') }}" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <h5 class="mb-0">ProxyChat</h5>
                        <span class="text1">Consultations en ligne</span>
                        <ul class="list-unstyled mb-0">
                            <li class="text-size-18">Rendez-vous avec médecins généralistes & spécialistes</li>
                            <li class="text-size-18">Consultations par chat, appel vocal ou vidéo</li>
                            <li class="text-size-18">Orientation vers un établissement physique si nécessaire</li>
                            <li class="for-space text-size-18">Historique des échanges médicalisés</li>
                        </ul>
                        <div class="price-button">
                            <a class="get_started basic" href="{{ route('contact') }}" data-track-action="contact_cta" data-track-context="pricing">Commencer</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-md-0 mb-4">
                    <div class="price_content price_content1 hover2">
                        <div class="icon-size1 icon-size2">
                            <figure class="mb-0  price-premiumicon">
                                <img src="{{ asset('assets/images/price-premiumicon.png') }}" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <h5 class="mb-0">ProxyChem</h5>
                        <span class="text1 text2">Pharmacie en ligne</span>
                        <ul class="list-unstyled mb-0">
                            <li class="text-size-18">Recherche et commande de produits pharmaceutiques</li>
                            <li class="text-size-18">Livraison à domicile via pharmacies partenaires</li>
                            <li class="text-size-18">Respect des règles (médicaments avec ou sans ordonnance)</li>
                            <li class="for-space text-size-18">Suivi des commandes</li>
                        </ul>
                        <div class="price-button">
                            <a class="get_started premium" href="{{ route('contact') }}" data-track-action="contact_cta" data-track-context="pricing">Nous contacter</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="price_content price_content2 hover3">
                        <div class="icon-size1 icon-size3">
                            <figure class="mb-0  price-businessicon">
                                <img src="{{ asset('assets/images/price-businessicon.png') }}" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <h5 class="mb-0">ProxyFamily</h5>
                        <span class="text1 text3">Médecin de famille</span>
                        <ul class="list-unstyled mb-0">
                            <li class="text-size-18">Consultations médicales à domicile planifiées</li>
                            <li class="text-size-18">Suivi de long terme avec un même praticien</li>
                            <li class="text-size-18">Prise en charge personnalisée du foyer</li>
                            <li class="for-space text-size-18">Idéal pour familles & patients chroniques</li>
                        </ul>
                        <div class="price-button">
                            <a class="get_started business" href="{{ route('contact') }}" data-track-action="contact_cta" data-track-context="pricing">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FAQ's -->
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
                                        <p class="pp text-left mb-0 p-0">Oui. L’application ProxyDoc est gratuite pour les particuliers sur Google Play et l’App Store. Elle permet de rechercher des pharmacies, de consulter des contenus médicaux et d’accéder aux services de base sans frais.</p>
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
                                        <p class="pp text-left mb-0 p-0">Vous pouvez nous joindre par email à <a href="mailto:contact@proxydoc.org">contact@proxydoc.org</a> ou par téléphone au <a href="tel:+243823235255">+243 823 235 255</a>, ou via le formulaire de contact sur ce site. Notre équipe est basée en République Démocratique du Congo et répond aux demandes dans les meilleurs délais.</p>
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
                                        <p class="pp text-left mb-0 p-0">ProxyDoc est lancé en République Démocratique du Congo avec une vision d’extension en Afrique. L’application peut être téléchargée depuis les stores internationaux ; la couverture des pharmacies et services dépend des partenariats par pays.</p>
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
<!-- Available -->
<section class="available-section" id="get-app">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                <div class="available_content">
                    <h2 class="text-white">L’app disponible sur tous les appareils</h2>
                    <p class="text-white">Téléchargez ProxyDoc sur votre smartphone ou tablette et accédez aux services de santé où que vous soyez.</p>
                    <div class="available-imagewrapper">
                        <a class="image_apple" href="{{ $appLinks->app_store_url ?? 'https://apps.apple.com/cd/app/proxydoc/id6752807730?l=fr-FR' }}" target="_blank" rel="noopener">
                            <figure class="mb-0 available-apple">
                                <img class="img-fluid" src="{{ asset('assets/images/bannerapple-img1.png') }}" alt="App Store">
                            </figure>
                        </a>
                        <a class="image_google" href="{{ $appLinks->play_store_url ?? 'https://play.google.com/store/apps/details?id=org.proxydoc.mobileapp' }}" target="_blank" rel="noopener">
                            <figure class="mb-0 available-google">
                                <img class="img-fluid" src="{{ asset('assets/images/bannergoogle-img2.png') }}" alt="Google Play">
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-12">
                <div class="available_wrapper">
                    <figure class="mb-0 available-phone1">
                        <img class="img-fluid" src="{{ asset('assets/images/available-phone1.png') }}" alt="">
                    </figure>
                    <figure class="mb-0 available-phone3">
                        <img src="{{ asset('assets/images/available-phone3.png') }}" alt="">
                    </figure>
                </div>
            </div>
        </div>
        <figure class="mb-0 available-phone2">
            <img class="img-fluid" src="{{ asset('assets/images/available-phone2.png') }}" alt="">
        </figure>
        <figure class="mb-0 available-sidelayer">
            <img src="{{ asset('assets/images/available-sidelayer.png') }}" alt="">
        </figure>
    </div>
</section>
@endsection
