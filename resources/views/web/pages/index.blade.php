@extends('web.layout.master')

@section('content')
    <main>

        <!-- Start Hero Area -->
        <div class="hero-area">
            <div class="swiper hero-slide">
                <div class="swiper-wrapper">
                    <div class="swiper-slide bg-1">
                        <div class="container">
                            <div class="hero-content">
                                <h1>Our strength is your well-being</h1>
                                <p>Donec sollicitudin molestie malesuada. Praesent sapien massa, convallis a pellentesque
                                    nec, egestas non nisi.</p>
                                <div class="hero-btn">
                                    <a href="{{ route('aboutus') }}" class="default-btn">Learn more</a>
                                    <a href="{{ route('contactus') }}" class="default-btn active">Contact us</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide bg-2">
                        <div class="container">
                            <div class="hero-content width-two">
                                <h1>We want to heal the patient with services</h1>
                                <p>Donec sollicitudin molestie malesuada. Praesent sapien massa, convallis a pellentesque
                                    nec, egestas non nisi.</p>
                                <div class="hero-btn">
                                    <a href="{{ route('aboutus') }}" class="default-btn">Learn more</a>
                                    <a href="{{ route('contactus') }}" class="default-btn active">Contact us</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide bg-3">
                        <div class="container">
                            <div class="hero-content width-three">
                                <h1>Need your expertise we are ready</h1>
                                <p>Donec sollicitudin molestie malesuada. Praesent sapien massa, convallis a pellentesque
                                    nec, egestas non nisi.</p>
                                <div class="hero-btn">
                                    <a href="{{ route('aboutus') }}" class="default-btn">Learn more</a>
                                    <a href="{{ route('contactus') }}" class="default-btn active">Contact us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pagination-btn">
                <div class="swiper-pagination"></div>
            </div>

            <ul class="socila-link">
                <li>
                    <a href="https://www.facebook.com/" target="_blank">
                        <img src="{{ asset('web/images/svg-icon/facebook.svg') }}" alt="Image">
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/" target="_blank">
                        <img src="{{ asset('web/images/svg-icon/twitter.svg') }}" alt="Image">
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/" target="_blank">
                        <img src="{{ asset('web/images/svg-icon/linkedin.svg') }}" alt="Image">
                    </a>
                </li>
            </ul>
        </div>
        <!-- End Hero Area -->

        <!-- Start Futcher Area -->
        <div class="futcher-area pt-100 pb-70">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-2 col-sm-4 col-md-4">
                        <div class="single-futcher">
                            <div class="icon-one d-flex justify-content-between">
                                <i class="flaticon-consultation opacity0"></i>
                                <i class="flaticon-consultation opacity1"></i>
                            </div>
                            <h3>Consult Online</h3>
                        </div>
                    </div>

                    <div class="col-lg-2 col-sm-4 col-md-4">
                        <div class="single-futcher">
                            <div class="icon-one d-flex justify-content-between">
                                <i class="flaticon-patient opacity0"></i>
                                <i class="flaticon-patient opacity1"></i>
                            </div>
                            <h3>Patients & Visitors</h3>
                        </div>
                    </div>

                    <div class="col-lg-2 col-sm-4 col-md-4">
                        <div class="single-futcher">
                            <div class="icon-one d-flex justify-content-between">
                                <i class="flaticon-drugs opacity0"></i>
                                <i class="flaticon-drugs opacity1"></i>
                            </div>
                            <h3>Buy Medicine</h3>
                        </div>
                    </div>

                    <div class="col-lg-2 col-sm-4 col-md-4">
                        <div class="single-futcher">
                            <div class="icon-one d-flex justify-content-between">
                                <i class="flaticon-pay opacity0"></i>
                                <i class="flaticon-pay opacity1"></i>
                            </div>
                            <h3 class="play">Pay a Bill</h3>
                        </div>
                    </div>

                    <div class="col-lg-2 col-sm-4 col-md-4">
                        <div class="single-futcher">
                            <div class="icon-one d-flex justify-content-between">
                                <i class="flaticon-search opacity0"></i>
                                <i class="flaticon-search opacity1"></i>
                            </div>
                            <h3>Find a Doctors</h3>
                        </div>
                    </div>

                    <div class="col-lg-2 col-sm-4 col-md-4">
                        <div class="single-futcher">
                            <div class="icon-one d-flex justify-content-between">
                                <i class="flaticon-hospital opacity0"></i>
                                <i class="flaticon-hospital opacity1"></i>
                            </div>
                            <h3>Find a Hospital</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Futcher Area -->

        <!-- Start Who We Are Area -->
        <div class="who-we-are-area pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="mr-44">
                            <div class="row align-items-end">
                                <div class="col-lg-7 col-md-6">
                                    <div class="who-we-are-img img-1">
                                        <img src="{{ asset('web/images/about/about-1.jpg') }}" alt="image">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6">
                                    <div class="who-we-are-img-2">
                                        <h3>Connect With <span>Bexi</span> Health Care</h3>
                                        <img src="{{ asset('web/images/about/about-2.jpg') }}" alt="image">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="who-we-are-img-3">
                                        <img src="{{ asset('web/images/about/about-3.jpg') }}" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="ml-44">
                            <div class="who-we-are-content">
                                <span class="top-title">WHO WE ARE</span>
                                <h2>We have been providing services to patients for over 20 years</h2>
                                <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Donec sollicitudin
                                    molestie malesuada. Nulla quis lorem ut libero malesuada feugiat.</p>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="single-who-we-are">
                                        <i class="flaticon-hands"></i>
                                        <h3>1K+ Healing Hands</h3>
                                        <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Proin eget
                                            tortor risus.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="single-who-we-are">
                                        <i class="flaticon-doctor"></i>
                                        <h3>Experience Doctors</h3>
                                        <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Proin eget
                                            tortor risus.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="single-who-we-are">
                                        <i class="flaticon-handshake"></i>
                                        <h3>Advanced Healthcare</h3>
                                        <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Proin eget
                                            tortor risus.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="single-who-we-are">
                                        <i class="flaticon-pharmacy"></i>
                                        <h3>50+ Pharmacies</h3>
                                        <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Proin eget
                                            tortor risus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Who We Are Area -->

        <!-- Start Our Department Area -->
        <div class="our-department-area bg-color-f8f9fa pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span class="top-title">OUR DEPARTMENT</span>
                    <h2>Our hospital has all kinds of departments, so you can get all kinds of treatment</h2>
                </div>

                <div class="row justify-content-center">
                    <div class="col-xl-3 col-md-6">
                        <div class="single-our-department">
                            <img src="{{ asset('web/images/department/department-1.jpg') }}" alt="Image">

                            <div class="department-content one">
                                <h3>
                                    <a href="department-orthopedics.php">
                                        Dental
                                    </a>
                                </h3>

                                <p>Pellentesque nec, egestas non nisi. Sed porttitor lectus nibh.</p>
                            </div>

                            <div class="department-content hover">
                                <div class="icon">
                                    <i class="flaticon-fracture"></i>
                                </div>
                                <h3>
                                    <a href="department-orthopedics.php">
                                        Dental
                                    </a>
                                </h3>
                                <p>Pellentesque in ipsum id orci porta dapibus. Nulla quis lorem ut libero malesuada
                                    feugiat. Sed porttitor lectus nibh.</p>
                                <a href="department-orthopedics.php" class="read-more">
                                    Read More
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="single-our-department">
                            <img src="{{ asset('web/images/department/department-2.jpg') }}" alt="Image">

                            <div class="department-content one">
                                <h3>
                                    <a href="department-orthopedics.php">
                                        Orthopedics
                                    </a>
                                </h3>

                                <p>Pellentesque nec, egestas non nisi. Sed porttitor lectus nibh.</p>
                            </div>

                            <div class="department-content hover">
                                <div class="icon">
                                    <i class="flaticon-fracture"></i>
                                </div>
                                <h3>
                                    <a href="department-orthopedics.php">
                                        Orthopedics
                                    </a>
                                </h3>
                                <p>Pellentesque in ipsum id orci porta dapibus. Nulla quis lorem ut libero malesuada
                                    feugiat. Sed porttitor lectus nibh.</p>
                                <a href="department-orthopedics.php" class="read-more">
                                    Read More
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="single-our-department">
                            <img src="{{ asset('web/images/department/department-3.jpg') }}" alt="Image">

                            <div class="department-content one">
                                <h3>
                                    <a href="department-orthopedics.php">
                                        Neurosciences
                                    </a>
                                </h3>

                                <p>Pellentesque nec, egestas non nisi. Sed porttitor lectus nibh.</p>
                            </div>

                            <div class="department-content hover">
                                <div class="icon">
                                    <i class="flaticon-fracture"></i>
                                </div>
                                <h3>
                                    <a href="department-orthopedics.php">
                                        Neurosciences
                                    </a>
                                </h3>
                                <p>Pellentesque in ipsum id orci porta dapibus. Nulla quis lorem ut libero malesuada
                                    feugiat. Sed porttitor lectus nibh.</p>
                                <a href="department-orthopedics.php" class="read-more">
                                    Read More
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="single-our-department">
                            <img src="{{ asset('web/images/department/department-4.jpg') }}" alt="Image">

                            <div class="department-content one">
                                <h3>
                                    <a href="department-orthopedics.php">
                                        Cancer care
                                    </a>
                                </h3>

                                <p>Pellentesque nec, egestas non nisi. Sed porttitor lectus nibh.</p>
                            </div>

                            <div class="department-content hover">
                                <div class="icon">
                                    <i class="flaticon-fracture"></i>
                                </div>
                                <h3>
                                    <a href="department-orthopedics.php">
                                        Cancer care
                                    </a>
                                </h3>
                                <p>Pellentesque in ipsum id orci porta dapibus. Nulla quis lorem ut libero malesuada
                                    feugiat. Sed porttitor lectus nibh.</p>
                                <a href="department-orthopedics.php" class="read-more">
                                    Read More
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="single-our-department">
                            <img src="{{ asset('web/images/department/department-5.jpg') }}" alt="Image">

                            <div class="department-content one">
                                <h3>
                                    <a href="department-orthopedics.php">
                                        Gastroenterology
                                    </a>
                                </h3>

                                <p>Pellentesque nec, egestas non nisi. Sed porttitor lectus nibh.</p>
                            </div>

                            <div class="department-content hover">
                                <div class="icon">
                                    <i class="flaticon-fracture"></i>
                                </div>
                                <h3>
                                    <a href="department-orthopedics.php">
                                        Gastroenterology
                                    </a>
                                </h3>
                                <p>Pellentesque in ipsum id orci porta dapibus. Nulla quis lorem ut libero malesuada
                                    feugiat. Sed porttitor lectus nibh.</p>
                                <a href="department-orthopedics.php" class="read-more">
                                    Read More
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="single-our-department">
                            <img src="{{ asset('web/images/department/department-6.jpg') }}" alt="Image">

                            <div class="department-content one">
                                <h3>
                                    <a href="department-orthopedics.php">
                                        Medicine
                                    </a>
                                </h3>

                                <p>Pellentesque nec, egestas non nisi. Sed porttitor lectus nibh.</p>
                            </div>

                            <div class="department-content hover">
                                <div class="icon">
                                    <i class="flaticon-fracture"></i>
                                </div>
                                <h3>
                                    <a href="department-orthopedics.php">
                                        Medicine
                                    </a>
                                </h3>
                                <p>Pellentesque in ipsum id orci porta dapibus. Nulla quis lorem ut libero malesuada
                                    feugiat. Sed porttitor lectus nibh.</p>
                                <a href="department-orthopedics.php" class="read-more">
                                    Read More
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="single-our-department">
                            <img src="{{ asset('web/images/department/department-7.jpg') }}" alt="Image">

                            <div class="department-content one">
                                <h3>
                                    <a href="department-orthopedics.php">
                                        Cardiology
                                    </a>
                                </h3>

                                <p>Pellentesque nec, egestas non nisi. Sed porttitor lectus nibh.</p>
                            </div>

                            <div class="department-content hover">
                                <div class="icon">
                                    <i class="flaticon-fracture"></i>
                                </div>
                                <h3>
                                    <a href="department-orthopedics.php">
                                        Cardiology
                                    </a>
                                </h3>
                                <p>Pellentesque in ipsum id orci porta dapibus. Nulla quis lorem ut libero malesuada
                                    feugiat. Sed porttitor lectus nibh.</p>
                                <a href="department-orthopedics.php" class="read-more">
                                    Read More
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="single-our-department">
                            <img src="{{ asset('web/images/department/department-8.jpg') }}" alt="Image">

                            <div class="department-content one">
                                <h3>
                                    <a href="department-orthopedics.php">
                                        Surgery
                                    </a>
                                </h3>

                                <p>Pellentesque nec, egestas non nisi. Sed porttitor lectus nibh.</p>
                            </div>

                            <div class="department-content hover">
                                <div class="icon">
                                    <i class="flaticon-fracture"></i>
                                </div>
                                <h3>
                                    <a href="department-orthopedics.php">
                                        Surgery
                                    </a>
                                </h3>
                                <p>Pellentesque in ipsum id orci porta dapibus. Nulla quis lorem ut libero malesuada
                                    feugiat. Sed porttitor lectus nibh.</p>
                                <a href="department-orthopedics.php" class="read-more">
                                    Read More
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Our Department Area -->

        <!-- Start Choose Us Area -->
        <div class="choose-us-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="choose-us-content">
                            <span class="top-title">WHY CHOOSE US</span>
                            <h2>Our hospital has professional doctors who provide low cost 24 hour service</h2>
                            <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Donec sollicitudin
                                molestie malesuada. Nulla quis lorem ut libero malesuada feugiat.</p>

                            <ul>
                                <li>
                                    <span>1</span>
                                    <h3>Modern Technology</h3>
                                    Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget
                                    consectetur sed, convallis at tellus.
                                </li>
                                <li class="active">
                                    <span>2</span>
                                    <h3>Professional Doctors</h3>
                                    Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget
                                    consectetur sed, convallis at tellus.
                                </li>
                                <li>
                                    <span>3</span>
                                    <h3>Affordable Price</h3>
                                    Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget
                                    consectetur sed, convallis at tellus.
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="choose-us-img ml-86">
                            <img src="{{ asset('web/images/choose-us-img.jpg') }}" alt="Image">

                            <div class="ambulance-services d-flex">
                                <img src="{{ asset('web/images/icon/icon-2.svg') }}" alt="Image">
                                <div class="ambulance-info">
                                    <span>24/7 Hours Service</span>
                                    <a href="tel:1-885-665-2022">1-885-665-2022</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Choose Us Area -->


        <!-- Start Urgent Area -->
        <div class="urgent-area ptb-100">
            <div class="container">
                <div class="section-title services-title">
                    <span class="top-title">URGENT SERVICES</span>
                    <h2>See our hospital's emergency care services</h2>
                </div>

                <div class="urgent-slide owl-carousel owl-theme">
                    <div class="single-urgent">
                        <div class="icon">
                            <img src="{{ asset('web/images/icon/icon-3.svg') }}" alt="Image">
                        </div>
                        <h3>Chest Pain</h3>
                    </div>
                    <div class="single-urgent">
                        <div class="icon">
                            <img src="{{ asset('web/images/icon/icon-2.svg') }}" alt="Image">
                        </div>
                        <h3>Minor Injury</h3>
                    </div>
                    <div class="single-urgent">
                        <div class="icon">
                            <img src="{{ asset('web/images/icon/icon-3.svg') }}" alt="Image">
                        </div>
                        <h3>Vaccinations</h3>
                    </div>
                    <div class="single-urgent">
                        <div class="icon">
                            <img src="{{ asset('web/images/icon/icon-4.svg') }}" alt="Image">
                        </div>
                        <h3>Minor Burns</h3>
                    </div>
                    <div class="single-urgent">
                        <div class="icon">
                            <img src="{{ asset('web/images/icon/icon-3.svg') }}" alt="Image">
                        </div>
                        <h3>Chest Pain</h3>
                    </div>
                    <div class="single-urgent">
                        <div class="icon">
                            <img src="{{ asset('web/images/icon/icon-2.svg') }}" alt="Image">
                        </div>
                        <h3>Minor Injury</h3>
                    </div>
                    <div class="single-urgent">
                        <div class="icon">
                            <img src="{{ asset('web/images/icon/icon-3.svg') }}" alt="Image">
                        </div>
                        <h3>Vaccinations</h3>
                    </div>
                    <div class="single-urgent">
                        <div class="icon">
                            <img src="{{ asset('web/images/icon/icon-4.svg') }}" alt="Image">
                        </div>
                        <h3>Minor Burns</h3>
                    </div>
                    <div class="single-urgent">
                        <div class="icon">
                            <img src="{{ asset('web/images/icon/icon-3.svg') }}" alt="Image">
                        </div>
                        <h3>Chest Pain</h3>
                    </div>
                    <div class="single-urgent">
                        <div class="icon">
                            <img src="{{ asset('web/images/icon/icon-2.svg') }}" alt="Image">
                        </div>
                        <h3>Minor Injury</h3>
                    </div>
                    <div class="single-urgent">
                        <div class="icon">
                            <img src="{{ asset('web/images/icon/icon-3.svg') }}" alt="Image">
                        </div>
                        <h3>Vaccinations</h3>
                    </div>
                    <div class="single-urgent">
                        <div class="icon">
                            <img src="{{ asset('web/images/icon/icon-4.svg') }}" alt="Image">
                        </div>
                        <h3>Minor Burns</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Urgent Area -->


        {{-- <!-- Start Dark Mode Area -->
        <div class="dark-mode-btn">
            <div class="container">
                <div class="dark-version">
                    <label id="switch" class="switch">
                        <input type="checkbox" onchange="toggleTheme()" id="slider">
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>
        <!-- End Dark Mode Area -->

        <!-- Start Dark Mode Area -->
        <div class="dark-mode-btn">
            <div class="container">
                <div class="dark-version">
                    <label id="switch" class="switch">
                        <input type="checkbox" onchange="toggleTheme()" id="slider">
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>
        <!-- End Dark Mode Area --> --}}


    </main>
@endsection


@section('css')
@endsection

@section('js')
@endsection
