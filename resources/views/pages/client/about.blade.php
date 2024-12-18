@extends ('layouts.client.main')
@section('content')
@include('components.client.alert')
<div class="container" style="font-family: Quicksand;">
    @include('breadcrumbs::bootstrap4')
    <div id="detailsDiv" class="f-gtcol2">
        <!-- <header class="f-header">
            <p class="f-bndk"><img src="/gioi-thieu/Content/images/banner.jpg" alt=""></p>
            <p class="f-bnmb"><img src="/gioi-thieu/Content/images/banner-mb.jpg" alt=""></p>
        </header> -->


        <!--GIỚI THIỆU CHUNG-->
        <section id="story-modun-2" class="py-5">
            <div class="container-fluid">
                <div class="row" style="margin-bottom: 1vw;">
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="story_module_one_title1 align-self-center text-center">
                            <img src="images\logo_baeBoutique.png" alt="logo" style="vertical-align: middle; width: 20vw;">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="story_module_one_title2 align-self-center text-center">
                            <h5 style="font-size: 19px; font-weight: bolder;">
                                Thông điệp từ người sáng lập Bae
                            </h5>
                            <h2 style="color: #8295A1; align-self: center; font-weight: bolder; font-size: 4vw;" class="py-5">
                                Chuyện nhà Bae
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-left: -10px;">
                    <div class="col-lg-4 col-md-12 mb-4" style="margin-bottom: 1vw;">
                        <div class="story_module_one_col story_module_one_col1">
                            <div class="story_module_one_col_title d-flex" style=" height: 100px; display: flex;">
                                <h3 style="font-weight: bolder;">
                                    <img src="https://ha200318.github.io/BaeBoutique-06/images/heart.webp" alt="iconheart" style="width: 15px; height: 15px;">
                                    Ấp ủ từ niềm đam mê khi thuở nhỏ…
                                </h3>
                            </div>
                            <div class="story_module_one_col_text">
                                <p style="line-height: 2em; text-align: justify;">
                                    Từng mê mẩn về những bộ quần áo đẹp, từng khao khát có nhiều đồ chơi như trên các phương tiện truyền thông hồi nhỏ để rồi tôi đã yêu và khao khát xây dựng Bae Boutique với bao ước mơ ấp ủ. Tôi tưởng đó mãi chỉ là ước mơ nhưng nó đã được kết thành câu chuyện có thật cho đến khi tôi được làm chính mình </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 mb-4 story_modun_col_bg" style="position: relative;margin-bottom: 1vw;">
                        <div class="story_module_one_col">
                            <div class="story_module_one_col_title d-flex" style=" height: 100px; display: flex;">
                                <h3 style="font-weight: bolder;">
                                    <img src="https://ha200318.github.io/BaeBoutique-06/images/heart.webp" alt="iconheart" style="width: 15px; height: 15px;">
                                    Cả “vũ trụ” đã ủng hộ tôi làm điều đó!
                                </h3>
                            </div>
                            <div class="story_module_one_col_text">
                                <p style="text-align: justify;line-height: 2em;">
                                    Bae bắt nguồn từ những khoảnh khắc đầy ấm áp và sâu lắng khi tôi nhìn thấy những người chị gái ruột của tôi đang mang thai vất vả khi phải tìm kiếm những đồ dùng cho bé yêu trong tương lai. Họ dành thời gian và công sức lớn lao để lựa chọn những món đồ phù hợp và an toàn cho con mình, nhưng không phải lúc nào cũng dễ dàng.Từ những cảm xúc đó, ý tưởng về việc tạo ra một không gian mua sắm an tâm và tiện lợi cho các bậc phụ huynh đã nảy nở trong tâm hồn tôi. Bae không chỉ đơn thuần là cửa hàng, mà là nơi tôi muốn chia sẻ nổi lo của các bậc cha mẹ và mang đến sự lựa chọn đa dạng, chất lượng và an toàn cho bé yêu của họ. </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12" tyle="margin-bottom: 1vw;">
                        <div class="story_module_one_col">
                            <div class="story_module_one_col_title d-flex" style=" height: 100px; display: flex;">
                                <h3 style="font-weight: bolder;">
                                    <img src="https://ha200318.github.io/BaeBoutique-06/images/heart.webp" alt="iconheart" style="width: 15px; height: 15px;">
                                    Cái duyên ấy mãnh liệt hơn bao giờ hết...
                                </h3>
                            </div>
                            <div class="story_module_one_col_text">
                                <p style="text-align: justify;line-height: 2em;">
                                    Công việc của tôi lúc đó cho phép tôi hàng ngày tiếp cận với thông tin về em bé, được trực tiếp trải nghiệm những sản phẩm tốt nhất, được tìm hiểu sâu về tiêu chuẩn sản phẩm tốt của các quốc gia “khó tính” trên thế giới.
                                    Càng nghiên cứu kĩ hơn, tôi càng lo lắng, hoang mang về thị trường quần áo và phụ kiện cho bé sơ sinh tại Việt Nam đa dạng nhưng thiếu kiểm soát, không rõ nguồn gốc, không tiêu chuẩn, mạnh ai nấy làm.
                                    Tôi biết mình phải làm điều gì đó thật tốt, trước hết là cho chính những đứa cháu trong nhà, và cho các em bé Việt.
                                    Tôi chợt nhớ lại những niềm đam mê thuở nhỏ, sống động và vẹn nguyên. Và cứ như thế, Bae ra đời.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--Modun 2-->
        <section class="story-modun-1">
            <div class="container-fluid">
                <div class="row story_row1" style="align-items: center;">
                    <div class="col story_col1">
                        <div class="story_module_image1" style="position: relative; z-index: 1;">
                            <img class="img-modun1" src="https://ha200318.github.io/BaeBoutique-06/images/tim4.png" alt="image 1 of module 2" style="max-width: 80%;">
                        </div>
                    </div>
                    <div class="col story_col2" style=" align-items: center;">
                        <div class="story_module_content">
                            <h3 class="story_module_title">
                                "Bae nghĩa là bé!"
                            </h3>
                            <p class="story_module_text">
                                Đôi khi, giữa vô vàn sản phẩm, ưu tiên phát triển toàn diện cho các bé quan trọng hơn bất cứ thứ gì. Bae không chỉ là một thương hiệu, mà còn là một ước mơ, một tâm huyết và sứ mệnh mà chúng tôi ấp ủ bao nhiêu lâu nay. Tại đây, chúng tôi không chỉ bán các sản phẩm dành cho em bé mà còn xây dựng một cộng đồng chân thành, nơi mà sự quan tâm đến bé yêu không bao giờ ngừng.
                                Tên thương hiệu "Bae" không chỉ đơn thuần là một từ ngữ, mà là sự kết hợp của cảm xúc, tình yêu thương và sự trách nhiệm. "Bae" là từ viết tắt của "Before Anyone Else" - trước bất cứ ai khác. Đây là tôn chỉ căn bản của chúng tôi - đặt bé yêu lên hàng đầu, trước hết và trên hết mọi thứ. </p>
                        </div>
                    </div>
                </div>
                <div class="row story_row2" style="align-items: center; margin-bottom: 30px;">
                    <div class="col story_col2">
                        <div class="story_module_content">
                            <h3 class="story_module_title">
                                Slogan-Nơi những thiên thần bé nhỏ bắt đầu cuộc hành trình!!!
                            </h3>
                            <p class="story_module_text">
                                Nơi mà những thiên thần nhỏ bé bắt đầu hành trình cuộc sống của mình, đó chính là nơi Bae hướng đến. Chúng tôi tin rằng từng bước đi đầu tiên, từng nụ cười, và mỗi khoảnh khắc của em bé đều có giá trị không thể đo lường. Bae không chỉ đơn thuần là một nơi để mua sắm đồ dùng cho em bé, mà còn là ngôi nhà tình thương, sự quan tâm và hỗ trợ dành cho các bậc phụ huynh. Chúng tôi hiểu rằng giai đoạn đầu đời của em bé đầy chông gai và cảm xúc, và vì vậy, chúng tôi muốn đồng hành cùng bạn từ những bước đi đầu tiên của bé yêu. </p>
                        </div>
                    </div>

                    <div class="col story_col1">
                        <div class="story_module_image2" style="position: relative;
            z-index: 1;">
                            <img class="img-modun1" src="https://ha200318.github.io/BaeBoutique-06/images/tim3.png" alt="image 2 of module 2" style="max-width: 80%;height: auto; display: block;margin: 0 auto;   -moz-transform: scaleX(-1);
                                                                                                              -o-transform: scaleX(-1);
                                                                                                              -webkit-transform: scaleX(-1);
                                                                                                              transform: scaleX(-1);
                                                                                                              filter: FlipH; ">
                        </div>
                    </div>
                </div>
                <div class="row story_row1" style="align-items: center; margin-bottom: 55px;">
                    <div class="col story_col1">
                        <div class="story_module_image1" style="position: relative; z-index: 1;">
                            <img class="img-modun1" src="https://ha200318.github.io/BaeBoutique-06/images/tim1.png" alt="image 1 of module 2" style="max-width: 80%;">
                        </div>
                    </div>
                    <div class="col story_col2" style=" align-items: center;">
                        <div class="story_module_content">
                            <h3 class="story_module_title">
                                "Ý nghĩa logo chú gấu dưới chữ Bae"
                            </h3>
                            <p class="story_module_text">
                                Logo của Bae Boutique với hình ảnh chú gấu mang đến nhiều cảm xúc và đầy tinh tế. Hình ảnh chú gấu làm cho chúng ta liên tưởng đến hình ảnh vững chắc, an toàn và ấm áp, đặc biệt là khi nó xuất hiện cùng với Bae, cùng với những bé nhỏ. Hình ảnh chú gấu được đặt trên “Bae” gợi lên sự đáng tin cậy, chở che và bảo vệ an toàn cho các bé. Từ logo này, Bae muốn truyền tải rằng Bae rất rất muốn dành thời gian để chăm sóc cho các thiên thần quý báu của mỗi gia đình hàng ngày
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Modun 3-->
        <section id="story-modun-4" class="py-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="story-modun-4-col">
                            <div class="story-modun-4-col-title">
                                <h3 class="mt-4">
                                    Điều muốn nói
                                </h3>
                            </div>

                            <div class="story-modun-4-col-img">
                                <img src="https://images.pexels.com/photos/4609098/pexels-photo-4609098.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1260&amp;h=750&amp;dpr=2" alt="about_us" style="max-width: 100%;">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="story-modun-4-col">
                            <div class="story-modun-4-col-img">
                                <img src="https://images.pexels.com/photos/4609096/pexels-photo-4609096.jpeg" alt="about_us" style="max-width: 100%;">
                            </div>
                            <div class="story-modun-4-col-title" style="text-align: justify; font-size: 1.2vw;">
                                <p>
                                    Chúng tôi cam kết sẽ luôn thực hiện định kỳ các bài kiểm tra cần thiết và cập nhật sản phẩm đáp ứng các tiêu chuẩn
                                    an toàn quốc tế khắt khe nhằm cung cấp sản phẩm an toàn cho em bé và tiện lợi cho mẹ.
                                </p>
                                <p style="font-weight: bolder;">
                                    Bae yêu ba mẹ và em bé!
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
</div>
@endsection