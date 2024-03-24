
<!DOCTYPE html>
<html>
<head>
    <title>News</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-v4XP2RE40VU3HIKdWvxzN0RR6gaHyCZcpX68eBnYW2qGFcuP6PFuZnftN+UrjslRUL8MWXNp0OF4RQMyDw2Bpw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="./style/News.css">
    <link rel="stylesheet" href="./style/footer.css">
   <!-- header -->
   <link rel="stylesheet" href="./style/header.css">
</head>
<body>
    <!-- header -->
    <div class="head-contain" style="width: 100%;">
      <?php
      if(!isset($_COOKIE["ten"])){
      require_once("header.php");}
      else{
        require_once("header2.php");
      }
      ?>
    </div>
    <!-- header -->
    <div class="anh-truot">
    <div class="slider">
        <div class="list">
            <div class="item">
                <img src="../View/assets/s3.png" alt="">
                <div class="anh-truot-noidung">
                <button><a href="Register.php">Đăng ký ngay</a></button>
                </div>
                <div class ="anh-truot-text">
                    <div class = "anh-text">
                        <div class="text-small" style="padding-bottom:5px ;">Mừng ngày</div>
                        <div class="text-big">QUỐC TẾ PHỤ NỮ</div>
                        <div class="text-small"style="font-size : 20px; margin-top:10px;">NHẬN HÀNG NGÀN ƯU ĐÃI</div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="../View/assets/s2.jpg" alt="">
                <div class="anh-truot-noidung" style="padding:550px 0 0 100px;">
                <button><a href="Register.php">Đăng ký ngay</a></button>
                </div>
                <div class ="anh-truot-text" style="padding:380px 0 0 100px;">
                    <div class = "anh-text">
                        <div class="text-small">GÓI HỘI VIÊN THÁNG</div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="../View/assets/s1.png" alt="">
                <div class="anh-truot-noidung" style="padding:550px 0 0 100px;">
                <button><a href="Register.php">Mở App Primechess Chơi Ngay</a></button>
                </div>
                <div class ="anh-truot-text" style="padding:250px 0 0 100px;">
                    <div class = "anh-text">
                        <div class="text-big">CỜ TÝ PHÚ <br>PRIME FITNESS</div>
                        <div class="text-small"style="font-size : 20px; margin-top:30px;">SĂN MẢNH GHÉP , TRÚNG QUÀ TO</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="buttons">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <ul class="dots">
            <li class="active"></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <script src="../View/js/test.js"></script>
    </div>
    <!-- anh truot -->
    <div class="main">
        <div class="b_left">
        <div class="name">PRIME FITNESS</div>
        <div class="dangky"><button >Đăng ký</button></div>
        </div>
        <div class="b_right">
            <iframe class="if1" width="400" height="315" src="https://www.youtube.com/embed/3p8EBPVZ2Iw?si=Fle_xD83GFkUQKWB&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <div class="chris">
                <div class="left" ><img style="border-radius: 10%;" src="../View/assets/chris1.png"/></div>
                <div class="right">
                    <div class="r1"><img style="border-radius: 10%;" src="../View/assets/chris2.png"/></div>
                    <div class="r1"><img style="border-radius: 10%;" src="../View/assets/chris3.png"/></div>
                </div>
            </div>
        </div>
    </div>
    <div class="cut"><hr></div>
     <!--  tintuc -->
    <div  class="headtintuc">
        <h1>NEWS</h1>
    </div>
    <div class="tintuc">
        <div class="cottin1">
            <div class="gioithieu">
                 HÃY ĐẾN VỚI 
                 <br>PRIME FITNESS
            </div>
            <div class="intro">Câu lạc bộ được thành lập từ năm 1999 với đội ngũ 
            kinh nghiệm cung cấp một môi trường thân thiện 
            và chuyên nghiệp cho mọi người tập luyện và cải thiện 
            sức khỏe . Câu lạc bộ luôn cố gắng và phát triển để 
            mang đến trải nghiệm tốt nhất cho khách hàng 
        </div>
        </div>
        <div class="cottin">
            <img src="../View/assets/phongyoga.jpeg"/>
            <div class="tieude">Nâng cấp phòng tập Yoga</div>
            <div class="noidung">
                Phòng tập yoga đã được PRIME FITNESS nâng cấp với 
                nhiều trang thiết bị mới hiện đại để phục vụ khách 
                hàng cũng như các huấn luyện viên . Phòng tập đã được trang
                bị thảm , ghế ngồi , và rất nhiều thiết bị mới . 
                <br>Xin kính mời các thành viên của FITNESS PRIME 
                đến để trải nghiệm . Ưu đãi cho khách hàng mới tập thử 1 tháng miễn phí
                <div class="read-more">
                  <a href="" style="display:flex;">
                    <span>Tìm hiểu thêm</span>
                    <img style="width : 20px ; height:9px;margin:11px 0 0 5px;" src="../View/assets/vector1.svg"/>
                  </a>
                </div>
            </div>
            <img src="../View/assets/phongtap2.JPG"/>
            <div class="tieude">Phòng Gym mới</div>
            <div class="noidung">
                Để phục vụ nhu cầu khách hàng PRIME FITNESS đã 
                mở thêm phòng tập GYM mới tại tầng 6 rất mong quý khách hàng 
                đến và trải nghiệm . Ngoài ra bể bơi đang trong thời gian sửa chữa 
                rất mong quý khách thông cảm và chờ đợi
                <div class="read-more">
                  <a href="" style="display:flex;">
                    <span>Tìm hiểu thêm</span>
                    <img style="width : 20px ; height:9px;margin:11px 0 0 5px;" src="../View/assets/vector1.svg"/>
                  </a>
                </div>
            </div>
        </div>
        <div class="cottin" style="padding-top: 50px;margin-right:30px">
        <img src="../View/assets/phonggym.jpeg"/>
        <div class="tieude">Tuyển PT</div>
            <div class="noidung">
            Bạn đam mê thể dục, muốn truyền cảm hứng và hướng dẫn người
             khác để đạt được mục tiêu sức khỏe cá nhân của họ? Chúng tôi
              đang tìm kiếm một Huấn Luyện Viên (Personal Trainer - PT) 
              nhiệt huyết và đầy năng lượng để gia nhập đội ngũ của chúng tôi
               tại phòng tập
               <div class="read-more">
                  <a href="" style="display:flex;">
                    <span>Tìm hiểu thêm</span>
                    <img style="width : 20px ; height:9px;margin:11px 0 0 5px;" src="../View/assets/vector1.svg"/>
                  </a>
                </div>
            </div>
            <img src="../View/assets/tapnhay.jpeg"/>
        <div class="tieude">Không giới hạn lớp tập nhóm</div>
            <div class="noidung">
            Tận hưởng niềm vui bất tận với hơn 50 lớp tập nhóm bản quyền từ 
            Lesmills như Body Combat, Body Jam, RPM, SH’Bam và các chương trình
             độc quyền do California thiết kế như CaliDrumfit, CaliStep. Các
              phiên bản mới được cập nhật liên tục mỗi tháng
              <div class="read-more">
                  <a href="" style="display:flex;" class="link">
                    <span>Tìm hiểu thêm</span>
                    <img style="width : 20px ; height:9px;margin:11px 0 0 5px;" src="../View/assets/vector1.svg"/>
                  </a>
                </div>
            </div>
        </div>
    </div>
    <!--  tieu chuan -->
    <div class="tieuchuan">
        <div class="tieuchuan-left">
        <div class="gioithieu">TIÊU CHUẨN CỦA SỰ SANG TRỌNG</div>
        <div class="intro">
        Tập luyện tại hơn 35+ Câu lạc bộ<br>
        khắp cả nước và tận hưởng môi trường<br>
         tập luyện đẳng cấp được đầu tư trang <br>
         thiết bị tốt nhất, khu vực VIP và các tiện ích<br>
          đặc biệt như Xông hơi, Hồ bơi và Bể sục Jacuzzi
        </div>
        <div class="read-more">
          <a href="">
            <span>TÌm Câu Lạc Bộ Gần Bạn</span>
            <img src="../View/assets/vector1.svg"/>
          </a>
        </div>
        </div>
        <div class="tieuchuan-right">
            <img src="../View/assets/phongtap5.JPG">
        </div>
    </div>
    <!-- thay doi ban than -->
    <div class="thaydoi">
        <div class="thaydoi-left">
            <img src="../View/assets/kimmy.png"/>
            <div class="tieude">Hội viên Lê Thị Mỹ Kim - Chiến Thắng bản thân là chiến thắng
                <br>hiển hách nhất 
            </div>
            <div class="noidung">
                "CTC 2022 đã và đang trở thành động lực giúp tôi thay đổi cuộc sống 
                ngoạn mục , vượt qua giới hạn tuổi tác để thực hiện ước mơ "hot girl"
                của mình . chỉ trong 2 tháng , tôi đã giảm được 8kg mỡ với một sức 
                khoẻ tốt và thể hình đẹp. Dù đã ngoài 60 tuổi nhưng đi đâu ai 
                cũng dành nhiều lời khen. Từ đó đã truyền động lực rất lướn đến bản thân tôi và những người xung quanh."
            </div>
        </div>
        <div class="thaydoi-right">
        <div class="gioithieu">BIẾN GIẤC MƠ TRỞ<br>THÀNH HIỆN THỰC</div>
        <div class="intro">
        Trong thập kỷ qua, hơn 350.000 người đã chọn<br>
        khắp cả nước và tận hưởng môi trường<br>
        chúng tôi để bắt đầu hành trình tập luyện. Hãy <br>
        cùng khám phá vì sao California được nhiều hội<br>
        viên tin tưởng lựa chọn nhé!
        </div>
        <div class="read-more">
          <a href="">
            <span>Tìm Hiểu Về Dịch Vụ Huấn Luyến Cá Nhân</span>
            <img src="../View/assets/vector1.svg"/>
          </a>
        </div>
        </div>
    </div>
    
    <!-- register -->
    <div class="register" style="padding :0px 0  100px">
        <div class="reg-l">
            <div class="r-gioithieu">PRIME FITNESS - NƠI BẠN THUỘC VỀ. <br>TRẢI NGHIỆM <br>MIỄN PHÍ NGAY!</div>
            <div class ="r-intro">Hãy thử điều gì đó mới mẻ trong năm nay bằng cách 
                tham gia thế giới trải nghiệm thú vị và vui nhộn từ chúng tôi. 
                 Chúng tôi cung cấp DÙNG THỬ MIỄN PHÍ 7 ngày cho tất cả khách mới.
                  Để lại thông tin của bạn bên cạnh và chúng tôi sẽ liên hệ với bạn 
                  trong 24 giờ tới
            </div>
        </div>
        <div class="reg-r">
            <div class="form-r"  style="margin-top : 100px;">
            <form>
                <input required name = "username" type="text" placeholder="Họ và tên*">
                <input required name = "phonenumber" type="text" placeholder="Số điện thoại*">
                <input required name = "email" type="email" placeholder="Email">
                <div class="button-register">
                     <button onclick="to_Register2()">Đăng ký</button>
                </div>
            </form>
            </div>
        </div>
    
    </div>
    <!-- baiviet -->
