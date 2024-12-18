@extends ('layouts.client.main')
@section('content')
@include('components.client.alert')
<div class="container" style="font-family: Quicksand;">
    <br>
    <div class="row align-items-center">
        <br><br>
        <div class="col-md-2 text-start">
            <h3 class="title_" style="color: #7995a3;">Blog</h3>
        </div>
        <div class="col-md-10 text-end">
            <div class="d-flex justify-content-end" id="category-list" style="color: black; font-weight: bold;">
                <div class="title">
                    <a href="{{ route('blog.index') }}" class="nav-link category-link">
                        <h5 style="color: black; font-weight: bold;">Tất cả</h5>
                    </a>
                </div>
                @foreach ($categories as $category)
                <div class="ms-3 title">
                    <a href="{{ route('blog.by.category', ['slug' => $category->slug]) }}"
                        class="nav-link category-link text-decoration-none text-dark-custom">
                        <h5 style="color: black; font-weight: bold;">{{ $category->name }}</h5>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <br>
    <style>
        .blog-sb-content {
            position: relative;
            width: 100%;
            height: auto;
        }

        .blog_img img {
            width: 100%;
            height: auto;
        }

        .blog_des {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            padding: 20px;
            background: rgba(0, 0, 0, 0.5);
            /* Semi-transparent background */
            border-radius: 10px;
        }

        .blog_des h3,
        .blog_des p,
        .blog_des span {
            color: #fff;
            margin-bottom: 15px;
        }

        .blog_des .btn1 {
            font-weight: bold;
        }

        @media (max-width: 768px) {
            .blog_des {
                padding: 10px;
            }

            .blog_img img {
                height: auto;
            }
        }
    </style>
    <section style=" margin-bottom: 30px;">
        <div class="blog-sb-content clearfix position-relative">
            <div class="blog_img small--hide">
                <img src="//theme.hstatic.net/200000165197/1001274456/14/blog_new_all.png?v=86" alt="Cùng mẹ chăm con khoa học" class="img-fluid w-100">
            </div>
            <div class="blog_des position-absolute text-white">
                <span>Cùng mẹ chăm con khoa học</span>
                <h3 class="title">
                    3 CỘT MỐC VÀNG PHÁT TRIỂN NÃO BỘ BÉ
                </h3>
                <p>
                    Để có thể định hướng và cùng bé phát triển tốt nhất, bố mẹ hãy cùng BAE khám phá 3 giai đoạn quan trọng nhất trong việc phát triển não bộ của bé ngay từ khi sơ sinh nhé.
                </p>
            </div>
        </div>

    </section>

    <!-- /section title -->
    <div class="row mb-3">
        <!-- Featured Post Section (Carousel) -->
        <div class="col-md-6 ps-0 col-12">
            <h4 class="title" style="border-left: 2px solid black; padding-left:10px ;">Bài viết nổi bật</h4>
            <div id="postCarousel" class="carousel slide mt-3" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($posts as $key => $post)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <a href="{{ route('blog.show', $post->id) }}">
                            <img width="100%" class="card"
                                src="{{ $post->image ? asset('images/' . $post->image) : asset('images/no_images.jpg') }}"
                                alt="" style="border-radius: 15px;">
                        </a>
                        <div class="">
                            <div class="btn" style="background-color: #fff; color: black; font-weight: 600; border: none;">
                                {{ $post->category->name }}
                            </div>
                            <a href="{{ route('blog.show', $post->id) }}">
                                <h5 class="title title-post" style=" color: #7995a3; font-weight: 600; ">{{ $post->title }}</h5>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#postCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#postCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <!-- Latest Posts Section -->
        <div class="col-md-6 ps-0 d-none d-md-block">
            <h4 class="title" style="border-left: 2px solid black; padding-left:10px ;">Bài viết mới nhất</h4>
            @if ($postnews->count() > 0)
            @foreach ($postnews as $postnew)
            <div class="row mt-3">
                <div class="col-4 p-0">
                    <a href="{{ route('blog.show', $postnew->id) }}">
                        <img width="100%" class="card" style="border-radius: 15px;"
                            src="{{ $postnew->image ? asset('images/' . $postnew->image) : asset('images/no_images.jpg') }}"
                            alt="">
                    </a>
                </div>
                <div class="col-8">
                    <div class="btn" style="background-color: #fff; color: black; font-weight: 600; border: none;">
                        {{ $postnew->category->name }}
                    </div>
                    <a href="{{ route('blog.show', $postnew->id) }}">
                        <h9 class="title title-post" style="color: #7995a3; font-weight: 600;">{{ $postnew->title }}</h9>
                    </a>
                    <div class="author d-flex align-items-center">
                        <div class="name">
                            <div class="d-flex">
                                <span style="color:grey; font-size: 13px; font-weight: 600;">{{ $postnew->created_at->format('d/m/Y') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <p class="text-center mt-3">Không có bài viết nào phù hợp với loại bài viết này.</p>
            @endif
        </div>
    </div>

    <!-- All Posts Section -->
    <h4 class="title" style="border-left: 2px solid black; padding-left:10px ; margin-top: 30px; font-family: quicksand;">Bài viết đặc sắc</h4>

    <div class="row mt-3">
        <div class="col-12">
            <div class="row g-3 w-100">
                @if ($posts->count() > 0)
                @foreach ($posts as $post)
                <div class="col-xl-4 col-md-6 col-sm-6 col-6">
                    <div class="blog">
                        <div class="img">
                            <a href="{{ route('blog.show', $post->id) }}">
                                <img width="100%" class="card" style="border-radius: 15px;"
                                    src="{{ $post->image ? asset('images/' . $post->image) : asset('images/no_images.jpg') }}"
                                    alt="">
                            </a>
                        </div>
                        <div class="blog-info mt-2">
                            <div class="btn" style="background-color: #fff; color: black; font-weight: 600; border: none;">
                                {{ $post->category->name }}
                            </div>
                            <a href="{{ route('blog.show', $post->id) }}">
                                <h8 class="title title-post" style="color: #7995a3; font-weight: 600;">{{ $post->title }}</h8>
                            </a>
                            <div class="author d-flex align-items-center">
                                <div class="name">
                                    <div class="d-flex" style="color: black; font-weight: 600; font-size: 13px;">
                                        <span>{{ $post->created_at->format('d/m/Y') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <p class="text-center mt-3">Không có bài viết nào phù hợp với loại bài viết này.</p>
                @endif
            </div>
        </div>
    </div>

</div>
@endsection