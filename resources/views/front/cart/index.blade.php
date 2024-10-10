<x-layout.app title="Cart Items">



    @if($cart->count() > 0)
        <div class="row justify-content-center">

            <div class="col-xl-12">
                <x-flash></x-flash>
            </div>

            <div class="col-xl-10 wow fadeInUp">
                <div class="wsus__cart_list">
                    <div class="table-responsive">
                        <table>
                            <thead>
                            <tr>
                                <th class="pro_img">Item</th>

                                <th class="pro_name">Name</th>

                                <th class="pro_select">Quantity</th>

                                <th class="pro_tk">Price</th>

                                <th class="pro_icon">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($cart->items() as $item)
                                <tr>
                                    <td class="pro_img">
                                        <img src="{{ $item->image }}" alt="product" class="img-fluid w-100">
                                    </td>

                                    <td class="pro_name">
                                        <a href="#">{{ $item->title }}</a>
                                    </td>

                                    <td class="pro_select">
                                        <div class="quentity_btn">
                                            {{--                                        <button class="btn btn-danger"><i class="fal fa-minus"></i></button>--}}
                                            {{--                                        <input type="text" placeholder="1">--}}
                                            {{--                                        <button class="btn btn-success"><i class="fal fa-plus"></i></button>--}}
                                            <input type="number" name="qty" value="{{ $item->qty }}">
                                        </div>
                                    </td>

                                    <td class="pro_tk">
                                        <h6>${{ number_format($item->price) }}</h6>
                                    </td>

                                    <td class="pro_icon">
                                        <form method="POST" action="{{ route('cart.remove', $item->id) }}">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn"><i class="fal fa-times"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="wsus__cart_list_bottom">
                    <div class="row justify-content-between">
                        <div class="col-md-6 col-xl-5 ms-auto">
                            <div class="wsus__cart_list_pricing">
                                <h5>Total: <span>${{ number_format($cart->total()) }}</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-xl-10">
                <ul class="wsus__cart_list_bottom_btn">
                    <li><a href="products.html" class="common_btn cont_shop">Continue To Shipping</a>
                    </li>
                    <li><a href="checkout.html" class="common_btn common_btn_2">Checkout</a></li>
                </ul>
            </div>
        </div>
    @else
        <h2>Your Cart is Empty</h2>
    @endif
</x-layout.app>
