<nav class="navbar navbar-expand-md ">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px; color: #646464 ;  font-weight: 800; font-family: Quicksand;">
                <li class="nav-item ">
                    <a class="nav-link ps-0" href="{{ route('home.index') }}">Trang chủ</a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('about.index') }}">Chuyện nhà Bae</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="{{ route('productsClient.index') }}">Sản Phẩm</a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('contact.index') }}">Liên Hệ</a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('blog.index') }}">Blog</a>
                </li>

            </ul>
        </div>
    </div>
</nav>