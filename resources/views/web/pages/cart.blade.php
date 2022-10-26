@extends('web.layout.master')

@section('content')
    <main>

        <!-- Start Page Banner Area -->
        <div class="page-banner-area bg-18 pt-100">
            <div class="container">
                <div class="page-banner-content">
                    <h2>Cart</h2>
                    <ul>
                        <li>
                            <a href="index.php">
                                <i class="ri-home-8-line"></i>
                                Home
                            </a>
                        </li>
                        <li>
                            <span>Cart</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Banner Area -->

        <!-- Start Cart Area -->
        <section class="cart-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="cart-wrap">
                            <form class="cart-controller">
                                <div class="cart-table table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Remove</th>
                                                <th scope="col">Product</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col">Subtotal</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td class="trash">
                                                    <a href="cart.php" class="remove">
                                                        <i class="ri-delete-bin-7-line"></i>
                                                    </a>
                                                </td>
                                                <td class="product-thumbnail">
                                                    <a href="product-details.php">
                                                        <img src="{{ asset('web/images/products/product-5.jpg') }}" alt="Image">
                                                    </a>
                                                </td>

                                                <td class="product-name">
                                                    <a href="product-details.php">Anti-virus Gel</a>
                                                </td>

                                                <td class="product-price">
                                                    <span class="unit-amount">$19.00</span>
                                                </td>

                                                <td class="product-quantity">
                                                    <div class="input-counter">
                                                        <span class="minus-btn">
                                                            <i class="ri-subtract-line"></i>
                                                        </span>

                                                        <input type="text" value="1" min="1" max="10">

                                                        <span class="plus-btn">
                                                            <i class="ri-add-line"></i>
                                                        </span>
                                                    </div>
                                                </td>

                                                <td class="product-subtotal">
                                                    <span class="subtotal-amount">$19.00</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="trash">
                                                    <a href="cart.php" class="remove">
                                                        <i class="ri-delete-bin-7-line"></i>
                                                    </a>
                                                </td>
                                                <td class="product-thumbnail">
                                                    <a href="product-details.php">
                                                        <img src="{{ asset('web/images/products/product-2.jpg') }}" alt="Image">
                                                    </a>
                                                </td>

                                                <td class="product-name">
                                                    <a href="product-details.php">MK Nose Droper</a>
                                                </td>

                                                <td class="product-price">
                                                    <span class="unit-amount">$15.00</span>
                                                </td>

                                                <td class="product-quantity">
                                                    <div class="input-counter">
                                                        <span class="minus-btn">
                                                            <i class="ri-subtract-line"></i>
                                                        </span>

                                                        <input type="text" value="1">

                                                        <span class="plus-btn">
                                                            <i class="ri-add-line"></i>
                                                        </span>
                                                    </div>
                                                </td>

                                                <td class="product-subtotal">
                                                    <span class="subtotal-amount">$15.00</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="trash">
                                                    <a href="cart.php" class="remove">
                                                        <i class="ri-delete-bin-7-line"></i>
                                                    </a>
                                                </td>
                                                <td class="product-thumbnail">
                                                    <a href="product-details.php">
                                                        <img src="{{ asset('web/images/products/product-3.jpg') }}" alt="Image">
                                                    </a>
                                                </td>

                                                <td class="product-name">
                                                    <a href="product-details.php">Bacuum Tube</a>
                                                </td>

                                                <td class="product-price">
                                                    <span class="unit-amount">$20.00</span>
                                                </td>

                                                <td class="product-quantity">
                                                    <div class="input-counter">
                                                        <span class="minus-btn">
                                                            <i class="ri-subtract-line"></i>
                                                        </span>

                                                        <input type="text" value="1">

                                                        <span class="plus-btn">
                                                            <i class="ri-add-line"></i>
                                                        </span>
                                                    </div>
                                                </td>

                                                <td class="product-subtotal">
                                                    <span class="subtotal-amount">$20.00</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="trash">
                                                    <a href="cart.php" class="remove">
                                                        <i class="ri-delete-bin-7-line"></i>
                                                    </a>
                                                </td>
                                                <td class="product-thumbnail">
                                                    <a href="product-details.php">
                                                        <img src="{{ asset('web/images/products/product-4.jpg') }}" alt="Image">
                                                    </a>
                                                </td>

                                                <td class="product-name">
                                                    <a href="product-details.php">Deodo Lequide</a>
                                                </td>

                                                <td class="product-price">
                                                    <span class="unit-amount">$25.00</span>
                                                </td>

                                                <td class="product-quantity">
                                                    <div class="input-counter">
                                                        <span class="minus-btn">
                                                            <i class="ri-subtract-line"></i>
                                                        </span>

                                                        <input type="text" value="1">

                                                        <span class="plus-btn">
                                                            <i class="ri-add-line"></i>
                                                        </span>
                                                    </div>
                                                </td>

                                                <td class="product-subtotal">
                                                    <span class="subtotal-amount">$25.00</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </form>

                            <div class="coupon-cart">
                                <div class="row">
                                    <div class="col-lg-8 col-md-7">
                                        <div class="form-group mb-0">
                                            <input type="text" class="form-control" placeholder="Coupon code">
                                            <button type="submit" class="default-btn">
                                                Apply coupon
                                            </button>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-5">
                                        <a href="checkout.php" class="default-btn update-cart active">
                                            Update cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="cart-totals">
                            <h3 class="cart-checkout-title">Cart Totals</h3>

                            <div class="cart-totals-wrap">
                                <ul>
                                    <li>Subtotal <span>$79.00</span></li>
                                    <li>Shipping <span>$00.00</span></li>
                                    <li>Total <span>$79.00</span></li>
                                    <li><b>Payable Total</b> <span><b>$79.00</b></span></li>
                                </ul>

                                <a href="{{ route('checkout') }}" class="default-btn active">
                                    Proceed to checkout
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Cart Area -->

    </main>
@endsection


@section('css')
@endsection

@section('js')
@endsection
