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
                            <form>
                                <div class="billing-details">
                                    <h3 class="title">Billing details</h3>

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label>FIRST NAME</label>
                                                <input type="text" class="form-control" placeholder="Edgar">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label>LAST NAME</label>
                                                <input type="text" class="form-control" placeholder="Matthews">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label>COUNTRY</label>

                                                <div class="select-box">
                                                    <select class="form-control">
                                                        <option value="5">United Kingdom</option>
                                                        <option value="1">China</option>
                                                        <option value="2">United Arab Emirates</option>
                                                        <option value="0">Germany</option>
                                                        <option value="3">France</option>
                                                        <option value="4">Japan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label>COMPANY NAME
                                                </label>
                                                <input type="text" class="form-control" placeholder="Bexi">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-6">
                                            <div class="form-group">
                                                <label>ADDRESS</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Your address here...">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-6">
                                            <div class="form-group">
                                                <label>TOUN / CITY</label>
                                                <input type="text" class="form-control" placeholder="Scottish">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label>STATE/COINTY</label>
                                                <input type="text" class="form-control" placeholder="44">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label>POSTCODE/ZIP</label>
                                                <input type="text" class="form-control" placeholder="917">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label>EMAIL</label>
                                                <input type="text" class="form-control" placeholder="info@baxi.com">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label>PHONE</label>
                                                <input type="text" class="form-control" placeholder="**********">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>ORDER NOTES (OPTIONAL)</label>
                                                <textarea name="notes" id="notes" cols="30" rows="8" class="form-control"
                                                    placeholder="write note here..."></textarea>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group mb-0">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Ship to a different address?
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-4 col-md-12">
                            <div class="order-details">
                                <div class="cart-totals">
                                    <h3>Checkout summary</h3>

                                    <ul class="cart-totals-wrap">
                                        <li>Subtotal <span>$79.00</span></li>
                                        <li>Shipping <span>$79.00</span></li>
                                        <li>Coupon <span>$00.00</span></li>
                                        <li>Total <span>$79.00</span></li>
                                        <li><b>Payable Total</b> <span><b>$79.00</b></span></li>
                                    </ul>
                                </div>

                                <div class="faq-accordion">
                                    <h3>Payment method</h3>

                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    Direct bank transfer
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p> Make your payment directly into our bank account. Please use your
                                                        Order ID as the payment reference. Your order won’t be shipped until
                                                        the funds have our account.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    Cash on delivery
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>
                                                        Please send your cheque to Store Name, Store Street, Store Town,
                                                        Store State / County, Store Postcode.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    PayPal
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Pay via PayPal; you can pay with your credit card if you don’t have a
                                                        PayPal account.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                I’ve read and accept the <a href="terms-conditions.php">Terms &
                                                    Conditions*</a>
                                            </label>
                                        </div>

                                        <a href="checkout.php" class="default-btn">
                                            Place order
                                        </a>
                                    </div>
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
