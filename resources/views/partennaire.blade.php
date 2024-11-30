
@extends('layouts.app')
@section('content')
<section class="page-title bg-1" style="background: url('assets/partenaire/par.jpg')">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
            <span class="text-white">Partenaire</span>
            <h1 class="text-capitalize mb-4 text-lg">Partenaire </h1>
            <ul class="list-inline">
              <li class="list-inline-item"><a href="{{ route('index') }}" class="text-white">Accueille</a></li>
              <li class="list-inline-item"><span class="text-white">/</span></li>
              <li class="list-inline-item"><a href="{{ route('partenaire') }}" class="text-white-50">Partenaire</a></li>
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
                    <span class="h6 text-color">Nos Partenaire</span>
                    <h2 class="mt-3 content-title ">Nos partennaire Agréer</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row portfolio-gallery">
            <div class="col-lg-4 col-md-6">
                <div class="portflio-item position-relative mb-4">
                    <a href="assets/partenaire/par1.png" class="popup-gallery">
                        <img src="assets/partenaire/par1.png" alt="" class="img-fluid w-100">

                        <i class="ti-plus overlay-item"></i>
                        <div class="portfolio-item-content">
                            <h3 class="mb-0 text-white">Midite Solaire</h3>
                            <p class="text-white-50">partennaire</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="portflio-item position-relative mb-4">
                    <a href="assets/partenaire/par2.png" class="popup-gallery">
                        <img src="assets/partenaire/par2.png" alt="" class="img-fluid w-100">

                        <i class="ti-plus overlay-item"></i>
                        <div class="portfolio-item-content">
                            <h3 class="mb-0 text-white">ABB</h3>
                            <p class="text-white-50">partennaire</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="portflio-item position-relative mb-4">
                    <a href="assets/partenaire/par3.png" class="popup-gallery">
                        <img src="assets/partenaire/par3.png" alt="" class="img-fluid w-100">

                        <i class="ti-plus overlay-item"></i>
                        <div class="portfolio-item-content">
                            <h3 class="mb-0 text-white">DEKA BATTERIES</h3>
                            <p class="text-white-50">partennaire</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="portflio-item position-relative mb-4">
                    <a href="assets/partenaire/par4.png" class="popup-gallery">
                        <img src="assets/partenaire/par4.png" alt="" class="img-fluid w-100">

                        <i class="ti-plus overlay-item"></i>
                        <div class="portfolio-item-content">
                            <h3 class="mb-0 text-white">Enersys</h3>
                            <p class="text-white-50">partennaire</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="portflio-item position-relative  mb-4">
                    <a href="assets/partenaire/par5.png" class="popup-gallery">
                        <img src="assets/partenaire/par5.png" alt="" class="img-fluid w-100">

                        <i class="ti-plus overlay-item"></i>
                        <div class="portfolio-item-content">
                            <h3 class="mb-0 text-white">ROLLS </h3>
                            <p class="text-white-50">partennaire</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="portflio-item position-relative mb-4">
                    <a href="assets/partenaire/par6.png" class="popup-gallery">
                        <img src="assets/partenaire/par6.png" alt="" class="img-fluid w-100">
                        
                        <i class="ti-plus overlay-item"></i>
                        <div class="portfolio-item-content">
                            <h3 class="mb-0 text-white">SCHNEIDER ELECRIC</h3>
                            <p class="text-white-50">partennaire</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
