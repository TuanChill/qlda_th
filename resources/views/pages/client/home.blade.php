@extends('layouts.client.main')
@section('content')
    @include('components.client.alert')
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            @foreach ($banners as $key => $banner)
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $key }}"
                    class="{{ $key == 0 ? 'active' : '' }}" aria-current="{{ $key == 0 ? 'true' : '' }}"
                    aria-label="Slide {{ $key + 1 }}"></button>
            @endforeach
        </div>
        <div class="carousel-inner">
            @foreach ($banners as $key => $banner)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <img src="{{ asset('images/' . $banner->image) }}" class="d-block w-100" alt="{{ $banner->title }}">
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Carousel cho sản phẩm giảm giá -->
    <div class="" style="background-color: #7995a3; color: white;">
        <div class="container">
            <h3 class="m-0 title py-3">SALE SẬP SÀN</h3>
            <div class="owl-carousel owl-theme">
                @foreach ($discountedProducts as $product)
                    <div class="item">
                        <div class="card bg-hove position-relative">
                            <a href="{{ route('productsClient.show', $product->id) }}">
                                <div class="product-img">
                                    <img src="{{ asset('images/' . $product->image_url) }}" class="card-img-top"
                                        alt="{{ $product->name }}">
                                </div>
                            </a>
                            <div class="card-body text-center">
                                <a href="{{ route('productsClient.show', $product->id) }}"
                                    class="text-decoration-none text-dark-custom product-name">
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
                                        <button class="btn btn-danger me-md-1">
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
    <style>.product-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
}


.product-link {
    text-decoration: none;
    color: inherit;
}

.product-name {
    font-weight: 600;
    color: #333;
    font-size: 1rem;
}

.product-price-wrapper {
    margin-top: 10px;
}

.price-sale del {
    font-size: 0.9rem;
    color: #999;
}

.product-btn button {
    font-size: 0.8rem;
    padding: 5px 10px;
}

.owl-carousel .item {
    margin: 15px;
}

.owl-carousel .owl-nav {
    position: absolute;
    top: -30px;
    right: 0;
}
</style>
    <!-- Carousel cho sản phẩm hot -->
    <div class="container my-4" style="font-family: Quicksand;">
    <div class="row" style="margin-top: 30px;margin-bottom: 20px;"> 
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" >
              <span style="   background: url(https://ha200318.github.io/BaeBoutique-06/images/tim.png) center no-repeat; display: flex; height: 50px; padding: 0 200px 0 0;  margin: auto;  text-align: left;"></span>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
              <p style="font-size: 30px; color: black; font-weight: bold; text-align: center;">SẢN PHẨM HOT</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
              <span style=" background: url(https://ha200318.github.io/BaeBoutique-06/images/tim.png) center no-repeat;  display: flex;  height: 50px; padding: 0 200px 0 0;  margin: auto; text-align: left;"></span>
            </div>
          </div>
          <div class="owl-carousel owl-theme">
    @foreach ($hotProducts as $product)
    <div class="item">
        <div class="card product-card border-0 shadow-sm">
            <a href="{{ route('productsClient.show', $product->id) }}" class="product-link">
                <div class="product-img position-relative overflow-hidden">
                    <img src="{{ asset('images/' . $product->image_url) }}" class="card-img-top" alt="{{ $product->name }}">
                    @if ($product->discount_percentage)
                    <div class="position-absolute top-0 start-0 bg-danger text-white p-1 rounded-end">
                        {{ $product->discount_percentage }}% Off
                    </div>
                    @endif
                </div>
            </a>
            <div class="card-body text-center">
                <a href="{{ route('productsClient.show', $product->id) }}" class="text-decoration-none text-dark product-name">
                    <h6 class="fw-bold">{{ $product->name }}</h6>
                </a>
                <div class="product-price-wrapper" >
                    <p class="card-text m-0 " style="color: #7995a3;">{{ $product->price_range }}₫</p>
                    @if ($product->old_price)
                    <div class="price-sale">
                        <del class="text-muted" style="color: #7995a3;">{{ number_format($product->old_price, 0, ',', '.') }}₫</del>
                    </div>
                    @endif
                </div>
                <div class="product-btn d-flex justify-content-center gap-2 mt-2" >
                    <a href="{{ route('productsClient.show', $product->id) }}" class="btn  btn-sm" style="background-color: #7995a3; color: white; border-radius: 15px;">
                        <i class="fa fa-shopping-cart me-1" ></i> Giỏ hàng
                    </a>
                    <a href="{{ route('favorites.add', $product->id) }}" class="btn btn-secondary btn-sm" style="border-radius: 15px;">
                        <i class="fas fa-heart me-1"></i> Yêu thích
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

    </div>
