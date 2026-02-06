@extends('layouts.app')

@section('title', 'Vision & mission – ProxyDoc')
@section('meta_description', 'Vision et mission ProxyDoc : objectifs à court et long terme pour la santé digitale.')

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
                        <span class="mb-0 box_span">Vision &amp; mission</span>
                    </div>
                    <h1>Vision &amp; mission</h1>
                    <p class="mb-0 text-white">Objectifs à court et long terme de ProxyDoc pour la e-santé.</p>
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
                    <h3>Objectifs à court terme</h3>
                    <p class="mb-0">Renforcer la présence de ProxyDoc avec un site vitrine professionnel, mettre en avant les fonctionnalités de l’application mobile et publier des articles et contenus médicaux pour sensibiliser le grand public.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="about_content about_content1 hover2">
                    <div class="icon-size1 icon-size2">
                        <figure class="mb-0 about-visionicon">
                            <img src="{{ asset('assets/images/about-visionicon.png') }}" alt="" class="img-fluid">
                        </figure>
                    </div>
                    <h3>Objectifs à long terme</h3>
                    <p class="mb-0">Synchroniser les données entre le site, l’application et les partenaires ; ouvrir des API ; mettre en place un tableau de bord analytique ; développer des extensions e-santé (téléconseil et services avancés).</p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('frontend.partials.available-app')
@endsection
