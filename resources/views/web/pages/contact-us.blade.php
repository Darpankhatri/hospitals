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


        <!-- Start Contact Area -->
        <div class="contact-area pb-100">
            <div class="container">
                <div class="contact-form">
                    <h3>Send message</h3>

                    <form id="iiiii" action="{{ route('send.message') }}" method="post" >
                        @csrf
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
                                    <input type="text" name="phone" id="phone_number" required
                                        data-error="Please enter your number" class="form-control"
                                        placeholder="***********">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>SUBJECT</label>
                                    <input type="text" name="subject" id="msg_subject" class="form-control" required
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