<br><br>
    <section class="Chinhsach" style="background-color: #BCD5E1; margin-bottom: 30px; font-family: Quicksand;">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="text-align: center;">
              <div class="tz-about-item">
                <div class="about-item-img hidden-xs">
                  <a class="" href="">
                    <img src="https://ha200318.github.io/BaeBoutique-06/images/freeship.png" alt="" style="width: 8vw; margin: 15px; cursor: pointer;" class="chinhsach">
                  </a>
                </div>
                <div class="tz-about-ds">
                  <h4><div style="color: #8295A1; font-weight: bold;">MIỄN PHÍ VẬN CHUYỂN </div></h4>
                  <p style="font-weight: bold;">Chúng tôi vận chuyển miễn phí với đơn hàng từ 499.000 đ</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="text-align: center;">
              <div class="tz-about-item">
                <div class="about-item-img hidden-xs">
                  <a class="" href="">
                    <span class="fs-1">
                      <img src="https://ha200318.github.io/BaeBoutique-06/images/gift.png" alt="" style="width: 8vw; margin: 15px; cursor: pointer;" class="chinhsach">
                    </span>
                  </a>
                </div>
                <div class="tz-about-ds">
                  <h4><div style="color:#8295A1; font-weight: bold;">KHUYẾN MẠI CUỐI NĂM</div></h4>
                  <p style="font-weight: bold;">Giảm giá tới 5% toàn bộ sản phẩm của cửa hàng trong tháng 12 này!!!</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="text-align: center;">
              <div class="tz-about-item">
                <div class="about-item-img hidden-xs">
                  <a class="img_3" href="">
                    <img src="https://ha200318.github.io/BaeBoutique-06/images/%C4%91%E1%BB%95i%20tr%E1%BA%A3.png" alt="" style="width: 8vw; margin: 15px; cursor: pointer;" class="chinhsach">
                  </a>
                </div>
                <div class="tz-about-ds">
                  <h4><div style="color:#8295A1; font-weight: bold;">HỖ TRỢ ĐỔI TRẢ</div></h4>
                  <p style="font-weight: bold;">Hỗ trợ miễn phí đổi trả sản phẩm nếu thỏa mãn chính sách đổi trả</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- Sản phẩm theo loại -->
    <div class="row" style="font-family: Quicksand;"> 
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
              <span style="   background: url(https://ha200318.github.io/BaeBoutique-06/images/tim.png) center no-repeat;
              display: flex;
              height: 50px;
              padding: 0 200px 0 0;
              margin: auto;
              text-align: left;"></span>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
              <p style="font-size: 30px; color: black; font-weight: bold; text-align: center;">DANH MỤC SẢN PHẨM NỔI BẬT</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
              <span style=" background: url(https://ha200318.github.io/BaeBoutique-06/images/tim.png) center no-repeat;
              display: flex;
              height: 50px;
              padding: 0 200px 0 0;
              margin: auto;
              text-align: left;"></span>
            </div>
          </div>
          <div class="container my-4" style="font-family: Quicksand;">
    <!-- Tab Navigation -->
    <ul class="nav nav-tabs" id="categoryTab" role="tablist">
        @foreach ($categories as $category)
        <li class="nav-item" role="presentation">
            <a class="nav-link @if ($loop->first) active @endif" id="tab-{{ $category->id }}" data-bs-toggle="tab"
                href="#category-{{ $category->id }}" role="tab" aria-controls="category-{{ $category->id }}"
                aria-selected="@if ($loop->first) true @else false @endif" >
                {{ $category->category_name }}
            </a>
        </li>
        @endforeach
    </ul>
<style>
    /* Tab khi không active */
