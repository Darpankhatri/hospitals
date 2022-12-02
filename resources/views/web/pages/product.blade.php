@extends('web.layout.master')

@section('content')
    <main>

        <!-- Start Page Banner Area -->
        <div class="page-banner-area bg-16 pt-100">
            <div class="container">
                <div class="page-banner-content">
                    <h2>Products</h2>
                    <ul>
                        <li>
                            <a href="{{ route('web.index') }}">
                                <i class="ri-home-8-line"></i>
                                Home
                            </a>
                        </li>
                        <li>
                            <span>Products</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Banner Area -->

        <!-- End Products Area -->
        <div class="products-area ptb-100">
            <div class="container">
                {{-- <div class="srarch-result d-flex justify-content-between align-items-center">
                    <p>Showing 1–12 of 30 results</p>
                    <select class="form-select form-control" aria-label="Default select example">
                        <option selected>Default sorting</option>
                        <option value="1">Glass</option>
                        <option value="2">Vial</option>
                        <option value="3">Droper</option>
                    </select>
                </div> --}}

                <div class="row justify-content-center">
                    @foreach ($product as $data)
                        
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-product">
                                <div class="product-img">
                                    <img src="{{ asset($data->image) }}" alt="Image">
                                    <div class="add-cart">
                                        <a data-id="{{ $data->id }}" href="javascript:void();" class="default-btn add-to-cart">Add to cart</a>
                                    </div>
                                </div>

                                <div class="product-content">
                                    <ul>
                                        <li>
                                            <i class="ri-star-fill"></i>
                                        </li>
                                        <li>
                                            <i class="ri-star-fill"></i>
                                        </li>
                                        <li>
                                            <i class="ri-star-fill"></i>
                                        </li>
                                        <li>
                                            <i class="ri-star-fill"></i>
                                        </li>
                                        <li>
                                            <i class="ri-star-fill"></i>
                                        </li>
                                    </ul>

                                    <h3>
                                        <a href="{{ route('product.detail',$data->id) }}">{{ $data->name }}</a>
                                    </h3>

                                    {{-- <span><del>$99.00</del> - $55.00</span> --}}
                                    <span>${{ $data->price }}.00</span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- <div class="col-lg-3 col-sm-6">
                        <div class="single-product">
                            <div class="product-img">
                                <img src="assets/images/products/product-3.jpg" alt="Image">
                                <div class="add-cart">
                                    <a href="cart.php" class="default-btn">Add to cart</a>
                                </div>
                            </div>

                            <div class="product-content">
                                <ul>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                </ul>

                                <h3>
                                    <a href="product-details.php">Long rectangel</a>
                                </h3>

                                <span><del>$99.00</del> - $75.00</span>
                            </div>
                        </div>
                    </div> --}}


                    <div class="d-flex justify-content-left">
                        {{-- {!! $product->links() !!} --}}
                        {!! $product->links('pagination::bootstrap-4') !!}
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Products Area -->


    </main>
@endsection


@section('css')
@endsection

@section('js')
    <script>
        $(document).on("click", ".add-to-cart", function() {
            var id = $(this).data("id");
            var quantity = 1;
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
                    
                }
            });
        });
    </script>
@endsection
