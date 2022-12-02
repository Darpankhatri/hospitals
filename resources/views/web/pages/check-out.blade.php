@extends('web.layout.master')

@section('content')
    <main>

        <!-- Start Page Banner Area -->
        <div class="page-banner-area bg-19 pt-100">
            <div class="container">
                <div class="page-banner-content">
                    <h2>Checkout</h2>
                    <ul>
                        <li>
                            <a href="{{ route('web.index') }}">
                                <i class="ri-home-8-line"></i>
                                Home
                            </a>
                        </li>
                        <li>
                            <span>Checkout</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Banner Area -->

        <!-- Start Checkout Area -->
        <section class="checkout-area ptb-100">
            <div class="container">
                <div class="checkout-wrap">
                    <div class="row">
                        <div class="col-lg-8 col-md-12">
                            <form action="{{ route('place.order') }}" method="POST">
                                @csrf
                                <div class="billing-details">
                                    <h3 class="title">Billing details</h3>

                                    <div class="row">
                                        <div class="col-lg-12 col-md-6">
                                            <div class="form-group">
                                                <label>NAME</label>
                                                <input type="text" class="form-control" name="name" placeholder="Enter name" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label>EMAIL</label>
                                                <input type="text" class="form-control" name="email" placeholder="info@baxi.com" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label>PHONE</label>
                                                <input type="text" class="form-control" name="phone" placeholder="**********" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-6">
                                            <div class="form-group">
                                                <label>ADDRESS</label>
                                                <input type="text" class="form-control" name="address"
                                                    placeholder="Your address here..." required>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-6">
                                            <div class="form-group">
                                                <label>CITY</label>
                                                <input type="text" name="city" class="form-control" placeholder="Enter City" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label>STATE</label>
                                                <input type="text" class="form-control" name="state" placeholder="Enter State" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label>POSTCODE/ZIP</label>
                                                <input type="number" class="form-control" name="zip" placeholder="" required>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="faq-accordion">
                                        <button type="submit" class="default-btn">
                                            Place order
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-4 col-md-12">
                            <div class="order-details">
                                <div class="cart-totals">
                                    <h3>Checkout summary</h3>

                                    <ul class="cart-totals-wrap">
                                        <li>Subtotal <span>${{ $total }}.00</span></li>
                                        <li>Shipping <span>$00.00</span></li>
                                        <li>Total <span>${{ $total }}.00</span></li>
                                        <li><b>Payable Total</b> <span><b>${{ $total }}.00</b></span></li>
                                    </ul>
                                </div>

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Checkout Area -->

    </main>
@endsection


@section('css')
@endsection

@section('js')
@endsection
