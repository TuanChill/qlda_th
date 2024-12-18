@extends ('layouts.client.main')
@section('content')
@include('components.client.alert')
<div class="mt-5" ng-controller="RegisterController">
    <section class="login_box_area section_gap ">
        <div class="container " style=" margin-top: 20px;">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login_box_img">
                        <div class="hover">
                            <h4 style="font-weight: 600;">Đã có tài khoản</h4>
                            <img src="images\BannerLoginBae.png" alt="" style="width: 600px;height: 300px;">
                            <br>
                            <p>Đăng nhập ngay để nhận lấy những ưu đãi lớn trong dịp Noel này!!!</p>
                            <a class="btn-danger btn" href="{{route('login')}}" style="background-color: #7A95A2; border: #7A95A2;border-radius: 12px;font-weight: 600;">Đăng nhập</a>
                        </div>
                    </div>
                </div>
                <!-- Đăng ký -->
                <div class="col-lg-6 p-4 shadow-sm" style="background-color: #f9f9f9; border-radius: 10px;">
                    <div class="login_form_inner">
                        <h3 style="font-weight: 600;">Tạo tài khoản </h3>
                        <form action="{{route('register.store')}}" method="post">
                            {!! csrf_field() !!}
                            <div class="mb-3">
                                <label for="name" class="form-label">Họ tên của bạn:</label>
                                <input type="text" class="form-control border-0 shadow-sm" id="name" name="name" placeholder="Tên">
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Địa chỉ Email của bạn:</label>
                                <input type="text" class="form-control border-0 shadow-sm" id="email" name="email" placeholder="Email">
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Số điện thoại của bạn:</label>
                                <input type="text" class="form-control border-0 shadow-sm" id="phone" name="phone" placeholder="Số điện thoại">
                                @error('phone')
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

                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Nhập lại mật khẩu của bạn: </label>
                                <input type="password" class="form-control border-0 shadow-sm" id="password_confirmation" name="password_confirmation" placeholder="Nhập lại mật khẩu">
                                @error('password_confirmation')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="d-grid gap-2 mb-3">
                                <button type="submit" name="submit" class="btn-danger btn btn-block shadow" style="background-color: #7A95A2; border: #7A95A2; border-radius: 12px;font-weight: 600;">Đăng ký</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
@endsection