@extends ('layouts.client.main')
@section('content')
@include('components.client.alert')
<div class="mt-5" ng-controller="LoginController">
    <section class="login_box_area section_gap ">
        <div class="container " style=" margin-top: 20px; font-family: Quicksand;">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login_box_img">
                        <img src="" alt="">
                        <div class="hover">
                            <h4 style="font-weight: 600;">Chưa có tài khoản?</h4>
                            <p>Đăng ký ngay để nhận nhiều ưu đãi bất ngờ</p>
                            <a class="btn-danger btn " style="background-color: #7A95A2; border: #7A95A2; border-radius: 12px;font-weight: 600;" href="{{route('register')}}">Đăng ký tài khoản</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-4 shadow-sm" style="background-color: #f9f9f9; border-radius: 10px;">
                    <div class="">
                        <h3 style="font-weight: 600;">Đăng nhập</h3>
                        <form action="{{route('login.store')}}" method="post">
                            {!! csrf_field() !!}
                            <div class="mb-3">
                                <label for="email" class="form-label">Tên đăng nhập của bạn:</label>
                                <input type="text" class="form-control border-0 shadow-sm" id="email" name="email" placeholder="Email">
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Mật khẩu của bạn: </label>

                                <input type="password" class="form-control border-0 shadow-sm" id="password" name="password" placeholder="Mật khẩu">
                                @error('password')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="remember" name="remember">
                                <label class="form-check-label" for="remember" style="font-weight: 600;">Nhớ tài khoản</label>
                            </div>
                            <div class="text-center mb-3 d-grid gap-2">
                                <button type="submit" name="submit" class="btn-danger btn " style="background-color: #7A95A2; border: #7A95A2; border-radius: 12px;font-weight: 600;">Đăng nhập</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection