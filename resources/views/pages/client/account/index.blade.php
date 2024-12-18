@extends('layouts.client.main')

@section('content')
    <div class="container mt-4" style="font-family: Quicksand;">
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
                <p style="font-size: 30px; color: black; font-weight: bold; text-align: center;">TÀI KHOẢN CỦA TÔI</p>
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
        @include('components.client.alert')
        <div class="row">
            <div class="col-md-3">
                <div class="mb-3 ">
                    <img id="previewImage" class=" w-100"
                        src="{{ $user->image ? asset('images/' . $user->image) : asset('images/no_images.jpg') }}"
                        alt="Preview">
                </div>
                <ul class="list-group" style="background-color: #7995a3;">
                    <li class="list-group-item " style="background-color: #7995a3; color: white;"><a class="nav-link" href="{{ route('orders.my') }}" style="background-color: #7995a3; color: white; font-weight: 600;">Lịch sử đơn hàng</a>
                    </li>
                    <li class="list-group-item " style="background-color: #7995a3; color: white;"><a class="nav-link" href="{{ route('account.change_password') }}" style="background-color: #7995a3; color: white;font-weight: 600;">Đổi mật
                            khẩu</a></li>
                </ul>
            </div>
            <style>



.form-label {
    font-weight: bold; /* Make labels bold for better visibility */
}

.btn {
    transition: background-color 0.3s, transform 0.2s; /* Smooth transition for hover effect */
}



.text-danger {
    margin-top: 5px; /* Space above error messages */
    font-size: 0.9em; /* Slightly smaller font size for error messages */
}
</style>
            <div class="col-md-9">
    <div class="card">
        <div class="card-header" style="background-color: #7995a3; color: white; font-weight: 700;">
            Thông tin cá nhân
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('account.update', $user->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" disabled value="{{ $user->email }}">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Họ và tên</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Số điện thoại</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}">
                    @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Ảnh</label>
                    <input type="file" class="form-control" id="image" name="image" onchange="previewImage(event)">
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn" style="background-color: #7995a3; color: white; font-weight: 600; border-radius: 15px;">Lưu thay đổi</button>
            </form>
        </div>
    </div>
</div>

        </div>
    </div>
    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('previewImage');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
