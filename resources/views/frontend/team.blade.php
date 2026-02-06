@extends('layouts.app')

@section('title', 'Équipe – ProxyDoc')
@section('meta_description', 'Découvrez l’équipe ProxyDoc : fondateurs et collaborateurs au service de la santé digitale.')

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
                        <span class="mb-0 box_span">Équipe</span>
                    </div>
                    <h1>Notre équipe</h1>
                    <p class="mb-0 text-white">Une équipe pluridisciplinaire engagée pour la santé digitale.</p>
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
                        <h2 class="text-white">Les membres de l’équipe</h2>
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
                            <h3>Direction</h3>
                            <p>Fondateur &amp; stratégie</p>
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
                                <img src="{{ asset('assets/images/team-image2.png') }}" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <div class="lower-part">
                            <h3>Produit &amp; technique</h3>
                            <p>Développement &amp; design</p>
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

@include('frontend.partials.available-app')
@endsection
