<!DOCTYPE html>
<html lang="fr">
<head>
    <title>@yield('title', 'ProxyDoc – Plateforme digitale de santé')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta charset="utf-8">
    <meta name="description" content="@yield('meta_description', 'ProxyDoc est une plateforme digitale de services médicaux et pharmaceutiques.')">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon/favicon-32x32.png') }}">
    <link href="{{ asset('assets/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @stack('head')
</head>
<body>
@yield('body_wrapper_start', '')
<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{ route('home') }}">
                <figure class="mb-0"><img src="{{ asset('assets/images/banner-logo.png') }}" alt="ProxyDoc" class="img-fluid"></figure>
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('home') }}">Accueil</a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('about') }}">À propos</a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('articles') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('articles') }}">Nos Articles</a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('faq') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
                        <a class="nav-link try_free_btn" href="{{ route('contact') }}">Nous contacter</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<figure class="mb-0 bannersidelayer">
    <img src="{{ asset('assets/images/banner-sidelayer.png') }}" alt="">
</figure>

@yield('banner')
@yield('body_wrapper_end', '')
@yield('content')

<section class="footer-section">
    <div class="container">
        <div class="middle-portion">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                    <div class="icons">
                        <a href="{{ route('home') }}">
                            <figure class="footer-logo">
                                <img src="{{ asset('assets/images/footer-logo.png') }}" alt="ProxyDoc">
                            </figure>
                        </a>
                        <ul class="list-unstyled mb-0">
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-12 d-lg-block d-none">
                    <div class="services">
                        <h3 class="heading">Services ProxyDoc</h3>
                        <ul class="list-unstyled mb-0">
                            <li><a href="{{ route('features') }}#proxychat" class="text text-decoration-none">ProxyChat – Consultations en ligne</a></li>
                            <li><a href="{{ route('features') }}#proxychem" class="text text-decoration-none">ProxyChem – Pharmacie en ligne</a></li>
                            <li><a href="{{ route('features') }}#proxygency" class="text text-decoration-none">ProxyGency – Urgences</a></li>
                            <li><a href="{{ route('features') }}#proxynews" class="text text-decoration-none">ProxyNews – Actualités santé</a></li>
                            <li><a href="{{ route('features') }}#proxyfamily" class="text text-decoration-none">ProxyFamily – Médecin de famille</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 d-sm-block">
                    <div class="links">
                        <h3 class="heading">Liens utiles</h3>
                        <ul class="list-unstyled mb-0">
                            <li><a href="{{ route('home') }}" class="text text-decoration-none">Accueil</a></li>
                            <li><a href="{{ route('about') }}" class="text text-decoration-none">À propos</a></li>
                            <li><a href="{{ route('articles') }}" class="text text-decoration-none">Nos Articles</a></li>
                            <li><a href="{{ route('faq') }}" class="text text-decoration-none">FAQ</a></li>
                            <li><a href="{{ route('contact') }}" class="text text-decoration-none">Nous contacter</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 d-md-block d-none">
                    <div class="aboutus">
                        <h3 class="heading">ProxyDoc</h3>
                        <p class="text-size-18 mb-2">Connecter pour une meilleure santé.</p>
                        <ul class="list-unstyled mb-0">
                            <li><a href="{{ route('home') }}#get-app" class="text text-decoration-none">Télécharger l'app</a></li>
                            <li><a href="https://apps.apple.com/cd/app/proxydoc/id6752807730?l=fr-FR" target="_blank" rel="noopener" class="text text-decoration-none">App iOS</a></li>
                            <li><a href="https://play.google.com/store/apps/details?id=org.proxydoc.mobileapp" target="_blank" rel="noopener" class="text text-decoration-none">App Android</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-lower">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <p class="mb-0 text-size-18">© {{ date('Y') }} ProxyDoc. Tous droits réservés.</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 d-md-block d-none">
                    <p class="mb-0 term text-size-18">Mentions légales  |  Politique de confidentialité</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/video_link.js') }}"></script>
<script src="{{ asset('assets/js/video.js') }}"></script>
<script src="{{ asset('assets/js/counter.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="{{ asset('assets/js/animation_links.js') }}"></script>
<script src="{{ asset('assets/js/animation.js') }}"></script>
@stack('scripts')
</body>
</html>
