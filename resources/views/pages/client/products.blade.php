@extends ('layouts.client.main')
@section('content')
@include('components.client.alert')
<br> <br>
<div class="container" style="font-family: Quicksand;">
    <div class="row">
        <!-- Danh mục sản phẩm cho desktop -->
        <div class="col-md-3 col-sm-6 d-none d-md-block border-end">
            <aside>
                <div class="card categories-vertical">
                    <ul class="list-group btn-danger-custom">
                        <div class="card-header fw-bold text-uppercase" style="background-color: #7995a3;">
                            <i class="fas fa-list-ul me-2"></i>Danh mục
                        </div>
                        <a href="{{ route('productsClient.productByCategory') }}"
                            class="list-group-item list-group-item-action">Tất Cả</a>
                        @foreach ($categories as $category)
                        <a href="{{ route('productsClient.productByCategory', ['slug' => $category->slug]) }}"
                            class="list-group-item list-group-item-action">{{ $category->category_name }}</a>
                        @endforeach
                    </ul>
                </div>
            </aside>
            <aside class="top-products">
                <p class="my-3 fw-bold text-uppercase">Top sản phẩm yêu thích</p>
                @foreach ($mostViewedProducts as $product)
                <div class="product-widget mb-3">
                    <div class="row">
                        <div class="col-4 col-md-4">
                            <a href="{{ route('productsClient.show', $product->id) }}">
                                <div class="">
                                    <img src="{{ asset('images/' . $product->image_url) }}"
                                        class="card-img-top img-fluid" alt="{{ $product->name }}">
                                </div>
                            </a>
                        </div>
                        <div class="col-8 col-md-8">
                            <a href="{{ route('productsClient.show', $product->id) }}"
                                class="text-decoration-none text-custom product-widget-name" style=" font-weight: 600; color: black; margin-bottom: 5px;">{{ $product->name }}</a>
                            <p style="font-size: 14px; font-weight: 600; color: #7995a3;" class="card-text m-0">{{ $product->price_range }}</p>
                            @if ($product->old_price)
                            <del style="font-size: 12px; font-weight: 600; color: #7995a3;">{{ number_format($product->old_price, 0, ',', '.') }}
                                VND</del>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </aside>
        </div>

        <!-- Danh mục sản phẩm cho điện thoại -->
        <div class="col-12 d-md-none">
            <div class="filter-cate">
                <div class="ft-cate d-flex overflow-auto">
                    <a href="{{ route('productsClient.productByCategory') }}" data-id="0" class="active" style="background-color: #7995a3;">
                        Tất cả
                    </a>
                    @foreach ($categories as $category)
                    <a href="{{ route('productsClient.productByCategory', ['slug' => $category->slug]) }}"
                        data-id="{{ $category->id }}" class="">
                        {{ $category->category_name }}
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
<style>/* Thẻ sản phẩm với hiệu ứng */
.card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border-radius: 10px;
}

.card:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

/* Ảnh sản phẩm */


.card:hover .product-img img {
    transform: scale(1.1);
}

/* Tên sản phẩm */
.product-name h5 {
    font-size: 1.1rem;
    font-weight: 600;
    text-transform: capitalize;
    color: #333;
}

.product-name:hover h5 {
    color: #007bff;
}

/* Giá sản phẩm */
.product-price-wrapper p {
    font-size: 1.2rem;
}

.product-price-wrapper del {
    font-size: 1rem;
    color: #999;
}

/* Nút giỏ hàng và yêu thích */
.product-btn .btn {
    border-radius: 50px;
    padding: 0.5rem 1.5rem;
    font-size: 0.9rem;
}

.product-btn .btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

.product-btn .btn-outline-secondary {
    border-color: #6c757d;
}

.product-btn .btn-outline-secondary:hover {
    background-color: #6c757d;
    color: white;
}
</style>
<div class="col-md-9 col-sm-12 ps-0">
            <div class="row g-3 mb-3">
                @foreach ($products as $product)
                <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                    <div class="card rounded-0 bg-hove">
                        <a href="{{ route('productsClient.show', $product->id) }}">
                            <div class="product-img">
                                <img src="{{ asset('images/' . $product->image_url) }}"
                                    class="card-img-top img-fluid" alt="{{ $product->name }}">
                            </div>
                        </a>
                        <div class="card-body text-center">
                            <a href="{{ route('productsClient.show', $product->id) }}"
                                class="text-decoration-none text-custom product-name" style="color: black; font-weight: 600;">
                                {{ $product->name }}
                                @if ($product->discount_percentage)
                                <!-- Biểu tượng "Sale" -->
                                <div
                                    class="position-absolute top-0 end-0 bg-danger text-white text-center p-2 rounded-start">
                                    {{ $product->discount_percentage }}%
                                </div>
                                @endif
                            </a>
                            <div class="product-price-wrapper">
                                <p class="card-text m-0">{{ $product->price_range }}</p>
                                @if ($product->old_price)
                                <div class="price-sale">
                                    <del class="product-old-price">{{ number_format($product->old_price, 0, ',', '.') }}
                                        ₫</del>
                                </div>
                                @else
                                <div class="price-sale empty-sale"></div>
                                @endif
                            </div>
                            <div
                                class="product-btn d-flex flex-column flex-sm-row justify-content-center align-items-center">
                                <a href="{{ route('productsClient.show', $product->id) }}"
                                    class="text-decoration-none mb-2 mb-sm-0">
                                    <button class="btn me-md-1" style="background-color: #7A95A2; color: white;">
                                        <i class="fa fa-shopping-cart me-1"></i>
                                        <span class="small">Giỏ hàng</span>
                                    </button>
                                </a>

                                <a href="{{ route('favorites.add', $product->id) }}" class="text-decoration-none">
                                    <button class="btn btn-secondary">
                                        <i class="fas fa-heart me-1 ms-md-1"></i>
                                        <span class="small">Yêu thích</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection