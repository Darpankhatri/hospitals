<?php $logo = App\Models\logo::where('name','logo')->where('is_active',1)->first();
?>
<!-- Start Footer Area -->
<div class="footer-area bg-color-f1f5f8 pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-6">
                <div class="single-footer-widget">
                    <a href="index.php" class="logo">
                        <img src="{{ asset($logo->image) }}" class="main-logo" alt="logo">
                        <img src="{{ asset('web/images/white-logo.png') }}" class="white-logo" alt="logo">
                    </a>
                    <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin
                        molestie.</p>
                    <h4>177 Devon Lane Miami, MK 3355</h4>
                    <ul class="info">
                        <li>
                            <span>EMAIL US:</span>
                            <a
                                href="https://templates.envytheme.com/cdn-cgi/l/email-protection#177e7971785775726f7e3974787a"><span
                                    class="__cf_email__"
                                    data-cfemail="3950575f56795b5c4150175a5654">[email&#160;protected]</span></a>
                        </li>
                        <li>
                            <span>CALL US:</span>
                            <a href="tel:1-885-665-2022">1-885-665-2022</a>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Departments</h3>

                    <ul class="import-link">
                        <li>
                            <a href="department.php">
                                <i class="ri-arrow-right-s-line"></i>
                                Emergency Departments
                            </a>
                        </li>
                        <li>
                            <a href="department-orthopedics.php">
                                <i class="ri-arrow-right-s-line"></i>
                                Orthopedics
                            </a>
                        </li>
                        <li>
                            <a href="department.php">
                                <i class="ri-arrow-right-s-line"></i>
                                Neurosciences
                            </a>
                        </li>
                        <li>
                            <a href="department.php">
                                <i class="ri-arrow-right-s-line"></i>
                                Gastroenterology
                            </a>
                        </li>
                        <li>
                            <a href="department.php">
                                <i class="ri-arrow-right-s-line"></i>
                                Bariatric Surgery
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Helpful Links</h3>

                    <ul class="import-link">
                        <li>
                            <a href="find-a-doctor.php">
                                <i class="ri-arrow-right-s-line"></i>
                                Find a Doctor
                            </a>
                        </li>
                        <li>
                            <a href="hospital.php">
                                <i class="ri-arrow-right-s-line"></i>
                                Find a Hospital
                            </a>
                        </li>
                        <li>
                            <a href="products.php">
                                <i class="ri-arrow-right-s-line"></i>
                                Buy Medicine
                            </a>
                        </li>
                        <li>
                            <a href="terms-conditions.php">
                                <i class="ri-arrow-right-s-line"></i>
                                Terms of Use
                            </a>
                        </li>
                        <li>
                            <a href="privacy-policy.php">
                                <i class="ri-arrow-right-s-line"></i>
                                Privacy Policy
                            </a>
                        </li>
                    </ul>
                </div>
            </div> --}}

            <div class="col-lg-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Subscribe Our Newsletter</h3>

                    <form class="iiiii" action="{{ route('subscribe') }}" method="POST">
                        @csrf
                        <input type="email" class="form-control" placeholder="Email address" name="email" required
                            autocomplete="off"/>

                        <button class="default-btn" type="submit">
                            Submit now
                        </button>

                    </form>

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
                        <li>
                            <a href="https://www.instagram.com/" target="_blank">
                                <img src="{{ asset('web/images/svg-icon/instagram.svg') }}" alt="Image">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Footer Area -->

<!-- Start Copyright Area -->
<div class="copy-right-area">
    <div class="container">
        <p>© Bexi is Proudly Owned by <a href="https://envytheme.com/" target="_blank">EnvyTheme</a></p>
    </div>
</div>
<!-- End Copyright Area -->

<!-- Start Go Top Area -->
<div class="go-top">
    <i class="ri-arrow-up-s-fill"></i>
    <i class="ri-arrow-up-s-fill"></i>
</div>
<!-- End Go Top Area -->