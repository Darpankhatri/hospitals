@extends('web.layout.master')

@section('content')
    <main>

        <!-- Start Page Banner Area -->
        <div class="page-banner-area bg-23 pt-100">
            <div class="container">
                <div class="page-banner-content">
                    <h2>Contact Us</h2>
                    <ul>
                        <li>
                            <a href="{{ route('web.index') }}">
                                <i class="ri-home-8-line"></i>
                                Home
                            </a>
                        </li>
                        <li>
                            <span>Contact Us</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Banner Area -->


        <!-- Start Contact Informetion Area -->
        <div class="contact-informetion-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="left-informetion">
                            <h2>Contact Information</h2>
                            <ul>
                                <li>
                                    <span>ADDRESS:</span>
                                    1224 Woodmont LN. MK #2255, Atlanta, GA, 20304
                                </li>
                                <li>
                                    <span>EMAIL US:</span>
                                    <a
                                        href="https://templates.envytheme.com/cdn-cgi/l/email-protection#0e676068614e6c6b7667206d6163"><span
                                            class="__cf_email__"
                                            data-cfemail="9cf5f2faf3dcfef9e4f5b2fff3f1">[email&#160;protected]</span></a>
                                </li>
                                <li>
                                    <span>PHONE:</span>
                                    <a href="tell:1-885-665-2022">1-885-665-2022</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="right-informetion">
                            <h2>Opening Hours</h2>

                            <ul>
                                <li>
                                    Saturday– Thursday
                                    <span>8.00 AM – 8.00 PM</span>
                                </li>
                                <li>
                                    Saturday– Thursday
                                    <span>10.00 AM – 10.00 PM</span>
                                </li>
                                <li>
                                    Sunday
                                    <span>8.00 PM – 03.00 PM</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact Informetion Area -->

        <!-- Start Contact Area -->
        <div class="contact-area pb-100">
            <div class="container">
                <div class="contact-form">
                    <h3>Send message</h3>

                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>NAME</label>
                                    <input type="text" name="name" id="name" class="form-control" required
                                        data-error="Please enter your name" placeholder="Edgar">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>EMAIL</label>
                                    <input type="email" name="email" id="email" class="form-control" required
                                        data-error="Please enter your email" placeholder="info@bexi.com">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>PHONE</label>
                                    <input type="text" name="phone_number" id="phone_number" required
                                        data-error="Please enter your number" class="form-control"
                                        placeholder="***********">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>SUBJECT</label>
                                    <input type="text" name="msg_subject" id="msg_subject" class="form-control" required
                                        data-error="Please enter your subject" placeholder="write subject here...">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>YOUR MESSAGE</label>
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="6" required
                                        data-error="Write your message" placeholder="write message here...."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input name="gridCheck" value="I agree to the terms and privacy policy."
                                                class="form-check-input" type="checkbox" id="gridCheck" required>

                                            <label class="form-check-label" for="gridCheck">
                                                Accept <a href="terms-conditions.php">terms and conditions</a> and <a
                                                    href="privacy-policy.php">privacy policy.</a>
                                            </label>
                                            <div class="help-block with-errors gridCheck-error"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 text-center">
                                <button type="submit" class="default-btn active">
                                    Send message
                                </button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Contact Area -->


    </main>
@endsection


@section('css')
@endsection

@section('js')
@endsection
