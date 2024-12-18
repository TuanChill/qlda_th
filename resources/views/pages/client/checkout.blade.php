@extends ('layouts.client.main')
@section('content')
    @include('components.client.alert')
    <div class="container mt-4" style="font-family: quicksand;">
        <form id="checkoutForm" method="POST" action="{{ route('checkout.process') }}">
            @csrf
            <div class="row">
            <div class="row" style="margin-top: 20px; margin-bottom: 20px;"> 
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <span style="   background: url(https://ha200318.github.io/BaeBoutique-06/images/tim.png) center no-repeat;
                display: flex;
                height: 50px;
                padding: 0 200px 0 0;
                margin: auto;
                text-align: left;"></span>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <p style="font-size: 30px; color: black; font-weight: bold; text-align: center;">THANH TOÁN ĐƠN HÀNG</p>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <span style=" background: url(https://ha200318.github.io/BaeBoutique-06/images/tim.png) center no-repeat;
                display: flex;
                height: 50px;
                padding: 0 200px 0 0;
                margin: auto;
                text-align: left;"></span>
              </div>
            </div>                <div class="col-md-7">
                    <div class="card" style="margin: 15px;">
                        <style>/* General form styling */

/* Label styling */
.form-label {
    font-weight: bold;
    color: #333;
}

/* Input and select styling */
.form-control {
    border: 1px solid #ced4da;
    border-radius: 4px;
    padding: 10px;
    transition: border-color 0.2s;
}

.form-control:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.25);
}

/* Invalid feedback styling */
.invalid-feedback {
    color: #d9534f;
    font-size: 0.875em;
}

/* Optional: Additional styling for form container on small screens */
@media (max-width: 768px) {
    form {
        padding: 15px;
    }

    .form-label {
        font-size: 1rem;
    }

    .form-control {
        font-size: 0.875rem;
    }
}
/* Card styling */
.card {
    border: none;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Header styling */
.card-header {
    background-color: #7a95a2;
    color: white;
    font-weight: 600;
    font-size: 1.25rem;
}

/* Product image styling */
.card-body img {
    width: 100%;
    max-width: 70px;
    border-radius: 4px;
}

/* Product details */
.card-body .col-md-6 span {
    display: block;
    font-size: 0.875rem;
}

.card-body .text-muted {
    font-size: 0.75rem;
}

/* Quantity and price styling */
.card-body .col-md-2, .card-body .col-md-4 {
    font-size: 0.875rem;
    font-weight: 500;
}

/* Subtotal and total section */
.card-body .d-flex span, .card-body .d-flex strong {
    font-size: 1rem;
}

/* Payment method section */
.card-body .form-check-label {
    font-size: 0.875rem;
}

/* Voucher input styling */
#voucher {
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
}

#applyVoucherButton {
    font-weight: 600;
    color: white;
    background-color: #7a95a2;
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
}

#voucherMessage {
    font-size: 0.75rem;
    color: #d9534f;
}

/* Place order button styling */
#placeOrderButton {
    width: 100%;
    background-color: #7a95a2;
    color: white;
    font-weight: 600;
    border-radius: 4px;
    padding: 12px;
    font-size: 1rem;
    transition: background-color 0.3s;
}

#placeOrderButton:hover {
    background-color: #677a85;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .card-body .col-md-6, .card-body .col-md-2, .card-body .col-md-4 {
        font-size: 0.75rem;
    }
}

