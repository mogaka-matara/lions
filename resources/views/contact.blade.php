<!DOCTYPE html>
<html lang="en">

    <head>
        @include('layouts.css')
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar start -->
      @include('layouts.header')
        <!-- Navbar End -->


        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control bg-transparent p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->


        <!-- Hero Start -->
        <div class="container-fluid bg-light py-6 my-6 mt-0">
            <div class="container text-center animated bounceInDown">
                <h1 class="display-1 mb-4">Contact</h1>
                <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-dark" aria-current="page">Contact</li>
                </ol>
            </div>
        </div>
        <!-- Hero End -->


        <!-- Contact Start -->
        <div class="container-fluid contact py-6 wow bounceInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="p-5 bg-light rounded contact-form">
                    <div class="row g-4">
                        <div class="col-12">
                            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Get in touch</small>
                            <h1 class="display-5 mb-0">Contact Us For Any Queries!</h1>
                        </div>
                        <div class="col-md-6 col-lg-7">
                            <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                            <form>
                                <input type="text" class="w-100 form-control p-3 mb-4 border-primary bg-light" placeholder="Your Name">
                                <input type="email" class="w-100 form-control p-3 mb-4 border-primary bg-light" placeholder="Enter Your Email">
                                <textarea class="w-100 form-control mb-4 p-3 border-primary bg-light" rows="4" cols="10" placeholder="Your Message"></textarea>
                                <button class="w-100 btn btn-primary form-control p-3 border-primary bg-primary rounded-pill" type="submit">Submit Now</button>
                            </form>
                        </div>
                        <div class="col-md-6 col-lg-5">
                            <div>
                                <div class="d-inline-flex w-100 border border-primary p-4 rounded mb-4">
                                    <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                                    <div class="">
                                        <h4>Address</h4>
                                        <p>123 Street, New York, USA</p>
                                    </div>
                                </div>
                                <div class="d-inline-flex w-100 border border-primary p-4 rounded mb-4">
                                    <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                                    <div class="">
                                        <h4>Mail Us</h4>
                                        <p class="mb-2">info@example.com</p>
                                        <p class="mb-0">support@example.com</p>
                                    </div>
                                </div>
                                <div class="d-inline-flex w-100 border border-primary p-4 rounded">
                                    <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                                    <div class="">
                                        <h4>Telephone</h4>
                                        <p class="mb-2">(+012) 3456 7890 123</p>
                                        <p class="mb-0">(+704) 5555 0127 296</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Footer Start -->
       @include('layouts.footer')
        <!-- Footer End -->


        <!-- Copyright Start -->
        <div class="container-fluid copyright bg-dark py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 my-auto text-center text-md-end text-white">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-md-square btn-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

</html>