<x-layout.app>
    <div class="row">

        <div class="col-4 text-center">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-cart-plus"></i>
                </div>
                <div class="card-body">
                    <a href="{{ route('dashboard.product.index') }}">Products</a>
                </div>
            </div>
        </div>
        <div class="col-4 text-center">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-sitemap"></i>
                </div>
                <div class="card-body">
                    <a href="{{ route('dashboard.category.index') }}">Categories</a>
                </div>
            </div>
        </div>
        <div class="col-4 text-center">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-paint-brush"></i>
                </div>
                <div class="card-body">
                    <a href="{{ route('dashboard.color.index') }}">Colors</a>
                </div>
            </div>
        </div>

    </div>


</x-layout.app>
