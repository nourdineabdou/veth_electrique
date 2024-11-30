@extends('layouts.app')
@section('content')
    <!-- Slider Start -->
    <section class="page-title bg-1 " style="background: url('assets/images/nous.PNG')">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="block text-center">
                <span class="text-white">À propos de nous</span>
                <h1 class="text-capitalize mb-4 text-lg">Notre entreprise</h1>
                <ul class="list-inline">
                <li class="list-inline-item"><a href="{{ route('index') }}" class="text-white">ACCEULLLE</a></li>
                <li class="list-inline-item"><span class="text-white">/</span></li>
                <li class="list-inline-item"><a href="{{ route('propos') }}" class="text-white-50">À propos de nous</a></li>
                </ul>
            </div>
            </div>
        </div>
        </div>
    </section>

    
        <!-- Section About Start -->
    <section class="section about-2 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="about-item pr-3 mb-5 mb-lg-0">
                        <span class="h6 text-color">Qui nous sommes</span>
                        <h2 class="mt-3 mb-4 position-relative content-title">Nous sommes une équipe dynamique de personnes créatives</h2>
                        <p class="mb-5"> 
                            La veth électrique est une société d’électricien diplômés et expérimentés en génie électrique. 
                            La réussite de nos projets est garantie. 
                            Faites nous confiances
                            </p>

                        <a href="{{ route('propos') }}" class="btn btn-main btn-round-full">Commencer</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about-item-img">
                        <img src="assets/images/about/home-7.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section About End -->

    <!-- Section About End -->

    <section class="about-info section pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="about-info-item mb-4 mb-lg-0">
                        <h3 class="mb-3"><span class="text-color mr-2 text-md ">01.</span>Notre Mission</h3>
                        <p>la production, la distribution et la gestion de l'énergie électrique, l'électronique, les systèmes de communication, les équipements électromécaniques, etc.</p>
                    </div>		
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="about-info-item mb-4 mb-lg-0">
                        <h3 class="mb-3"><span class="text-color mr-2 text-md">02.</span>Vision</h3>
                        <p>Notre vision dans les années à venir est donc un mélange de technologies de pointe, de durabilité, de mobilité verte, et de convergence technologique.</p>
                    </div>		
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="about-info-item mb-4 mb-lg-0">
                        <h3 class="mb-3"><span class="text-color mr-2 text-md">03.</span>Notre approche</h3>
                        <p>Notre approche combine une méthode rigoureuse, une innovation constante, et une collaboration interdisciplinaire. Nos ingénieurs utilisent des outils de simulation avancés, des méthodes d'optimisation, et des pratiques de sécurité pour concevoir des systèmes électriques fiables.</p>
                    </div>		
                </div>
            </div>
        </div>
    </section>

    <!-- section Counter Start -->
    
    <!--  Section Services Start -->
    <section class="section team">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title">
                        <span class="h6 text-color">Notre équipe</span>
                        <h2 class="mt-3 content-title">Membre de l'équipe d'experts pour obtenir le meilleur service</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team-item-wrap mb-5">
                        <div class="team-item position-relative">
                            <img src="assets/equipes/ec7.jpg" alt="" class="img-fluid w-100">
                            <div class="team-img-hover">
                                <ul class="team-social list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" class="facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="linkedin"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-item-content">
                            <h4 class="mt-3 mb-0 text-capitalize">Justin hammer</h4>
                            <p>électricien </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team-item-wrap mb-5">
                        <div class="team-item position-relative">
                            <img src="assets/equipes/ec2.jpg" alt="" class="img-fluid w-100">
                            <div class="team-img-hover">
                                <ul class="team-social list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" class="facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="linkedin"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-item-content">
                            <h4 class="mt-3 mb-0 text-capitalize">Jason roy</h4>
                            <p>électricien </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team-item-wrap mb-5 ">
                        <div class="team-item position-relative">
                            <img src="assets/equipes/ec3.jpg" alt="" class="img-fluid w-100">
                            <div class="team-img-hover">
                                <ul class="team-social list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" class="facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="linkedin"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-item-content">
                            <h4 class="mt-3 mb-0 text-capitalize">Henry oswald</h4>
                            <p>électricien </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team-item-wrap mb-5 mb-lg-0">
                        <div class="team-item position-relative">
                            <img src="assets/equipes/ec4.jpg" alt="" class="img-fluid w-100">
                            <div class="team-img-hover">
                                <ul class="team-social list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" class="facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="linkedin"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-item-content">
                            <h4 class="mt-3 mb-0 text-capitalize">David Williams</h4>
                            <p>électricien </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team-item-wrap mb-5 mb-lg-0">
                        <div class="team-item position-relative">
                            <img src="assets/equipes/ec5.jpg" alt="" class="img-fluid w-100">
                            <div class="team-img-hover">
                                <ul class="team-social list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" class="facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="linkedin"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-item-content">
                            <h4 class="mt-3 mb-0 text-capitalize">Peter Odin</h4>
                            <p>électricien </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team-item-wrap mb-5 mb-lg-0 ">
                        <div class="team-item position-relative">
                            <img src="assets/equipes/ec6.jpg" alt="" class="img-fluid w-100">
                            <div class="team-img-hover">
                                <ul class="team-social list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" class="facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="linkedin"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-item-content">
                            <h4 class="mt-3 mb-0 text-capitalize">David Spensor</h4>
                            <p>électricien </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Section Services End -->
@endsection


