@extends('layouts.app')

@section('title', 'Contact – ProxyDoc')
@section('meta_description', 'Contactez ProxyDoc : formulaire, email support@proxydoc.cd, République Démocratique du Congo.')

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
                        <span class="mb-0 box_span">Contact</span>
                    </div>
                    <h1>Nous contacter</h1>
                    <p class="mb-0 text-white">Une question, un partenariat ou un retour ? Utilisez le formulaire ou nos coordonnées.</p>
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
<section class="message-section about-section">
    <div class="container">
        <figure class="mb-0 price-circle">
            <img class="img-fluid" src="{{ asset('assets/images/price-circle.png') }}" alt="">
        </figure>
        <div class="row position-relative">
            <figure class="mb-0 price-sidecircle">
                <img class="img-fluid" src="{{ asset('assets/images/price-sidecircle.png') }}" alt="">
            </figure>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="manage_wrapper">
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
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="manage_content" data-aos="fade-up">
                    <div class="message_content">
                        <h2>Envoyez-nous un message</h2>
                        <form id="contactpage" method="POST" action="#">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-0">
                                        <input type="text" class="form_style" placeholder="Votre nom" name="name" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mb-0">
                                        <input type="email" class="form_style" placeholder="Votre email" name="email" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-0">
                                        <textarea class="form_style" placeholder="Message" rows="3" name="message" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="manage-button text-center">
                                <button type="submit" class="submit_now">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="feature-aboutsection contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="feature_aboutheading">
                    <h2>Nos coordonnées</h2>
                </div>
            </div>
        </div>
        <div class="feature-block">
            <div class="row" data-aos="fade-up">
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="feature_aboutcontent box hover1">
                        <div class="icon-size1">
                            <figure class="mb-0 contact-addressicon">
                                <img src="{{ asset('assets/images/contact-addressicon.png') }}" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <h5>Adresse</h5>
                        <p class="mb-0 text-size-18">ProxyDoc – République Démocratique du Congo</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="feature_aboutcontent box hover2">
                        <div class="icon-size1 icon-size2">
                            <figure class="mb-0 contact-phoneicon">
                                <img src="{{ asset('assets/images/contact-phoneicon.png') }}" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <h5>Téléphone</h5>
                        <a href="tel:+243000000000" class="mb-0 text-decoration-none text-size-18 d-block">+243 XXX XXX XXX</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="feature_aboutcontent box hover3">
                        <div class="icon-size1 icon-size3">
                            <figure class="mb-0 contact-emailicon">
                                <img src="{{ asset('assets/images/contact-emailicon.png') }}" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <h5>Email</h5>
                        <a href="mailto:support@proxydoc.cd" class="mb-0 text-decoration-none text-size-18">support@proxydoc.cd</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('frontend.partials.available-app')
@endsection
