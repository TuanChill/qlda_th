@extends('layouts.client.main')

@section('content')
<div class="container mt-4" style="font-family: Quicksand; ">
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
                <p style="font-size: 30px; color: black; font-weight: bold; text-align: center;">ĐỔI MẬT KHẨU</p>
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
    <style>.form-control {
    border-radius: 10px; /* Rounded corners for input fields */
    padding: 10px;
    font-size: 1em;
    border: 1px solid #ced4da;
}

.form-control:focus {
    border-color: #7995a3; /* Change border color on focus */
    box-shadow: 0 0 5px rgba(121, 149, 163, 0.5); /* Soft shadow on focus */
}

.form-label {
    font-weight: bold; /* Make labels bold for better visibility */
    color: #555; /* Slightly darker label color */
}

.btn {
    transition: background-color 0.3s, transform 0.2s; /* Smooth transition for hover effect */
    border-radius: 10px; /* Button with rounded corners */
}

.btn:hover {
    background-color: #6a8d9c; /* Darker color on hover */
    transform: scale(1.05); /* Slightly larger on hover */
}

.text-danger {
    margin-top: 5px; /* Space above error messages */
    font-size: 0.9em; /* Smaller font size for error messages */
}
</style>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('account.change_password.update') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="current_password" class="form-label">Mật khẩu hiện tại</label>
                            <input type="password" class="form-control" id="current_password" name="current_password">
                            @error('current_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="new_password" class="form-label">Mật khẩu mới</label>
                            <input type="password" class="form-control" id="new_password" name="new_password">
                            @error('new_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="new_password_confirmation" class="form-label">Xác nhận mật khẩu mới</label>
                            <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation">
                            @error('new_password_confirmation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn text-center" style="background-color: #7995a3; color: white; font-weight: 600;;">Đổi mật khẩu</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