<div class="baiviet">
    <div class="baiviet-header">
    <div class="gioithieu-baiviet">ĐỪNG BỎ LỠ CÁC BÀI VIẾT HỮU ÍCH</div>
    </div>
    <div class="baiviet-main">
        <div class="cotbai1">
            <img src="../View/assets/baiviet1.png"/>
            <div class="baiviet-noidung">
            8.000 khán giả “cháy” cùng tlinh, HIEUTHUHAI, Andree Right Hand, Chillies tại đại nhạc hội California’s Fitness Festival
            <div class="read-more">
                  <a href="" style="display:flex;font-size : 16px;color:black;">
                    <span style="width : 38%;font-weight:350;">Tìm Hiểu Thêm</span>
                    <img style="height:12px;margin:6px 30px 0 0;width:11%;" src="../View/assets/vector2.svg"/>
                  </a>
                </div>
            </div>
        </div>
        <div class="cotbai1">
            <img src="../View/assets/baiviet2.png"/>
            <div class="baiviet-noidung">Giới Trẻ Háo Hức Đếm Ngược Đến Ngày Khai Mạc Đường Chạy Bong Bóng 
            <div class="read-more">
                  <a href="" style="display:flex;font-size : 16px;color:black;">
                    <span style="width : 38%;font-weight:350;">Tìm Hiểu Thêm</span>
                    <img style="height:12px;margin:6px 30px 0 0;width:11%;" src="../View/assets/vector2.svg"/>
                  </a>
                </div>
            </div>
        </div>
        <div class="cotbai1">
            <img src="../View/assets/baiviet3.png"/>
            <div class="baiviet-noidung">DỊCH VỤ TƯ VẤN TRỰC TUYẾN - HEALTH SPAN
            <div class="read-more">
                  <a href="" style="display:flex;font-size : 16px;color:black;">
                    <span style="width : 38%;font-weight:350;">Tìm Hiểu Thêm</span>
                    <img style="height:12px;margin:6px 30px 0 0;width:11%;" src="../View/assets/vector2.svg"/>
                  </a>
                </div>
            </div>
        </div>
        <div class="cotbai1" >
            <img src="../View/assets/baiviet4.png"/>
            <div class="baiviet-noidung">“Tập Thoả Thích - Bay Say Mê” cùng California x Vietjet
            <div class="read-more">
                  <a href="" style="display:flex;font-size : 16px;color:black;">
                    <span style="width : 38%;font-weight:350;">Tìm Hiểu Thêm</span>
                    <img style="height:12px;margin:6px 30px 0 0;width:11%;" src="../View/assets/vector2.svg"/>
                  </a>
                </div>
            </div>
        </div>
    </div>
    <div class="baiviet-main">
        <div class="cotbai1">
            <img src="../View/assets/baiviet5.png"/>
            <div class="baiviet-noidung">
            Gợi ý 6 bài tập pilates giúp chân thẳng, thon dài và săn chắc
            <div class="read-more">
                  <a href="" style="display:flex;font-size : 16px;color:black;">
                    <span style="width : 38%;font-weight:350;">Tìm Hiểu Thêm</span>
                    <img style="height:12px;margin:6px 30px 0 0;width:11%;" src="../View/assets/vector2.svg"/>
                  </a>
                </div>
            </div>
        </div>
        <div class="cotbai1">
            <img src="../View/assets/baiviet6.png"/>
            <div class="baiviet-noidung">
            Top 10 bài tập đốt cháy nhiều calo nhất
            <div class="read-more">
                  <a href="" style="display:flex;font-size : 16px;color:black;">
                    <span style="width : 38%;font-weight:350;">Tìm Hiểu Thêm</span>
                    <img style="height:12px;margin:6px 30px 0 0;width:11%;" src="../View/assets/vector2.svg"/>
                  </a>
                </div>
            </div>
        </div>
        <div class="cotbai1">
            <img src="../View/assets/baiviet7.png"/>
            <div class="baiviet-noidung">
            Bài tập cardio cho nữ: 10 bài tập đốt mỡ, giảm cân siêu tốc trong 1 tuần
            <div class="read-more">
                  <a href="" style="display:flex;font-size : 16px;color:black;">
                    <span style="width : 38%;font-weight:350;">Tìm Hiểu Thêm</span>
                    <img style="height:12px;margin:6px 30px 0 0;width:11%;" src="../View/assets/vector2.svg"/>
                  </a>
                </div>
            </div>
        </div>
        <div class="cotbai1" >
            <img src="../View/assets/baiviet8.png"/>
            <div class="baiviet-noidung">
            Top 8 phòng tập yoga Cần Thơ chất lượng và uy tín nhất
            <div class="read-more">
                  <a href="post/6-bai-tap-pilates.php" style="display:flex;font-size : 16px;color:black;">
                    <span style="width : 38%;font-weight:350;">Tìm Hiểu Thêm</span>
                    <img style="height:12px;margin:6px 30px 0 0;width:11%;" src="../View/assets/vector2.svg"/>
                  </a>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- footer -->
    <div class="footer-contain2">
    <div class="footer-row1">
        <div class="footer-tieude">Dịch vụ</div>
        <div class="footer-noidung">
        <a href="">Dance</a><br>
        <a href="">Group X</a><br>
        <a href="">Yoga</a><br>
        <a href="">Công nghệ giảm mỡ Hypoxi</a><br>
        <a href="">Huấn Luyện Viên Cá Nhân</a><br>
        <a href="">Kickfit & MMA</a>
        </div>
    </div>
    <div class="footer-row2">
    <div class="footer-tieude">Công ty</div>
        <div class="footer-noidung">
        <a href="Policy.php">Về chúng tôi</a><br>
        <a href="Policy.php">Điều kiện sử dụng</a><br>
        <a href="Policy.php">Chính sách bảo mật</a><br>
        <a href="Policy.php">Chính sách thanh toán</a><br>
        <a href="Policy.php">Chính sách giải quyết khiếu nại</a><br>
        <a href="Policy.php">Chính sách bảo vệ dữ liệu</a>
        </div>
    </div>
    <div class="footer-row3">
    <div class="footer-tieude">Support</div>
        <div class="lienhe1">
            1900 9999
        </div>
        <div class="icon-contain">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"/></svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#f6f7f9" d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z"/></svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#fcfcfc" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>        
    </div>
    </div>
    <div class="footer-row4">
    <div class="footer-tieude">Thông tin</div>
    <div class="footer-thongtin" >Công ty TNHH Trung Tâm Thể Dục Thể Hình 
    & Yoga PRIME FITNESS Số 19 P.Lê Thanh Nghị, Bách Khoa, Q.Hai Bà Trưng, 
    TP.Hà Nội Việt Nam <br>
    Mã số thuế: 0229920022<br>
    SĐT : 0238992888
    </div>
    </div>
   </div>
</body>
<script src="../View/js/Forward.js"></script>
</html>
<!-- Top 8 phòng tập yoga Cần Thơ chất lượng và uy tín nhất-->