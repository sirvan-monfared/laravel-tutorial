<x-layout.app title="Home">

    <div class="row">
        @foreach($products as $product)
            <x-product-item :product="$product"></x-product-item>
        @endforeach

    </div>
    <div class="wsus__pagination mt_60">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <i class="far fa-arrow-left"></i>
                    </a>
                </li>
                <li class="page-item"><a class="page-link active" href="#">01</a></li>
                <li class="page-item"><a class="page-link" href="#">02</a></li>
                <li class="page-item"><a class="page-link" href="#">03</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <i class="far fa-arrow-right"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

</x-layout.app>
