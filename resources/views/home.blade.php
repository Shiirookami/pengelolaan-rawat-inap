<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - Halaman Home</title>

    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.jpg') }}">

    <!-- Bootstrap 5 CDN Links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Custom File's Link -->
    <link rel="stylesheet" href="{{ asset('templateHome/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('templateHome/css/responsive-style.css') }}">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">

    <!-- Navbar section -->
    <header class="header_wrapper">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('templateHome/images/logo.png') }}" class="img-fluid">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- <span class="navbar-toggler-icon"></span> -->
                    <i class="fas fa-stream navbar-toggler-icon"></i>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav  menu-navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#gallery">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#testimonial">Testimonial</a>
                        </li>
                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item mt-3 mt-lg-0">
                                    <a class="nav-link"
                                        href="{{ Auth::user()->roles_id == 1 ? route('admin.dashboard.index') : route('petugas.dashboard.index') }}">
                                        Dashboard
                                    </a>
                                </li>
                            @else
                                <li class="nav-item mt-3 mt-lg-0">
                                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                                </li>

                                @if (Route::has('register'))
                                    <li class="nav-item mt-3 mt-lg-0">
                                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                                    </li>
                                @endif
                            @endauth
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Navbar section exit -->

    <!-- Banner section -->
    <section id="home" class="home">
        <div class="banner_wrapper wrapper">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 order-md-1 order-2">
                        <h3>Live Better </h3>
                        <h1>By Taking Care Health</h1>
                        <p>Health is the greatest gift, contentment is the greatest wealth, loyalty is the best
                            relationship.</p>
                        <a href="#" class="main-btn mt-4 fill-btn">Appointment</a>
                        <a href="#" class="main-btn mt-4 ms-3">Learn More</a>
                    </div>
                    <div data-aos="fade-up" class="col-md-6 order-md-2 order-1 mb-md-0 mb-5">
                        <div class="top-right-sec">
                            {{-- <div class="animate-img">
                                <img class="aimg1"
                                    src="{{ asset('templateHome/images/top-banner-img/woman-brush.png') }}">
                                <img class="aimg2" src="{{ asset('templateHome/images/top-banner-img/doctor.png') }}">
                            </div> --}}
                            <img class="img-fluid ms-xl-5" src="{{ asset('templateHome/images/bg-banner.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper pb-0">
            <div class="container">
                <div class="row">
                    <div data-aos="zoom-out-up" class="col-md-4 col-sm-6 mb-4">
                        <div class="card text-center">
                            <div class="icon-box">
                                <img src="{{ asset('templateHome/images/top-banner-img/Appointment-icon.png') }}">
                            </div>
                            <div>
                                <h4>Easy Appointment</h4>
                                <p>Lorem Ipsum is simply is very dummy text of the printings and type setting</p>
                            </div>
                        </div>
                    </div>
                    <div data-aos="zoom-out-up" class="col-md-4 col-sm-6 mb-4">
                        <div class="card text-center">
                            <div class="icon-box">
                                <img src="{{ asset('templateHome/images/top-banner-img/Emergency-icon.png') }}">
                            </div>
                            <div>
                                <h4>Emergency Service</h4>
                                <p>Lorem Ipsum is simply is very dummy text of the printings and type setting</p>
                            </div>
                        </div>
                    </div>
                    <div data-aos="zoom-out-up" class="col-md-4 col-sm-6 mb-4">
                        <div class="card text-center">
                            <div class="icon-box">
                                <img src="{{ asset('templateHome/images/top-banner-img/7-Service-icon.png') }}">
                            </div>
                            <div>
                                <h4>24/7 Service</h4>
                                <p>Lorem Ipsum is simply is very dummy text of the printings and type setting</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Banner section exit -->

    <!-- About section -->
    <section id="about" class="about_wrapper wrapper">
        <div class="container">
            <div class="row">
                <div data-aos="zoom-out-down" class="col-md-6 mb-mb-0 mb-5">
                    <div class="position-relative">
                        <img src="{{ asset('templateHome/images/bg-banner2.png') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6 text-center text-md-start">
                    <h2>Welcome to a Family</h2>
                    <p>lorum luptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                        dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est.</p>
                    <div class="mt-5 card">
                        <div class="about-clinic">
                            <h4>{{ $pasien }}+</h4>
                            <p>Happy Patients</p>
                        </div>
                        <div class="about-clinic">
                            <h4>{{ $dokter }}+</h4>
                            <p>Qualified Doctors</p>
                        </div>
                        <div class="about-clinic">
                            <h4>{{ $kamar }}+</h4>
                            <p>Room</p>
                        </div>
                        <div class="about-clinic">
                            <h4>25+</h4>
                            <p>Years Experience</p>
                        </div>
                        <span class="line-1"></span>
                        <span class="line-2"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About section exit -->

    <!-- Gallery section -->
    <section id="gallery" class="gallery_wrapper wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center mb-5">
                    <h3>Our Gallery</h3>
                </div>
            </div>
            <div class="row">
                <div data-aos="zoom-in-up" class="col-md-4 col-sm-6 mb-4">
                    <img src="{{ asset('templateHome/images/gallery/g1.jpg') }}" class="w-100 h-100">
                </div>
                <div data-aos="zoom-in-up" class="col-md-4 col-sm-6 mb-4">
                    <img src="{{ asset('templateHome/images/gallery/g2.jpg') }}" class="w-100 h-100">
                </div>
                <div data-aos="zoom-in-up" class="col-md-4 col-sm-6 mb-4">
                    <img src="{{ asset('templateHome/images/gallery/g3.jpg') }}" class="w-100 h-100">
                </div>
                <div data-aos="zoom-in-up" class="col-md-4 col-sm-6 mb-4">
                    <img src="{{ asset('templateHome/images/gallery/g4.jpg') }}" class="w-100 h-100">
                </div>
                <div data-aos="zoom-in-up" class="col-md-4 col-sm-6 mb-4">
                    <img src="{{ asset('templateHome/images/gallery/g5.jpg') }}" class="w-100 h-100">
                </div>
                <div data-aos="zoom-in-up" class="col-md-4 col-sm-6 mb-4">
                    <img src="{{ asset('templateHome/images/gallery/g6.jpg') }}" class="w-100 h-100">
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section Exit -->

    <!-- Testimonial section -->
    <section id="testimonial" class="testimonial_wrapper wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center mb-4">
                    <h3 class="text-black">Testimonials</h3>
                </div>
            </div>
            <div class="row align-items-center">
                <div data-aos="zoom-out" class="col-xl-3 col-md-4 col-sm-6">
                    <div class="card text-center">
                        <img src="{{ asset('templateHome/images/testimonial/client1.jpg') }}" class="img-fluid">
                        <h4 class="pt-4 mb-0">Kartika</h4>
                        <p>Patient</p>
                    </div>
                </div>
                <div class="col-xl-9 col-md-8 col-sm-6 ps-md-4 pt-sm-0 pt-4">
                    <h4>Awesome Work</h4>
                    <p>“They really took my individual case to heart. Their team is very helpful. They all work
                        together in an impressive way to make sure that my needs were met and I walked out pain
                        free.”</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section Exit -->

    <!-- Footer section -->
    <section id="contact" class="footer_wrapper wrapper">
        <div class="container-fluid copyright-section">
            <p class="p-0">Copyright <a href="#">© PRI.</a> All Rights Reserved</p>
        </div>
    </section>

    <!-- Footer section exit -->

    <!-- Bootstrap 5 JS CDN Links -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>

    <!-- Custom Js Link -->
    <script src="{{ asset('templateHome/js/main.js') }}"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
