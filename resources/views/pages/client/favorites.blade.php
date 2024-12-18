@extends('layouts.client.main')
@section('content')
<div class="container my-4" style="font-family: QUICKSAND;">
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
                <p style="font-size: 30px; color: black; font-weight: bold; text-align: center;">DANH SÁCH SẢN PHẨM YÊU THÍCH</p>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <span style=" background: url(https://ha200318.github.io/BaeBoutique-06/images/tim.png) center no-repeat;
                display: flex;
                height: 50px;
                padding: 0 200px 0 0;
                margin: auto;
                text-align: left;"></span>
              </div>
            </div>    <ul class="list-group">
        @foreach($favorites as $favorite)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <img src="{{ asset('images/' . $favorite->product->image_url) }}" class="img-thumbnail" alt="{{ $favorite->product->name }}" style="width: 100px; height: 100px;">
                <div class="ms-3">
                    <h5>{{ $favorite->product->name }}</h5>
                </div>
            </div>
            <button class="btn  remove-favorite" data-id="{{ $favorite->product_id }}"  style="background-color: #7a95a2; color: WHITE;font-weight: 600;">Xóa</button>
        </li>
        @endforeach
    </ul>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var removeButtons = document.querySelectorAll('.remove-favorite');

        removeButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                var productId = this.getAttribute('data-id');
                var self = this;

                fetch(`/favorites/${productId}`, {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert(data.success);
                        self.closest('li').remove();
                    } else {
                        alert(data.error);
                    }
                });
            });
        });
    });
</script>
@endsection
