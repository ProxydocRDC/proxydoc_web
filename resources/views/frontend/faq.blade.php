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
                        <a href="{{ route('home') }}" class="text text-decoration-none text-white"><span class="mb-0">Accueil</span></a>
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
                            @forelse($faqs ?? [] as $index => $faq)
                            <div class="accordion-card">
                                <div class="card-header" id="headingFaq{{ $faq->id }}">
                                    <a href="#" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFaq{{ $faq->id }}" aria-expanded="false" aria-controls="collapseFaq{{ $faq->id }}">
                                        <h6>{{ $faq->question }}</h6>
                                    </a>
                                </div>
                                <div id="collapseFaq{{ $faq->id }}" class="collapse" aria-labelledby="headingFaq{{ $faq->id }}">
                                    <div class="card-body">
                                        <p class="pp text-left mb-0 p-0">{!! $faq->answer !!}</p>
                                        @if($faq->show_download_buttons && isset($appLinks))
                                        <div class="available-imagewrapper mt-2">
                                            <a class="image_apple d-inline-block mr-2" href="{{ $appLinks->app_store_url }}" target="_blank" rel="noopener">
                                                <figure class="mb-0 available-apple">
                                                    <img class="img-fluid" src="{{ asset('assets/images/bannerapple-img1.png') }}" alt="App Store" style="max-height: 44px;">
                                                </figure>
                                            </a>
                                            <a class="image_google d-inline-block" href="{{ $appLinks->play_store_url }}" target="_blank" rel="noopener">
                                                <figure class="mb-0 available-google">
                                                    <img class="img-fluid" src="{{ asset('assets/images/bannergoogle-img2.png') }}" alt="Google Play" style="max-height: 44px;">
                                                </figure>
                                            </a>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="accordion-card">
                                <div class="card-header">
                                    <h6>Aucune question pour le moment</h6>
                                </div>
                                <div class="card-body">
                                    <p class="pp text-left mb-0 p-0">Les questions fréquentes seront bientôt disponibles. Contactez-nous à <a href="mailto:contact@proxydoc.org">contact@proxydoc.org</a>.</p>
                                </div>
                            </div>
                            @endforelse
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
