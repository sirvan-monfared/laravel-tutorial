<x-layout.app>

    <x-slot:css>
        <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
    </x-slot:css>

    <section class="wsus__product_details mt_170 mb_100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5 wow fadeInLeft">
                    @include('front.product._images_slider')
                </div>
                <div class="col-lg-6 col-xl-7 wow fadeInRight">
                    <div class="wsus__product_summary">
                        <h2>{{ $product->title }}</h2>
                        <span>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <b>8k+ reviews</b>
                        </span>
                        <h6>${{ number_format($product->price) }}</h6>
                        <p>{!! $product->short_description !!}</p>

                        <h6 class="mt_30">Color</h6>
                        <select class="select_2" name="state">
                            <option value="ALL">Select Color</option>
                            @foreach($product->colors as $color)
                                <option value="{{ $color->id }}">{{ $color->name }}</option>
                            @endforeach
                        </select>


                        <div class="wsus__product_add_cart">
                            <div class="wsus__product_quantity">
                                <button class="minus" type="submit"><i class="far fa-minus"></i></button>
                                <input type="text" placeholder="01">
                                <button class="plus" type="submit"><i class="far fa-plus"></i></button>
                            </div>
                            <div class="wsus__buy_cart_button">
                                <a href="#" class="cart"><img src="{{ asset('assets/images/cart_icon_black.svg') }}" alt="cart"
                                                              class="img-fluid w-100"></a>
                                <a href="cart.html" class="common_btn">Buy Now</a>
                            </div>
                        </div>
                        <ul class="wishlist d-flex flex-wrap">
                            <li><a href="#"><span><i class="fal fa-heart"></i></span>ADD TO WISHLIST</a></li>
                            <li><a href="#"><span><i class="fal fa-share-alt"></i></span>SHARE</a></li>
                        </ul>
                        <ul class="details">
                            <li>SKU:<span>{{ $product->sku }}</span></li>
                            <li>Categories:<span>Casual, walk, run, brand</span></li>
                            <li>Tags:<span>gym, health, run, style</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="wsus__product_details_menu_contant">
                        <div class="wsus__product_description wow fadeInUp">
                            {!! $product->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-slot:js>
        <script src="{{ asset('assets/js/slick.min.js') }}"></script>
        <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    </x-slot:js>

</x-layout.app>