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
                            <a href="{{ route('web.index') }}">
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
                                                <th scope="col">Update</th>
                                            </tr>
                                        </thead>
                                        <?php $total = 0 ?>
                                        <tbody>
                                            @foreach ($cart as $data)
                                                <tr>
                                                    <td class="trash">
                                                        <a href="{{ route('del.cart',$data->product->id) }}" class="remove">
                                                            <i class="ri-delete-bin-7-line"></i>
                                                        </a>
                                                    </td>
                                                    <td class="product-thumbnail">
                                                        <a href="{{ route('product.detail',$data->product->id) }}">
                                                            <img src="{{ asset($data->product->image) }}" alt="Image">
                                                        </a>
                                                    </td>

                                                    <td class="product-name">
                                                        <a href="{{ route('product.detail',$data->product->id) }}">{{ $data->product->name }}</a>
                                                    </td>

                                                    <td class="product-price">
                                                        <span class="unit-amount">${{ $data->product->price }}.00</span>
                                                    </td>

                                                    <td class="product-quantity">
                                                        <div class="input-counter">
                                                            <span class="minus-btn">
                                                                <i class="ri-subtract-line"></i>
                                                            </span>

                                                            <input id="product-qnt" type="text" value="{{ $data->quantity }}"
                                                                min="1" max="{{ $data->product->stock }}">

                                                            <span class="plus-btn">
                                                                <i class="ri-add-line"></i>
                                                            </span>
                                                        </div>
                                                    </td>

                                                    <td class="product-subtotal">
                                                        <span
                                                            class="subtotal-amount">${{ $data->quantity * $data->product->price }}.00</span>
                                                            <?php $total += $data->quantity * $data->product->price ?>
                                                    </td>

                                                    <td class="product-update">
                                                        <a data-id="{{ $data->product->id }}" href="javascript:void();" class="add-to-cart"><i
                                                                class="fa-duotone fa-pen-to-square"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach



                                        </tbody>
                                    </table>
                                </div>
                            </form>

                            {{-- <div class="coupon-cart">
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
                            </div> --}}
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="cart-totals">
                            <h3 class="cart-checkout-title">Cart Totals</h3>

                            <div class="cart-totals-wrap">
                                <ul>
                                    <li>Subtotal <span>${{ $total }}.00</span></li>
                                    <li>Shipping <span>$00.00</span></li>
                                    <li>Total <span>${{ $total }}.00</span></li>
                                    <li><b>Payable Total</b> <span><b>${{ $total }}.00</b></span></li>
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
    <script>
        $(document).on("click", ".add-to-cart", function() {
            var id = $(this).data("id");
            var quantity = $(this).closest('tr').find('#product-qnt').val();
            console.log(quantity);
            $.ajax({
                type: 'post',
                dataType: 'json',
                url: "{{ route('add.cart') }}",
                data: {
                    product_id: id,
                    quantity: quantity,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    toastr.options = {
                        "closeButton": true,
                        "progressBar": true,
                    }
                    toastr.success(response.message);
                    location.reload();
                }
            });
        });
    </script>
@endsection
