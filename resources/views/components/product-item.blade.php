@props(['product'])

<div class="col-xxl-3 col-md-6 col-lg-4">
    <div class="wsus__product_item">
        <div class="img">
            <img src="{{ asset($product->image()) }}" alt="equipment" class="img-fluid w-100">
            <a href="#" class="add_cart">
                                <span><img src="{{ asset('assets/images/cart_icon_black.svg') }}" alt="cart"
                                           class="img-fluid w-100"></span>
                Add To Cart
            </a>
            <ul>
                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                <li><a href="#"><i class="far fa-random"></i></a></li>
            </ul>
        </div>
        <span class="new">new</span>
        <div class="text">
            <a href="{{ route('front.product.show', $product->slug) }}"
               class="title">{{ $product->title }}</a>
            <p>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </p>
            <div class="d-flex justify-content-between align-items-center">
                <h4>${{ number_format($product->price) }}</h4>
                <span><a href="{{ $product->category->viewLink() }}">{{ $product->category->title }}</a></span>
            </div>
        </div>
    </div>
</div>
