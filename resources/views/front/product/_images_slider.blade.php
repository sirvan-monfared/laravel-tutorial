<div class="wsus__product_details_slider_area">
    @if($product->images->count())
        <div class="row slider-forFive">
            @foreach($product->images as $image)
                <div class="col-xl-12">
                    <div class="wsus__product_details_slide_show_img">
                        <img src="{{ $image->url() }}" alt="product"
                             class="img-fluid w-100">
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="row slider-forFive">
            <div class="col-xl-12">
                <div class="wsus__product_details_slide_show_img">
                    <img src="{{ $product->featuredImage() }}" alt="product"
                         class="img-fluid w-100">
                </div>
            </div>
        </div>
    @endif
    <div class="wsus__product_details_slider">
        <div class="row slider-navFive">
            @foreach($product->images as $image)
                <div class="col-xl-2">
                    <div class="wsus__product_details_slider_img">
                        <img src="{{ $image->url() }}" alt="product" class="img-fluid w-100">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
