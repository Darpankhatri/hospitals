<?php $logo = App\Models\logo::where('name','logo')->where('is_active',1)->first();
?>
<!-- Start Preloader Area -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="preloader-container">
            <div class="petal"></div>
            <div class="petal"></div>
            <div class="petal"></div>
            <div class="petal"></div>
            <div class="petal"></div>
            <div class="petal"></div>
            <div class="petal"></div>
            <div class="petal"></div>
            <div class="petal-1"></div>
            <div class="petal-1"></div>
            <div class="petal-1"></div>
            <div class="ball"></div>
        </div>
    </div>
</div>
<!-- End Preloader Area -->

<!-- Start Header Area -->
<div class="top-header-area bg-color-091c47">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <ul class="header-left-content">
                    <li>
                        <span>Phone:</span>
                        <a href="tel:1-885-665-2022">1-885-665-2022</a>
                    </li>
                    <li>
                        <span>Email:</span>
                        <a
                            href="https://templates.envytheme.com/cdn-cgi/l/email-protection#4f262129200f2d2a3726612c2022"><span
                                class="__cf_email__"
                                data-cfemail="e881868e87a88a8d9081c68b8785">[email&#160;protected]</span></a>
                    </li>
                    <li>
                        <span>Mon-Sat:</span>
                        8:00AM - 7:00PM
                    </li>
                </ul>
            </div>

            <div class="col-lg-4">
                <ul class="header-right-content">
                    <li>
                        <i class="ri-user-3-line"></i>
                        <a href="my-account.php">Login</a>
                    </li>
                    <!-- <li>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>English</option>
                            <option value="1">China</option>
                            <option value="2">العربيّة</option>
                            <option value="3">Germany</option>
                            <option value="4">Portugues</option>
                        </select>
                    </li> -->
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Header Area -->

<!-- Start Navbar Area -->
<div class="navbar-area">
    <div class="mobile-responsive-nav">
        <div class="container">
            <div class="mobile-responsive-menu">
                <div class="logo">
                    <a href="index.php">
                        <img src="{{ asset($logo->image) }}" class="main-logo" alt="logo">
                        <img src="{{ asset('web/images/white-logo.png') }}" class="white-logo" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="desktop-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.php">
                    <img src="{{ asset($logo->image) }}" class="main-logo" alt="logo">
                    <img src="{{ asset('web/images/white-logo.png') }}" class="white-logo" alt="logo">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link border-style active">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('aboutus') }}" class="nav-link border-style">About Us</a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle border-style">
                                Patient Care
                            </a>

                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="department.php" class="nav-link">Department Care</a>
                                </li>
                                <li class="nav-item">
                                    <a href="department-orthopedics.php" class="nav-link">Department
                                        Orthopedics</a>
                                </li>
                                <li class="nav-item">
                                    <a href="find-a-doctor.php" class="nav-link">Find A Doctor</a>
                                </li>
                                <li class="nav-item">
                                    <a href="doctor-details.php" class="nav-link">Doctor Details</a>
                                </li>
                                <li class="nav-item">
                                    <a href="testimonials.php" class="nav-link">Testimonials</a>
                                </li>
                                <li class="nav-item">
                                    <a href="payment.php" class="nav-link">Payment</a>
                                </li>
                                <li class="nav-item">
                                    <a href="appointment.php" class="nav-link">Appointment</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle border-style">
                                Pages
                            </a>

                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">
                                        Hospital
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="hospital.php" class="nav-link">Hospital</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="hospital-details.php" class="nav-link">Hospital Details</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">
                                        Health
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="health-information.php" class="nav-link">Health
                                                Information</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="consult-online.php" class="nav-link">Consult Online</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="patient-visitors.php" class="nav-link">Patient & Visitors</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="patient-information.php" class="nav-link">Patient
                                                Information</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="visitor-information.php" class="nav-link">Visitor
                                                Information</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">
                                        Shop
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="products.php" class="nav-link">Products</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="cart.php" class="nav-link">Cart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="checkout.php" class="nav-link">Checkout</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-details.php" class="nav-link">Product Details</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="my-account.php" class="nav-link">My Account</a>
                                </li>
                                <li class="nav-item">
                                    <a href="need-help.php" class="nav-link">Need Help</a>
                                </li>
                                <li class="nav-item">
                                    <a href="404.php" class="nav-link">Error Page</a>
                                </li>
                                <li class="nav-item">
                                    <a href="privacy-policy.php" class="nav-link">Privacy Policy</a>
                                </li>
                                <li class="nav-item">
                                    <a href="terms-conditions.php" class="nav-link">Terms & Conditions</a>
                                </li>
                                <li class="nav-item">
                                    <a href="coming-soon.php" class="nav-link">Coming Soon</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle border-style">
                                Blog
                            </a>

                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="blog.php" class="nav-link">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-details.php" class="nav-link">Blog Details</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('contactus') }}" class="nav-link border-style">Contact Us</a>
                        </li>
                    </ul>

                    <div class="others-options">
                        <ul class="d-flex align-items-center">
                            <!-- <li>
                                <a href="cart.php" class="cart">
                                    <img src="assets/images/svg-icon/cart.svg" alt="Image">
                                    <span>0</span>
                                </a>
                            </li>
                            <li>
                                <div class="option-item">
                                    <img src="assets/images/svg-icon/search.svg" class="search-btn" alt="Image">
                                    <i class="close-btn ri-close-line"></i>

                                    <div class="search-overlay search-popup">
                                        <div class='search-box'>
                                            <form class="search-form">
                                                <input class="search-input" name="search" placeholder="Search"
                                                    type="text">

                                                <button class="search-button" type="submit">
                                                    <i class="ri-search-line"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li> -->
                            <li>
                                <a href="appointment.php" class="default-btn">
                                    <i class="ri-clipboard-line"></i>
                                    <span>Appointment</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>

            <div class="container">
                <div class="option-inner">
                    <div class="others-options justify-content-center">
                        <ul class="d-flex align-items-center">
                            <!-- <li>
                                <a href="cart.php" class="cart">
                                    <i class="ri-shopping-cart-line"></i>
                                    <span>0</span>
                                </a>
                            </li>
                            <li>
                                <div class="option-item">
                                    <i class="search-btn ri-search-line"></i>
                                    <i class="close-btn ri-close-line"></i>

                                    <div class="search-overlay search-popup">
                                        <div class='search-box'>
                                            <form class="search-form">
                                                <input class="search-input" name="search" placeholder="Search"
                                                    type="text">

                                                <button class="search-button" type="submit">
                                                    <i class="ri-search-line"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li> -->

                            <li>
                                <a href="appointment.php" class="default-btn">
                                    <span>Appointment</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Navbar Area -->