.nav-tabs .nav-link {
    color: #7995a3; /* Màu chữ khi không active */
    background-color: transparent; /* Nền trong suốt */
    border-radius: 15px;
    border: 1px dashed #7995a3;
    margin: 10px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

/* Tab khi active */
.nav-tabs .nav-link.active {
    background-color: #7995a3; /* Màu nền khi active */
    color: white; /* Màu chữ khi active */
    border-radius: 15px;
    border: 1px solid #7995a3;
}

</style>
    <!-- Tab Content -->
    <div class="tab-content" id="categoryTabContent">
        @foreach ($categories as $category)
        <div class="tab-pane fade @if ($loop->first) show active @endif" id="category-{{ $category->id }}"
            role="tabpanel" aria-labelledby="tab-{{ $category->id }}">
            <!-- Carousel cho sản phẩm trong danh mục -->
            <div class="owl-carousel owl-theme my-3">
                @foreach ($categoryProducts[$category->category_name] as $product)
                <div class="item">
                    <div class="card border-0 shadow-sm product-card">
                        <a href="{{ route('productsClient.show', $product->id) }}" class="product-link">
                            <div class="product-img">
                                <img src="{{ asset('images/' . $product->image_url) }}" class="card-img-top"
                                    alt="{{ $product->name }}">
                            </div>
                        </a>
                        <div class="card-body text-center">
                            <a href="{{ route('productsClient.show', $product->id) }}"
                                class="text-decoration-none product-name">
                                <h6 class="fw-bold">{{ $product->name }}</h6>
                            </a>
                            <div class="product-price-wrapper" style="color: #7995a3; font-weight: 600;">
                                <p class="card-text m-0 " style="color: #7995a3; font-weight: 600;">{{ $product->price_range }}₫</p>
                                @if ($product->old_price)
                                <div class="price-sale">
                                    <del class="text-muted" style="color: #7995a3; font-weight: 600;">{{ number_format($product->old_price, 0, ',', '.') }}₫</del>
                                </div>
                                @endif
                            </div>
                            <div class="product-btn d-flex justify-content-center gap-2 mt-2">
                                <a href="{{ route('productsClient.show', $product->id) }}" class="btn btn-sm" style="color: white; font-weight: 600; background-color: #7995a3; border-radius: 15px;">
                                    <i class="fa fa-shopping-cart me-1"></i> Giỏ hàng
                                </a>
                                <a href="{{ route('favorites.add', $product->id) }}" class="btn btn-secondary btn-sm" style="border-radius: 15px;">
                                    <i class="fas fa-heart me-1"></i> Yêu thích
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- Nút xem tất cả -->
            <div class="text-center my-3">
                <a href="{{ route('productsClient.productByCategory', ['slug' => $category->slug]) }}"
                    class="btn " style="color: white; font-weight: 600; background-color: #7995a3; border-radius: 15px;">>Xem tất cả</a>
            </div>
        </div>
        @endforeach
    </div>
</div>


    <!-- Carousel cho tất cả sản phẩm -->
    <div class="container my-4" style="font-family: Quicksand;">
    <div class="row" style="margin-top: 20px;"> 
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <span style="   background: url(https://ha200318.github.io/BaeBoutique-06/images/tim.png) center no-repeat;
                display: flex;
                height: 50px;
                padding: 0 200px 0 0;
                margin: auto;
                text-align: left;"></span>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <p style="font-size: 30px; color: black; font-weight: bold; text-align: center;">BLOG NHÀ BAE</p>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <span style=" background: url(https://ha200318.github.io/BaeBoutique-06/images/tim.png) center no-repeat;
                display: flex;
                height: 50px;
                padding: 0 200px 0 0;
                margin: auto;
                text-align: left;"></span>
              </div>
            </div>   
            <style>/* General styling for the blog section */
.blog_wrap {
    padding: 0;
    list-style: none;
}

/* Blog item styling */
.item-blog {
    margin-bottom: 20px;
}


.item_blog_base:hover {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}



.content_blog h3 a {
    font-size: 18px;
    color: #7995a3;
    font-weight: bold;
    text-decoration: none;
    transition: color 0.3s ease;
}

.content_blog h3 a:hover {
    color: #576d7b; /* Slightly darker color on hover */
}

/* Date styling */
.date {
    color: #999;
    font-size: 14px;
}

/* Link to view more */
.date a {
    color: #7995a3;
    font-size: 14px;
    text-decoration: none;
}

.date a:hover {
    text-decoration: underline;
}
/* Thumbnail image size adjustment */
.item_blog_base .thumb img {
    width: 50%; /* Ensures the image is responsive */
    max-width: 150px; /* Limit the width of the image */
    height: auto; /* Maintain the aspect ratio */
    border-radius: 15px; /* Keep the rounded corners */
}</style>
            <div class="container-fluid" style="font-family: Quicksand;">
              <div class="row">
                <a class="col-lg-6 d-none d-lg-block" href="chuyennhabae.html" title="Chuyện nhà Bae">
                  <img src="https://ha200318.github.io/BaeBoutique-06/images/CHUY%E1%BB%86N%20NH%C3%80.png" alt="" style="max-width: 100%; border-radius: 15px;">
                </a>
                <div class="col-lg-6 col-12 col-md-12">
                  <ul class="blog_wrap">
                    <li class="item-blog">
                      <article class="item_blog_base d-flex flex-column flex-md-row align-items-md-center">
                          <img src="https://ha200318.github.io/BaeBoutique-06/images/blog1.png" style="max-width: 100%;border-radius: 15px;

    width: 100%;
    max-width: 150px; 
    border-radius: 15px;  margin: auto;">                        
                       
                        <div class="content_blog">
                          <h3><a href="http://127.0.0.1:8000/tin-tuc/chi-tiet/11" title="5 bí quyết chăm sóc da cho bé yêu mùa khô" class="a-title" style="font-size: 0.75em; color: #7995a3; font-weight: bold;">5 bí quyết chăm sóc da cho bé yêu mùa khô</a></h3>
                          <div class="date">
                            <span>15/09/2024</span>
                            <br>
                            <a href="http://127.0.0.1:8000/tin-tuc/chi-tiet/11" title="Xem thêm">Xem thêm</a>
                          </div>
                        </div>
                      </article>
                    </li>
                    <li class="item-blog">
                      <article class="item_blog_base d-flex flex-column flex-md-row align-items-md-center">
                          <img src="https://ha200318.github.io/BaeBoutique-06/images/blog2.png" style="max-width: 100%;border-radius: 15px;

width: 100%;
max-width: 150px; 
border-radius: 15px;  margin: auto;">
                        <div class="content_blog">
                          <h3><a href="http://127.0.0.1:8000/tin-tuc/chi-tiet/12" title="8 sai lầm thường gặp khi mua quần áo cho bé" class="a-title" style="font-size: 20px; color: #7995a3; font-weight: bold;">8 sai lầm thường gặp khi mua quần áo cho bé</a></h3>
                          <div class="date">
                            <span>15/09/2024</span>
                            <br>
                            <a href="http://127.0.0.1:8000/tin-tuc/chi-tiet/12" title="Xem thêm">Xem thêm</a>
                          </div>
                        </div>
                      </article>
                    </li>
                    <li class="item-blog">
                      <article class="item_blog_base d-flex flex-column flex-md-row align-items-md-center">
                          <img src="https://ha200318.github.io/BaeBoutique-06/images/blog2.png" style="max-width: 100%;border-radius: 15px;

width: 100%;
max-width: 150px; 
border-radius: 15px;  margin: auto;">
                        <div class="content_blog">
                          <h3><a href="http://127.0.0.1:8000/tin-tuc/chi-tiet/13" title="8 sai lầm thường gặp khi mua quần áo cho bé" class="a-title" style="font-size: 20px; color: #7995a3; font-weight: bold;">Mommy brain - Não mẹ có "rơi" khi con ra đời?</a></h3>
                          <div class="date">
                            <span>15/09/2024</span>
                            <br>
                            <a href="http://127.0.0.1:8000/tin-tuc/chi-tiet/13" title="Xem thêm">Xem thêm</a>
                          </div>
                        </div>
                      </article>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
        <!-- <div class="owl-carousel owl-theme">
            @foreach ($allProducts as $product)
                <div class="item">
                    <div class="card">
                        <a href="{{ route('productsClient.show', $product->id) }}">
                            <div class="product-img">
                                <img src="{{ asset('images/' . $product->image_url) }}" class="card-img-top"
                                    alt="{{ $product->name }}">
                            </div>
                        </a>
                        <div class="card-body text-center">
                            <a href="{{ route('productsClient.show', $product->id) }}"
                                class="text-decoration-none text-dark-custom product-name">
                                {{ $product->name }}
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
                                    <button class="btn btn-danger me-md-1">
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
        </div> -->
    </div>
    
@endsection
