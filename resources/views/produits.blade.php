@extends('layouts.app')
@section('content')
 <!-- Slider Start -->
 <section class="page-title bg-1" style="background: url('assets/images/produits.jpg')">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
            <span class="text-white">Produits</span>
            <h1 class="text-capitalize mb-4 text-lg">Produits</h1>
            <ul class="list-inline">
              <li class="list-inline-item"><a href="{{ route('index') }}" class="text-white">Accueille</a></li>
              <li class="list-inline-item"><span class="text-white">/</span></li>
              <li class="list-inline-item"><a href="{{ route('product') }}" class="text-white-50">Produits</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</section>    
<section class="section portfolio pb-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="section-title">
                    <span class="h6 text-color">Nos produits</span>
                    <h2 class="mt-3 content-title ">Nous avons des produits, vérifions-en quelques-uns</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row portfolio-gallery">
            <div class="col-lg-4 col-md-6">
                <div class="portflio-item position-relative mb-4">
                    <a href="assets/produits/p1.jpg" class="popup-gallery">
                        <img src="assets/produits/p1.jpg" alt="" class="img-fluid w-100">

                        <i class="ti-plus overlay-item"></i>
                        <div class="portfolio-item-content">
                            <h3 class="mb-0 text-white">Batteries stationnaires</h3>
                            <p class="text-white-50">Electricité</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="portflio-item position-relative mb-4">
                    <a href="assets/produits/p2.jpg" class="popup-gallery">
                        <img src="assets/produits/p2.jpg" alt="" class="img-fluid w-100">

                        <i class="ti-plus overlay-item"></i>
                        <div class="portfolio-item-content">
                            <h3 class="mb-0 text-white">Groupes électrogènes</h3>
                            <p class="text-white-50">Electricité</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="portflio-item position-relative mb-4">
                    <a href="assets/produits/p3.jpg" class="popup-gallery">
                        <img src="assets/produits/p3.jpg" alt="" class="img-fluid w-100">

                        <i class="ti-plus overlay-item"></i>
                        <div class="portfolio-item-content">
                            <h3 class="mb-0 text-white">Isolateurs composite</h3>
                            <p class="text-white-50">Electricité</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="portflio-item position-relative mb-4">
                    <a href="assets/produits/p4.jpg" class="popup-gallery">
                        <img src="assets/produits/p4.jpg" alt="" class="img-fluid w-100">

                        <i class="ti-plus overlay-item"></i>
                        <div class="portfolio-item-content">
                            <h3 class="mb-0 text-white">Coupe circuit</h3>
                            <p class="text-white-50">Electricité</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="portflio-item position-relative  mb-4">
                    <a href="assets/produits/p5.jpg" class="popup-gallery">
                        <img src="assets/produits/p5.jpg" alt="" class="img-fluid w-100">

                        <i class="ti-plus overlay-item"></i>
                        <div class="portfolio-item-content">
                            <h3 class="mb-0 text-white">Moteurs électriques </h3>
                            <p class="text-white-50">Electricité</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="portflio-item position-relative mb-4">
                    <a href="assets/produits/p9.jpg" class="popup-gallery">
                        <img src="assets/produits/p9.jpg" alt="" class="img-fluid w-100">
                        
                        <i class="ti-plus overlay-item"></i>
                        <div class="portfolio-item-content">
                            <h3 class="mb-0 text-white">Produit primaire</h3>
                            <p class="text-white-50">Electricité</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

