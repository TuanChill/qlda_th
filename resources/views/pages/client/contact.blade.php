@extends ('layouts.client.main')
@section('content')
@include('components.client.alert')
<br><br>
<div class="container " style="font-family: Quicksand;">
    @include('breadcrumbs::bootstrap4') -->
    <!-- section title

   -->
    <div class="my-form" style="margin-bottom: 50px;margin-top: -30px;background: #F2F2F2;position: relative;z-index: 99; padding: 50px;border-radius: 30px; margin-bottom: 20px;">
        <div class="row" style="font-family: Quicksand;">
            <div class="col-lg-6 col-md-12 col-sm-12 contact-wrapper" style=" padding: 30px; border-radius: 20px;">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2 style="font-size: 2.75vw !important; color: #7995a3; font-weight: 700;margin-bottom: 24px;text-align: center;">
                                Liên hệ đến Bae Boutique
                            </h2>
                            <p style="line-height: 2; margin-bottom: 24px; font-size: 18px; text-align: justify;">
                                Cảm ơn bạn đã truy cập vào website Bae Boutique, chúng tôi rất mong muốn và luôn sẵn sàng lắng nghe những thắc mắc, ý kiến phản hồi của các bạn.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="contact-item">
                            <div class="contact-title">
                                <div class="contact-icon">
                                    <span class="fs-1"><i class="bx bx-location-plus"></i></span>
                                </div>
                            </div>
                            <div class="contact-info">
                                <div class="contact_title">
                                    <h4>
                                        Trụ sở văn phòng
                                    </h4>
                                </div>
                                <div class="contact_content">
                                    <span>10 P. Đông Quan, Nghĩa Đô, Cầu Giấy, Hà Nội, Vietnam</span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="contact-item">
                            <div class="contact-title">
                                <div class="contact-icon">
                                    <span class="fs-1"><i class="bx bx-time-five"></i></span>
                                </div>
                            </div>
                            <div class="contact-info">
                                <div class="contact_title">
                                    <h4>
                                        Thời gian làm việc
                                    </h4>
                                </div>
                                <div class="contact_content">
                                    <span>Từ 08:00 đến 18:00 </span><br>
                                    <span>Từ thứ 2 đến thứ 7</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="contact-item">
                            <div class="contact-title">
                                <div class="contact-icon">
                                    <span class="fs-1"><i class="bx bx-envelope"></i></span>
                                </div>
                            </div>
                            <div class="contact-info">
                                <div class="contact_title">
                                    <h4>
                                        Email
                                    </h4>
                                </div>
                                <div class="contact_content">
                                    <span>baeboutique04@gmail.com</span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="contact-item">
                            <div class="contact-title">
                                <div class="contact-icon">
                                    <span class="fs-1"><i class="bx bx-support"></i></span>

                                </div>
                            </div>
                            <div class="contact-info">
                                <div class="contact_title">
                                    <h4>
                                        Hỗ trợ
                                    </h4>
                                </div>
                                <div class="contact_content">
                                    <span>0399725203</span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12" style="background-color: #CCDEE8; padding: 30px; border-radius: 20px; font-size: 19px; color: white;">
                <div class="contact_form">
                    <div class="page-head" style="text-align: center; color: #FFFDFD;">
                        <h3 style="font-size: 2.75vw !important; color: #7995a3; font-weight: 700;margin-bottom: 24px;text-align: center;">Gửi email tới Bae Boutique</h3>
                        <p> Thắc mắc của bạn sẽ được phản hồi trong 24h. Xin cảm ơn!</p>
                    </div>
                    <div class="form-vertical clearfix">
                        <form id="form-contact" class="form" novalidate="novalidate">
                            <div class="mb-3">
                                <label for="ContactFormName" style="color: white;">Họ tên của bạn</label><br>
                                <input type="text" name="name" value="" placeholder="Họ và tên của bạn"
                                    class="name form-control" data-rule-required="true" aria-required="true" style="height: 56px; background: transparent !important;   border: 2px solid rgba(255, 255, 255, 0.4);  border-radius: 20px;  color: #fff;  padding: 12px 20px;  margin-bottom: 30px;">
                            </div>
                            <div class="mb-3">
                                <label for="ContactFormPhone">Số điện thoại của bạn</label><br>
                                <input type="text" name="phone" value="" placeholder="Số điện thoại của bạn"
                                    class="phone form-control" data-rule-required="true" aria-required="true" style="height: 56px; background: transparent !important;   border: 2px solid rgba(255, 255, 255, 0.4);  border-radius: 20px;  color: #fff;  padding: 12px 20px;  margin-bottom: 30px;">
                            </div>
                            <div class="mb-3">
                                <label for="ContactFormEmail">Địa chỉ email của bạn</label><br>
                                <input type="text" name="emailCustomer" value="" placeholder="Email của bạn"
                                    class="emailCustomer form-control" data-rule-required="true" aria-required="true" style="height: 56px; background: transparent !important;   border: 2px solid rgba(255, 255, 255, 0.4);  border-radius: 20px;  color: #fff;  padding: 12px 20px;  margin-bottom: 30px;">
                            </div>
                            <div class="mb-3">
                                <label for="ContactFormMessage">Nội dung</label><br>
                                <textarea class="content form-control" name="content" placeholder="Nội dung cần liên hệ" data-rule-required="true" rows="10"
                                    aria-required="true" style="height: 56px; background:  !important;   border: 2px solid rgba(255, 255, 255, 0.4);  border-radius: 20px;  color: #fff;  padding: 12px 20px;  margin-bottom: 30px;"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="ContactFormMessage">Nhóm hỗ trợ</label><br>
                                <select class="emailContact form-control" id="emailContact" name="emailContact" style="height: 56px; background: transparent !important;   border: 2px solid rgba(255, 255, 255, 0.4);  border-radius: 20px;  color: #fff;  padding: 12px 20px;  margin-bottom: 30px;">
                                    <option value="frt.sale@fpt.com.vn" style="color: #7995a3;">Bộ phận hỗ trợ bán hàng</option>
                                    <option value="frt.contact@fpt.com.vn" style="color: #7995a3;">Bộ phần hỗ trợ tài khoản, các vấn đề khác </option>
                                    <option value="fptshop@fpt.com.vn" style="color:#7995a3">Bộ phận hỗ trợ phản ánh, góp ý </option>
                                </select>
                            </div>
                            <div class="mb-3" style="text-align: center;"><br>
                                <p class="">
                                    <input type="submit" value="Gửi đi" class="btn btn-danger" style="    color: #fff;border: 2px solid #BCD5E3;background: #7995a3 !important;border-radius: 20px;padding: 20px 36px;margin-bottom: 0;font-weight: 700;text-align: center;">
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <h2 style="font-size: 2.75vw !important; color: #7995a3; font-weight: 700;margin-top: 24px;text-align: center;">
            Địa chỉ của Bae Boutique
        </h2>
        <div class="map" style="max-width: 100%;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8170133092594!2d105.80090138047288!3d21.040006537422695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab15f9d255b5%3A0xb60c93b0f734275b!2zMTAgUC4gxJDDtG5nIFF1YW4sIE5naMSpYSDEkMO0LCBD4bqndSBHaeG6pXksIEjDoCBO4buZaSwgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1729749534674!5m2!1sen!2s" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
@endsection