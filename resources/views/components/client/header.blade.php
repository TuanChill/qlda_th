<header>
    <div id="header" style="border-bottom: #7A95A2;">
        <div class="container">
            <div class="row align-items-center">
                <!-- LOGO -->
                <div class="col-xl-3 col-lg-3 col-md-12 p-0">
                    <a href="/" class="logo text-decoration-none text-light">
                        <!-- <h3 class="ms-1 font-weight-bold text-white" class="text-white">Bae Boutique</span><span
                            style="color: #D10024;">SHOP</h3> -->
                        <img src="images\logo_baeBoutique.png" alt="Logo_BaeBoutque">
                    </a>
                </div>
                <!-- /LOGO -->
                <!-- SEARCH BAR -->
                <div class="col-xl-6 col-lg-6 col-md-6" style=" font-family: Quicksand">
                    <div class="header-search">
                        <form action="{{ route('productsClient.index') }}" method="GET">
                            <input class="input" name="search" style=" padding: 10px; border-radius: 20px 0 0 20px;"
                                placeholder="Ba mẹ muốn tìm gì?" name="search">
                            <button class="search-btn" style="background-color: #7A95A2;border-radius: 0px 20px 20px 0px; ">
                                Tìm kiếm</button>
                        </form>
                    </div>
                </div>
                <!-- /SEARCH BAR -->
                <!-- Nút -->
                <div class="col-xl-3 col-lg-3 col-md-6 " style="font-family: Quicksand;">
                    <div class="header-ctn d-flex   align-items-center p-0">
                        <!-- Yêu thích -->
                        @include('components.client.favorite_header')
                        <!-- /Yêu thích -->
                        <!-- Giỏ hàng -->
                        @include('components.client.cart_header')
                        <!-- /Giỏ hàng -->
                        <!-- Dropdown user -->
                        <div class="dropdown">
                            <a href="#" class="text-decoration-none " id="dropdownUser2" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                @if (Auth::check())
                                @if (!empty(Auth::user()->image))
                                <img src="{{ asset('images/' . Auth::user()->image) }}" alt="user-image"
                                    class="rounded-circle w-50">
                                @else
                                <img src="{{ asset('images/no_image.jpg') }}" alt="default-image"
                                    class="rounded-circle w-50">
                                @endif
                                @else
                                <img src="{{ asset('images/no_image.jpg') }}" alt="default-image"
                                    class="rounded-circle w-50">
                                @endif
                            </a>

                            <ul class="dropdown-menu dropdown-menu-end text-small text-user"
                                aria-labelledby="dropdownUser2"  style="font-family: quicksand;">
                                @if (Auth::check())
                                <li><a class="dropdown-item" href="{{ route('account.index') }}"  style="font-family: quicksand; font-weight: 600;">Tài khoản</a></li>
                                <li><a class="dropdown-item" href="{{ route('orders.my') }}"  style="font-family: quicksand;font-weight: 600;">Đơn hàng của tôi</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}"  style="font-family: quicksand;font-weight: 600;">Đăng xuất</a></li>
                                @else
                                <li><a class="dropdown-item" href="{{ route('login') }}" style="font-family: quicksand;font-weight: 600;">Đăng nhập</a></li>
                                <li><a class="dropdown-item" href="{{ route('register') }}" style="font-family: quicksand;font-weight: 600;">Đăng ký</a></li>
                                @endif
                            </ul>
                        </div>
                        <!-- /Dropdown user -->
                    </div>
                </div>
                <!-- /Nút -->
            </div>
        </div>
    </div>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

</header>