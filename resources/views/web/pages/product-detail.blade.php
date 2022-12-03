@extends('web.layout.master')

@section('content')
    <main>


        <!-- Start Page Banner Area -->
        <div class="page-banner-area bg-17 pt-100">
            <div class="container">
                <div class="page-banner-content">
                    <h2>Products Details</h2>
                    <ul>
                        <li>
                            <a href="{{ route('web.index') }}">
                                <i class="ri-home-8-line"></i>
                                Home
                            </a>
                        </li>
                        <li>
                            <span>Products Details</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Banner Area -->

        <!-- Start Product Details Area -->
        <section class="product-details-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="product-details-image pr-15">
                            <img src="{{ asset($product->image) }}" alt="Image">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="product-details-desc pl-15">
                            <h3>{{ $product->name }}</h3>

                            <div class="price">
                                <span class="new-price">${{ $product->price }}.00</span>
                            </div>

                            <ul class="sku">
                                <li>
                                    Description:
                                </li>
                            </ul>

                            <p>{{ $product->description }}</p>

                            <div class="product-add-to-cart d-flex align-items-center">
                                <div class="input-counter">
                                    <span class="minus-btn">
                                        <i class="ri-subtract-line"></i>
                                    </span>

                                    <input id="product-qnt" type="text" value="1" min="1" max="{{ $product->stock }}">

                                    <span class="plus-btn">
                                        <i class="ri-add-line"></i>
                                    </span>
                                </div>
                                <button data-id="{{ $product->id }}" class="default-btn add-to-cart">
                                    Add to cart
                                </button>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="tab product-details-tab">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                                        data-bs-target="#description" type="button" role="tab"
                                        aria-controls="description" aria-selected="true">Description</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="additional-tab" data-bs-toggle="tab"
                                        data-bs-target="#additional" type="button" role="tab"
                                        aria-controls="additional" aria-selected="false">Additional Information</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="description" role="tabpanel"
                                    aria-labelledby="description-tab">
                                    <div class="product-details-description-content">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero blanditiis quo
                                            fugiat magni accusamus exercitationem! Voluptate, deleniti quae. Libero iusto
                                            minus, nulla excepturi quidem reprehenderit blanditiis eligendi exercitationem
                                            nesciunt ad! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi
                                            temporibus deserunt mollitia natus esse, sunt fuga quos. Autem quasi error
                                            quisquam architecto fuga suscipit atque voluptatibus nobis impedit nulla.
                                            Officia ercitationem. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                            Officia quaerat maxime laudantium obcaecati qui? Magni officiis fugit, dolorem
                                            mollitia eius similique accusantium nostrum possimus consectetur laudantium
                                            distinctio aliquid delectus assumenda? Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Maxime earum deleniti, quaerat rerum corporis quis iste
                                            veritatis</p>

                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis repellat
                                            tempora aliquid exercitationem. Vel, dicta quos. Velit magnam, eius unde ullam,
                                            distinctio atque aperiam obcaecati ipsam id, inventore consectetur laudantium
                                            repellat tempora aliquid exercitationem. Vel, dicta quos. Velit magnam, eius
                                            unde ullam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati
                                            reprehenderit quasi fugit error deleniti libero, porro illo numquam accusamus
                                            sunt id sapiente! temporibus deserunt mollitia</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="additional" role="tabpanel" aria-labelledby="additional-tab">
                                    <div class="product-details-additional-content">
                                        <ul>
                                            <li>
                                                Brand:
                                                <span>ThemeForest</span>
                                            </li>
                                            <li>
                                                Color:
                                                <span>Brown</span>
                                            </li>
                                            <li>
                                                Size:
                                                <span>Large, Medium</span>
                                            </li>
                                            <li>
                                                Weight:
                                                <span>27 kg</span>
                                            </li>
                                            <li>
                                                Dimensions:
                                                <span>16 x 22 x 123 cm</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Product Details Area -->



    </main>
@endsection


@section('css')
@endsection

@section('js')
    <script>
        $(document).on("click", ".add-to-cart", function() {
            var id = $(this).data("id");
            console.log("here");
            var quantity = $('#product-qnt').val();
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
