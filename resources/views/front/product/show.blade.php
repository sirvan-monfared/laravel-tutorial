<x-layout.app>

    <x-slot:css>
        <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    </x-slot:css>


    <div class="row">

        <x-flash></x-flash>

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

                <form method="POST" action="{{ route('cart.store') }}" id="cart-form">
                    @csrf

                    <input type="hidden" name="product_id" value="{{ $product->id }}">

                    <h6 class="mt_30">Color</h6>
                    <select class="select_2 form-control" name="color_id">
                        @foreach($product->colors as $color)
                            <option value="{{ $color->id }}">{{ $color->name }}</option>
                        @endforeach
                    </select>


                    <div class="wsus__product_add_cart">
                        <div class="wsus__product_quantity">
{{--                            <input type="number" class="form-control" name="qty" value="1">--}}
                                                        <button class="minus" type="submit"><i class="far fa-minus"></i></button>
                                                        <input type="text" name="qty" placeholder="01">
                                                        <button class="plus" type="submit"><i class="far fa-plus"></i></button>
                        </div>
                        <div class="wsus__buy_cart_button">
                            <button type="submit" class="cart">
                                <img src="{{ asset('assets/images/cart_icon_black.svg') }}" alt="cart"
                                     class="img-fluid w-100">
                                <span class="text-white">Buy Now</span>
                            </button>
                        </div>
                    </div>
                </form>


                <ul class="wishlist d-flex flex-wrap">
                    <li><a href="#"><span><i class="fal fa-heart"></i></span>ADD TO WISHLIST</a></li>
                    <li><a href="#"><span><i class="fal fa-share-alt"></i></span>SHARE</a></li>
                </ul>
                <ul class="details">
                    <li>SKU:<span>{{ $product->sku }}</span></li>
                    <li>Categories:<span>{{ $product->category->title }}</span></li>
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


    <x-slot:js>
        <script src="{{ asset('assets/js/slick.min.js') }}"></script>
        <script src="{{ asset('assets/js/select2.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>


        <script>
            const formElm = document.getElementById('cart-form');
            const cartCountElm = document.getElementById('cart-count');


            formElm.addEventListener('submit', (e) => {
                e.preventDefault();

                axios.post('{{ route('cart.store') }}', {
                    product_id: '{{ $product->id }}',
                    color_id: document.querySelector('select[name="color_id"]').value,
                    qty: document.querySelector('input[name="qty"]').value,
                }).then(({data}) => {
                    Toastify({
                        text: data.message,
                        duration: 2000,
                        style: {
                            background: "green",
                        },
                    }).showToast();
                    cartCountElm.innerHTML = data.count;
                }).catch((result) => {
                    Toastify({
                        text: result.response.data.message,
                        duration: 2000,
                        style: {
                            background: "red",
                        },
                    }).showToast();
                })
            })
        </script>
    </x-slot:js>

</x-layout.app>
