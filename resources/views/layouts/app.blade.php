<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="megakit,business,company,agency,multipurpose,modern,bootstrap4">
        
        <meta name="author" content="themefisher.com">
         <!-- Favicons -->
        <link href="assets/images/V.PNG" rel="icon">
        <link href="assets/images/V.PNG" rel="apple-touch-icon">
        <title>Vath Electrique/partenaire</title>
      
        <!-- bootstrap.min css -->
        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
        <!-- Icon Font Css -->
        <link rel="stylesheet"  href="assets/plugins/themify/css/themify-icons.css">
        <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.css">
        <link rel="stylesheet" href="assets/plugins/magnific-popup/dist/magnific-popup.css">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="assets/plugins/slick-carousel/slick/slick.css">
        <link rel="stylesheet" href="assets/plugins/slick-carousel/slick/slick-theme.css">
      
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="assets/css/style.css">
      
    </head>
    <body>
        <!-- Header Start --> 
        <header class="navigation">
            <div class="header-top ">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-2 col-md-4">
                            <div class="header-top-socials text-center text-lg-left text-md-left">
                                <a href="#" target="_blank"><i class="ti-facebook"></i></a>
                                <a href="#" target="_blank"><i class="ti-twitter"></i></a>
                                <a href="#" target="_blank"><i class="ti-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-8 text-center text-lg-right text-md-right">
                            <div class="header-top-info">
                                <a href="tel:+222-47733792"> Téléphone: <span>+222-47733792</span></a>
                                <a href="admin@vethelectrique.com" ><i class="fa fa-envelope mr-2"></i><span>admin@vethelectrique.com</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg  py-4" id="navbar">
                <div class="container">
                  <a class="navbar-brand" href="{{ route('index') }}">
                    <img class="img-thumbnail" src="{{ asset('assets/images/vth_logo.PNG') }}" width="110" alt="Girl in a jacket" > <span>Electrique.</span>
                  </a>
                  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                  </button>
              
                  <div class="collapse navbar-collapse text-center" id="navbarsExample09">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item active">
                        <a class="nav-link" href="{{ route('index') }}">ACCUEILLE <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item"><a class="nav-link" href="{{ route('propos') }}">A PROPOS DE NOUS</a></li>
                       <li class="nav-item"><a class="nav-link" href="{{ route('product') }}">PRODUITS</a></li>
                       <li class="nav-item"><a class="nav-link" href="{{ route('partenaire') }}">PARTENAIRE </a></li>
                       <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}"> CONTACT</a></li>
                    </ul>
        
                    <form class="form-lg-inline my-2 my-md-0 ml-lg-4 text-center">
                      <a href="{{ route('devis') }}" class="btn btn-solid-border btn-round-full">DEVIS</a>
                    </form>
                  </div>
                </div>
            </nav>
        </header>
            <!-- Header Close --> 

              <!-- content -->
                @yield('content')
        <div class="main-wrapper ">
            <!-- Slider Start -->

            
        <footer class="footer section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="widget">
                            <h4 class="text-capitalize mb-4">Entreprise</h4>
        
                            <ul class="list-unstyled footer-menu lh-35">
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="widget">
                            <h4 class="text-capitalize mb-4">Liens rapides</h4>
        
                            <ul class="list-unstyled footer-menu lh-35">
                                <li><a href="#">ACCUEILLE</a></li>
                                <li><a href="#">A PROPOS DE NOUS</a></li>
                                <li><a href="#">PRODUITS</a></li>
                                <li><a href="#">REFERENCE</a></li>
                                <li><a href="#">PARTENAIRE</a></li>
                                <li><a href="#">CONTACT</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="widget">
                            <h4 class="text-capitalize mb-4">Abonnez-vous</h4>
                            <p>Abonnez-vous pour recevoir les derniers articles d'actualité et les ressources  </p>
        
                            <form action="#" class="sub-form">
                                <input type="text" class="form-control mb-3" placeholder="Subscribe Now ...">
                                <a href="#" class="btn btn-main btn-small">Abonnez</a>
                            </form>
                        </div>
                    </div>
        
                    <div class="col-lg-3 ml-auto col-sm-6">
                        <div class="widget">
                            <div class="logo mb-4">
                                <h3>VETH<span> Electrique</span></h3>
                            </div>
                            <h6><a href="tel:+222-47733792" >admin@vethelectrique.com</a></h6>
                            <a href="admin@vethelectrique.com"><span class="text-color h4">+222-47733792</span></a>
                        </div>
                    </div>
                </div>
                
                <div class="footer-btm pt-4">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="copyright">
                                &copy; Copyright réservé par   <span class="text-color">Nourdine</span>  <a href="#" target="_blank">MBI BLOG</a>
                            </div>
                        </div>
        
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="copyright">
                            Distributed by  <a href="https://themewagon.com/" target="_blank">Themewagon</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 text-left text-lg-left">
                            <ul class="list-inline footer-socials">
                                <li class="list-inline-item"><a href="#"><i class="ti-facebook mr-2"></i>Facebook</a></li>
                                <li class="list-inline-item"><a href="#"><i class="ti-twitter mr-2"></i>Twitter</a></li>
                                <li class="list-inline-item"><a href="#"><i class="ti-linkedin mr-2 "></i>Linkedin</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        </div>
        
        <!-- footer Start -->
        <!-- 
        Essential Scripts
        =====================================-->
        <!-- Main jQuery -->
        <script src="assets/plugins/jquery/jquery.js"></script>
        <script src="assets/js/contact.js"></script>
        <!-- Bootstrap 4.3.1 -->
        <script src="assets/plugins/bootstrap/js/popper.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <!--  Magnific Popup-->
        <script src="assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
        <!-- Slick Slider -->
        <script src="assets/plugins/slick-carousel/slick/slick.min.js"></script>
        <!-- Counterup -->
        <script src="assets/plugins/counterup/jquery.waypoints.min.js"></script>
        <script src="assets/plugins/counterup/jquery.counterup.min.js"></script>

        <!-- Google Map -->
        <script src="assets/plugins/google-map/map.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    
        <script src="assets/js/script.js"></script>
    </body>
</html>