</style>
        
                    <p style="font-size: 20px; color: black; font-weight: bold; text-align: center;">Thông tin khách hàng</p>
                        <div class="row">
                            <div class="mb-3 col-md-6 col-12">
                                <label for="fullName" class="form-label">Họ và tên *</label>
                                <input type="text" class="form-control" id="fullName" name="fullName"
                                    value="{{ auth()->user()->name }}">
                                <div class="invalid-feedback" style="display: none;"></div>
                            </div>
                            <div class="mb-3 col-md-6 col-12">
                                <label for="phone" class="form-label">Số điện thoại *</label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                    value="{{ auth()->user()->phone }}">
                                <div class="invalid-feedback" style="display: none;"></div>
                            </div>

                            <div class="mb-3 col-md-6 col-12">
                                <label for="city" class="form-label">Tỉnh/Thành Phố *</label>
                                <select class="form-control" id="city" name="city">
                                    <option value="">Tỉnh Thành</option>
                                </select>
                                <div class="invalid-feedback" style="display: none;"></div>
                            </div>
                            <div class="mb-3 col-md-6 col-12">
                                <label for="district" class="form-label">Quận/Huyện *</label>
                                <select class="form-control" id="district" name="district">
                                    <option value="">Quận Huyện</option>
                                </select>
                                <div class="invalid-feedback" style="display: none;"></div>
                            </div>
                            <div class="mb-3 col-md-6 col-12">
                                <label for="ward" class="form-label">Phường/Xã *</label>
                                <select class="form-control" id="ward" name="ward">
                                    <option value="">Phường Xã</option>
                                </select>
                                <div class="invalid-feedback" style="display: none;"></div>
                            </div>
                            <div class="mb-3 col-md-6 col-12">
                                <label for="address" class="form-label">Địa chỉ *</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="Địa chỉ cụ thể">
                                <div class="invalid-feedback" style="display: none;"></div>
                            </div>


                            <div class="mb-3 col-12">
                                <label for="note" class="form-label">Ghi chú đơn hàng (tùy chọn)</label>
                                <textarea class="form-control" id="note" name="note" placeholder="Giao hàng nhanh..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header" style="background-color: #7a95a2;">
                            <h5 class="mb-0 py-3"style="font-weight: 600; color: white; background-color: #7a95a2;">Đơn Hàng Của Bạn</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 text-start p-0">
                                    <strong>Sản phẩm</strong>
                                </div>
                                <div class="col-2 p-0 text-center">
                                    <strong>Số lượng</strong>
                                </div>
                                <div class="col-4 text-end">
                                    <strong>Tạm tính</strong>
                                </div>
                            </div>
                            <hr class="my-1">
                            @foreach ($cart->items as $item)
                                <div class="row">
                                    <div class="d-flex justify-content-between align-items-center pt-2">
                                        <div class="col-md-6 ">
                                            <div class="row">
                                                <div class="col-3 p-0">
                                                    <img src="{{ asset('images/' . $item->product->image_url) }}"
                                                        alt="{{ $item->product->name }}" class="img-fluid rounded">
                                                </div>
                                                <div class="col-9">
                                                    <span class="d-block">{{ $item->product->name }}</span>
                                                    @if ($item->variant)
                                                        @foreach ($item->variant->attributes as $attribute)
                                                            <span
                                                                class="d-block text-muted">{{ $attribute->attribute->attribute_name }}:
                                                                {{ $attribute->attribute_value }}</span>
                                                        @endforeach
                                                    @endif
                                                    <span>{{ number_format($item->price, 0, ',', '.') }}₫</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 text-center">
                                            <span>{{ $item->quantity }}</span>
                                        </div>
                                        <div class="col-md-4 text-end">
                                            <span>{{ number_format($item->price * $item->quantity, 0, ',', '.') }}₫</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <hr class="my-1">
                            <div class="d-flex justify-content-between pt-2">
                                <span>Tạm tính</span>
                                {{ number_format($cart->items->sum(function ($item) {return $item->price * $item->quantity;}),0,',','.') }}₫
                            </div>
                            <div class="d-flex justify-content-between pt-2 d-none" id="voucherSection">
                                <span>Voucher</span>
                                <span id="voucherDiscount">-0₫</span>
                            </div>
                            <div class="d-flex justify-content-between pt-2">
                                <strong>Tổng</strong>
                                <strong
                                    id="totalAmount">{{ number_format($cart->items->sum(function ($item) {return $item->price * $item->quantity;}),0,',','.') }}₫</strong>
                            </div>

                            <div class="mb-3">
                                <label class="form-label ">Hình thức thanh toán</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="paymentMethod" value="Cod"
                                        checked>
                                    <label class="form-check-label" for="Cod">Thanh toán khi nhận hàng</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="paymentMethod" value="VNPay">
                                    <label class="form-check-label" for="vnpay">Thanh toán qua VNPAY</label>
                                </div>
                            </div>

                            <!-- Voucher Input -->
                            <div class="mb-3">
                                <label for="voucher" class="form-label">Mã Voucher</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="voucher" name="voucher"
                                        placeholder="Nhập mã voucher">
                                    <button class="btn " type="button" id="applyVoucherButton" style="font-weight: 600; color: white; background-color: #7a95a2;">Áp
                                        dụng</button>
                                </div>
                                <span id="voucherMessage" class="text-danger d-none">Mã voucher không hợp lệ</span>
                            </div>
                            <input type="hidden" name="total_amount"
                                value="{{ $cart->items->sum(function ($item) {return $item->price * $item->quantity;}) }}"
                                id="totalAmountInput">
                            <input type="hidden" name="discount_amount" id="discountAmountInput" value="0">
                            <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                            <button id="placeOrderButton" type="button" class="btn" style="font-weight: 600; color: white; background-color: #7a95a2;">Đặt hàng</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://esgoo.net/scripts/jquery.js"></script>
    {{-- <script src="{{ asset('assets/client/js/checkOut.js') }}"></script> --}}
    <script>
        $(document).ready(function() {
            // Lấy tỉnh thành
            $.getJSON('https://esgoo.net/api-tinhthanh/1/0.htm', function(data_tinh) {
                if (data_tinh.error == 0) {
                    $.each(data_tinh.data, function(key_tinh, val_tinh) {
                        $("#city").append('<option value="' + val_tinh.id + '">' + val_tinh
                            .full_name + '</option>');
                    });

                    $("#city").change(function(e) {
                        var idtinh = $(this).val();
                        // Lấy quận huyện
                        $.getJSON('https://esgoo.net/api-tinhthanh/2/' + idtinh + '.htm', function(
                            data_quan) {
                            if (data_quan.error == 0) {
                                $("#district").html(
                                    '<option value="0">Quận Huyện</option>');
                                $("#ward").html('<option value="0">Phường Xã</option>');
                                $.each(data_quan.data, function(key_quan, val_quan) {
                                    $("#district").append('<option value="' +
                                        val_quan.id + '">' + val_quan
                                        .full_name + '</option>');
                                });

                                // Lấy phường xã  
                                $("#district").change(function(e) {
                                    var idquan = $(this).val();
                                    $.getJSON('https://esgoo.net/api-tinhthanh/3/' +
                                        idquan + '.htm',
                                        function(data_phuong) {
                                            if (data_phuong.error == 0) {
                                                $("#ward").html(
                                                    '<option value="0">Phường Xã</option>'
                                                );
                                                $.each(data_phuong.data,
                                                    function(key_phuong,
                                                        val_phuong) {
                                                        $("#ward").append(
                                                            '<option value="' +
                                                            val_phuong
                                                            .id + '">' +
                                                            val_phuong
                                                            .full_name +
                                                            '</option>');
                                                    });
                                            }
                                        });
                                });

                            }
                        });
                    });

                }
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            let voucherApplied = false; // Biến để kiểm tra xem voucher đã được áp dụng hay chưa

            document.getElementById('applyVoucherButton').addEventListener('click', function() {
                if (voucherApplied) {
                    const voucherMessage = document.getElementById('voucherMessage');
                    if (voucherMessage) {
                        voucherMessage.innerText = 'Mã voucher đã được áp dụng';
                        voucherMessage.classList.remove('d-none');
                    }
                    return;
                }

                let voucherCode = document.getElementById('voucher').value;
                let totalAmount = parseInt(document.getElementById('totalAmountInput').value);

                if (voucherCode.trim() === '') {
                    const voucherMessage = document.getElementById('voucherMessage');
                    if (voucherMessage) {
                        voucherMessage.innerText = 'Vui lòng nhập mã voucher';
                        voucherMessage.classList.remove('d-none');
                    }
                    return;
                }

                fetch(`/apply-voucher?voucher=${voucherCode}&total_amount=${totalAmount}`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            let discount = data.discount;
                            let newTotalAmount = totalAmount - discount;
                            document.getElementById('totalAmount').innerText = newTotalAmount
                                .toLocaleString('vi-VN', {
                                    style: 'currency',
                                    currency: 'VND'
                                });
                            document.getElementById('totalAmountInput').value = newTotalAmount;
                            document.getElementById('voucherDiscount').innerText =
                                `-${numberFormat(discount)}`;
                            document.getElementById('voucherSection').classList.remove('d-none');
                            document.getElementById('voucherMessage').classList.add('d-none');
                            document.getElementById('discountAmountInput').value = discount;
                            voucherApplied = true; // Đánh dấu voucher đã được áp dụng
                        } else {
                            document.getElementById('voucherSection').classList.add('d-none');
                            const voucherMessage = document.getElementById('voucherMessage');
                            if (voucherMessage) {
                                voucherMessage.innerText = data.message;
                                voucherMessage.classList.remove('d-none');
                            }
                            document.getElementById('discountAmountInput').value = 0;
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        document.getElementById('voucherSection').classList.add('d-none');
                        const voucherMessage = document.getElementById('voucherMessage');
                        if (voucherMessage) {
                            voucherMessage.innerText = 'Mã voucher không hợp lệ';
                            voucherMessage.classList.remove('d-none');
                        }
                        document.getElementById('discountAmountInput').value = 0;
                    });
            });

            function numberFormat(number) {
                return new Intl.NumberFormat('vi-VN', {
                    minimumFractionDigits: 0
                }).format(number) + '₫';
            }


            document.getElementById('placeOrderButton').addEventListener('click', function(event) {
                let isValid = true;
                const Fields = ['fullName', 'phone', 'city', 'district', 'ward', 'address'];

                Fields.forEach(function(fieldId) {
                    const field = document.getElementById(fieldId);
                    if (!field.value.trim()) {
                        isValid = false;
                        field.classList.add('is-invalid');
                        const nextElement = field.nextElementSibling;
                        if (nextElement) {
                            nextElement.innerText = 'Không được để trống';
                            nextElement.style.display = 'block';
                        }
                    } else {
                        field.classList.remove('is-invalid');
                        const nextElement = field.nextElementSibling;
                        if (nextElement) {
                            nextElement.innerText = '';
                            nextElement.style.display = 'none';
                        }
                    }
                });

                if (!isValid) {
                    event.preventDefault();
                } else {
                    // document.getElementById('checkoutForm').action ="{{ route('checkout.process') }}";
                    document.getElementById('checkoutForm').submit();
                }
            });

        });
    </script>
@endsection
