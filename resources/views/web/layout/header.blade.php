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
                    @auth
                        <li>
                            <a href="{{ route('cart') }}"><i class="fa-solid fa-cart-shopping"></i></a>
                        </li>
                        <li>
                            <a href="{{ route('user.logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
                        </li>

                    @else
                        <li>
                            <i class="ri-user-3-line"></i>
                            <a href="{{ route('web.login') }}">Login</a>
                        </li>
                    @endauth
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
                    <a href="{{ route('web.index') }}">
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
                <a class="navbar-brand" href="{{ route('web.index') }}">
                    <img src="{{ asset($logo->image) }}" class="main-logo" alt="logo">
                    <img src="{{ asset('web/images/white-logo.png') }}" class="white-logo" alt="logo">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="{{ route('web.index') }}" class="nav-link border-style active">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('aboutus') }}" class="nav-link border-style">About Us</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('product') }}" class="nav-link border-style">Products</a>
                        </li>


                        <li class="nav-item">
                            <a href="{{ route('contactus') }}" class="nav-link border-style">Contact Us</a>
                        </li>
                    </ul>

                </div>
            </nav>
        </div>
    </div>

</div>
<!-- End Navbar Area -->