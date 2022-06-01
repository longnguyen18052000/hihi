<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Phone_content phone 1</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/c93a607241.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="<?php echo asset('assets/css/index.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('assets/css/login.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('assets/css/wed_responsive.css'); ?>" type="text/css">

    <link rel="stylesheet" href="<?php echo asset('assets/bootstrap/css/bootstrap.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('assets/bootstrap/css/bootstrap.min.css'); ?>" type="text/css">

    <script type="text/javascript" src="{{ URL::asset('assets/bootstrap/js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>

    <style>
        body {
            background-color: #F4F4F4;
        }

    </style>
</head>

<body>
    <header>
        <div class="add">
            <img src="{{ asset('images//bubble_00.dcaf1b50.svg') }}" alt="logo" />
        </div>
        <!-- top-navigation -->
        <div class="top-navigation">
            <div class="container d-flex top_header">
                <span><a href="#">Bản mobile</a></span>
                <span><a href="#">Giới thiệu</a></span>
                <span><a href="#">Sản phẩm đã xem</a></span>
                <span><a href="#">Trung tâm bảo hành</a></span>
                <span><a href="#">Hệ thống 99 siêuu thị</a></span>
                <span><a href="#">Tuyển dụng</a></span>
                <span><a href="#">Tra cứu đơn hàng</a></span>
                <span><a href="#" onclick="document.getElementById('login').style.display='block'">Đăng nhập</a></span>
            </div>
        </div>
        <!-- end top-navigation -->

        <!-- logo and search box -->
        <div class="heading">
            <div class="container pb-4 pt-4 d-flex w-100 content">

                <div class="logo">
                    <img src="{{ asset('images/logo-text.png') }}" alt="logo" />
                </div>

                <div class="d-flex align-items-center box_search">
                    <div class="w-100">
                        <form action="#" class="w-100 bg-white" method="post">
                            <input class="w-75" type="text" id="kwd" name="kwd"
                                placeholder="Hôm nay bạn cần tìm gì?" />
                            <button type="submit" class="search">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                </div>

                <div class="d-flex align-items-center text-white check">
                    <div class="check_order">
                        <a href="#" class="d-flex align-items-center text-decoration-none">
                            <i class="fa fa-truck text-white"></i>
                            <span>Kiểm tra đơn hàng</span>
                        </a>
                    </div>
                    <div class="cart">
                        <a href="#" class="d-flex justify-content-center align-items-center text-decoration-none">
                            <i class="fa fa-cart-arrow-down"></i>
                            <i class="fa fa-caret-left icon"></i>
                            <div class="text-white d-flex justify-content-center align-items-center">
                                0
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <!-- logo and search box -->

        <!-- button phone content -->
        <div id="button_phone" class="login w3-modal phonecontent">
            <div class="d-flex bg-white box-login mb-5">
                <div class="image">
                    <div class="d-flex flex-column item align-items-center">
                        <img class="w-75"
                            src="{{ asset('images/phone_noibat/image-removebg-preview_637850265770319467.png') }}">
                        <span><strong>Samsung Galaxy A23 4GB/128GB - Chính hãng</strong></span>
                        <span style="color: #aaa;"><strong>Đen</strong></span>
                        <div class="mt-2 mb-2">
                            <i class="fa-solid fa-bolt-lightning button_i"></i>
                            <strong class="button_price">4,850,000 ₫</strong>
                            <del>6,850,000 ₫</del>
                        </div>
                        <div class="content mb-3">
                            <div class="sale mt-3">
                                <label>KM1</label>
                                <div class="border border-1 mt-2 p-2">
                                    <i class="fa-solid fa-circle-dot"></i>
                                    <span>Tặng sim data Mobifone Hera 5G (2.5GB/ngày) ( Chưa bao gồm tháng đầu tiên) -
                                        Lưu ý: chỉ mua trực tiếp tại cửa hàng, không áp dụng shop SIS Hà Nội.</span>
                                </div>
                            </div>

                            <div class="sale mt-3">
                                <label>KM2</label>
                                <div class="border border-1 mt-2 p-2">
                                    <i class="fa-solid fa-circle-dot"></i>
                                    <span>Thanh toán qua VNPAY giảm thêm tới 500.000đ</span>
                                </div>
                            </div>

                            <div class="sale mt-3">
                                <label>KM3</label>
                                <div class="border border-1 mt-2 p-2">
                                    <i class="fa-solid fa-circle-dot"></i>
                                    <span>Sản phẩm đang thuộc chương trình Flash sale (Số lượng có hạn)</span>
                                </div>
                            </div>

                            <div class="sale mt-3">
                                <label>KM4</label>
                                <div class="border border-1 mt-2 p-2">
                                    <i class="fa-solid fa-circle-dot"></i>
                                    <span>Giảm thêm 300.000đ khi tham gia Thu cũ - Lên đời điện thoại Android </span>
                                </div>
                            </div>

                            <div class="sale mt-3">
                                <label>KM5</label>
                                <div class="border border-1 mt-2 p-2">
                                    <i class="fa-solid fa-circle-dot"></i>
                                    <span>Tặng sim data HeraPlus ưu đãi 6GB/ngày (Chưa bao gồm tháng đầu tiên) - Áp dụng
                                        khi mua hàng online</span>
                                </div>
                            </div>

                            <div class="sale mt-3">
                                <label>KM6</label>
                                <div class="border border-1 mt-2 p-2">
                                    <i class="fa-solid fa-circle-dot"></i>
                                    <span>Tặng 01 tháng cước thuê bao K+ App khi mua 2 tháng (Giá chỉ từ 53.000đ)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product mt-4">
                    <h5><strong>Đặt hàng sản phẩm</strong></h5>
                    <span class="mt-2"><strong>Chọn màu sắc</strong></span>
                    <div class="d-flex select_color mb-3">
                        <div class="border border-1">
                            <label class="p-2">
                                <i class="fa-solid fa-circle-check"></i>
                                <span><strong>Đen</strong></span>
                                <span class="d-block"><strong>4,850,000 ₫</strong></span>
                            </label>
                        </div>
                        <div class="border border-1 m-x-2" style="margin:0px 10px">
                            <label class="p-2">
                                <i class="fa-solid fa-circle-check"></i>
                                <span><strong>Xanh</strong></span>
                                <span class="d-block"><strong>4,850,000 ₫</strong></span>
                            </label>
                        </div>
                        <div class="border border-1">
                            <div class="p-2">
                                <label>
                                    <i class="fa-solid fa-circle-check"></i>
                                    <span><strong>Cam</strong></span>
                                    <span class="d-block"><strong>4,850,000 ₫</strong></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <span>Số lượng</span>
                    <div class="mt-2 amount">
                        <button class="border border-1">-</button>
                        <input type="text" value="1">
                        <button class="border border-1">+</button>
                    </div>
                    <div class="mt-3 btn-submit">
                        <form action="">
                            <div>
                                <label><strong>Họ tên</strong></label>
                                <input type="text" name="username" style="outline: none"
                                    class="w-100 border border-1 p-3" placeholder="Nhập họ và tên*" required>
                            </div>
                            <div class="d-flex row mt-3 mb-3">
                                <div class="phone col-6">
                                    <label class="d-block"><strong>Số điện thoại</strong></label>
                                    <input type="number" class="w-100 p-3 border border-1" name="phone"
                                        placeholder="Nhập họ và tên" required>
                                </div>

                                <div class="col-6">
                                    <label class="d-block"><strong>Email</strong></label>
                                    <input type="email" class="w-100 p-3 border border-1" name="email"
                                        placeholder="Nhập họ và tên" required>
                                </div>
                            </div>
                            <span><strong>Hình thức nhận hàng</strong></span>
                            <div class="mt-3 row">
                                <div class="col-6">
                                    <span><strong>Nhận hàng tại nhà</strong></span>
                                    <div>
                                        <input type="text" class="w-100 p-3 border border-1" name="home_delevety">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <span><strong>Nhận hàng tại của hàng</strong></span>

                                </div>
                            </div>
                            <span></span>
                            <span>Địa chỉ</span>
                            <div>
                                <div class="d-flex">
                                    <select>
                                        <option value="">Hà nội</option>
                                        <option value="">TP Hồ Chí Minh</option>
                                        <option value="">Thái BÌnh</option>
                                        <option value="">Nam Định</option>
                                    </select>
                                    <select>
                                        <option value="">Quận/Huyện</option>
                                        <option value="">Ba Đình</option>
                                        <option value="">Hoàn Kiếm</option>
                                        <option value="">Tây Hồ</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="button_delete">
                    <button class="w-100 border border-0 mt-3 bg-white" style="color:red"
                        onclick="document.getElementById('button_phone').style.display='none'"><strong>X</strong></span>
                </div>

            </div>
        </div>
        <!-- end button phone content -->

        <!--header nav hover -->
        <nav>
            <div class="d-flex justify-content-center w-100">
                <div class="container nav-content" style="padding-right: 45px ;padding-left: 35px;">
                    <div class="content d-flex">
                        <a href="#" id="hover_phone">
                            <span><i class="fa-solid fa-mobile-screen"></i></span>
                            <span>ĐIỆN THOẠI</span>
                            <label></label>
                        </a>
                        <a href="#" id="hover_watch">
                            <span><i class="fa-solid fa-clock"></i></span>
                            <span>ĐỒNG HỒ</span>
                            <label></label>
                        </a>
                        <a href="#" id="hover_laptop">
                            <span><i class="fa-solid fa-laptop"></i></span>
                            <span>LAPTOP</span>
                            <label></label>
                        </a>
                        <a href="#" id="hover_tablet">
                            <span><i class="fa-solid fa-tablet"></i></span>
                            <span>TABLET</span>
                            <label></label>
                        </a>
                        <a href="#" id="hover_headPhone">
                            <span><i class="fa-solid fa-headphones"></i></span>
                            <span>ÂM THANH</span>
                            <label></label>
                        </a>
                        <a href="#" id="hover_smartHome">
                            <span><i class="fa-solid fa-house"></i></span>
                            <span>SMART HOME</span>
                            <label></label>
                        </a>
                        <a href="#" id="hover_accessory">
                            <span><i class="fa-solid fa-charging-station"></i></span>
                            <span>PHỤ KIỆN</span>
                            <label></label>
                        </a>
                        <a href="#" id="hover_playGame">
                            <span><i class="fa-solid fa-gamepad"></i></span>
                            <span>ĐỒ CHƠI CÔNG NGHỆ</span>
                            <label></label>
                        </a>
                        <a href="#" id="hover_mayTroi">
                            <span><i class="fa-solid fa-phone"></i></span>
                            <span>MÁY TRÔI</span>
                            <label></label>
                        </a>
                        <a href="#" id="hover_repair">
                            <span><i class="fa-solid fa-screwdriver-wrench"></i></span>
                            <span>SỬA CHỮA</span>
                            <label></label>
                        </a>
                        <a href="#" id="hover_sim">
                            <span><i class="fa-solid fa-sim-card"></i></span>
                            <span>SIM THẺ</span>
                            <label></label>
                        </a>
                        <a href="#">
                            <span><i class="fa-solid fa-newspaper"></i></span>
                            <span>TIN TỨC</span>
                            <label></label>
                        </a>
                        <a href="#" id="hover_flashSale">
                            <span><i class="fa-solid fa-bolt-lightning"></i></span>
                            <span>FLASH SALE</span>
                            <label></label>
                        </a>
                    </div>
                    <!-- hover phone -->
                    <div class="border border-1 hover_phone" id="hover_phone_id">
                        <div class="d-flex p-4">
                            <div class="hover_table">
                                <table class="w-100">
                                    <thead>
                                        <th>HÃNG SẢN XUẤT</th>
                                        <th></th>
                                        <th></th>
                                        <th>MỨC GIÁ</th>
                                        <th>QUAN TÂM NHẤT</th>
                                    </thead>

                                    <tfoot>
                                        <tr>
                                            <td>Iphone</td>
                                            <td>XOR</td>
                                            <td>Samsung</td>
                                            <td>Trên 100 triệu</td>
                                            <td>Hôm nay</td>
                                        </tr>
                                        <tr>
                                            <td>Xiaomi</td>
                                            <td>Reamle</td>
                                            <td>Nokia</td>
                                            <td>Dưới 100 triệu</td>
                                            <td>Tuần này</td>
                                        </tr>
                                        <tr>
                                            <td>OPPO</td>
                                            <td>Blackberry</td>
                                            <td>Vivo</td>
                                            <td>Từ 2 đến 3 triệu</td>
                                            <td>Tháng này</td>
                                        </tr>
                                        <tr>
                                            <td>Energizer</td>
                                            <td>Masstel</td>
                                            <td>Philips</td>
                                            <td>Từ 3 đến 4 triệu</td>
                                            <td>Tháng này</td>
                                        </tr>
                                        <tr>
                                            <td>Itel</td>
                                            <td>Bphone</td>
                                            <td>TECNO</td>
                                            <td>Từ 6 đến 8 triệu</td>
                                            <td>Năm nay</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Từ 15 đến 20 triệu</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><b>ĐIỆN THOẠI CAO CẤP</b></td>
                                            <td></td>
                                            <td></td>
                                            <td>Từ 20 đến 100 triệu</td>
                                            <td></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="hover_img">
                                <img src="{{ asset('images/GALAY A73 5G.png') }}" alt="logo" />
                            </div>
                        </div>
                    </div>
                    <!-- hover watch -->
                    <div class="border border-1 hover_phone" id="hover_watch_id">
                        <div class="p-4">
                            <table>
                                <thead>
                                    <th>ĐỒNG HỒ</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <td>Apple Watch</td>
                                        <td>Samsung</td>
                                        <td>Xiaomin</td>
                                        <td>Gramin</td>
                                    </tr>
                                    <tr>
                                        <td>Tic Watch</td>
                                        <td>Amazfic</td>
                                        <td>Đồng hồ trẻ em</td>
                                        <td>Huawei</td>
                                    </tr>
                                    <tr>
                                        <td>Masstel</td>
                                        <td>OPPO</td>
                                        <td>realme</td>
                                        <td>SoundPEATS</td>
                                    </tr>
                                    <tr>
                                        <td>Top Đồng hồ thông minh</td>
                                        <td>Top vòng đeo tay</td>
                                        <td>fitbit</td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- hover laptop -->
                    <div class="border border-1 hover_phone" id="hover_laptop_id">
                        <div class="row p-4">
                            <div class="col-4">
                                <table>
                                    <thead class="w-100">
                                        <th class="w-25">HÃNG SẢN XUẤT</th>
                                        <th class="w-25"></th>
                                        <th class="w-25"></th>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <td>Mac</td>
                                            <td>Asus</td>
                                            <td>Dell</td>
                                        </tr>
                                        <tr>
                                            <td>GIGABYTE</td>
                                            <td>HP</td>
                                            <td>Huawei</td>
                                        </tr>
                                        <tr>
                                            <td>Lennovo</td>
                                            <td>Microsoft</td>
                                            <td>MSI</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                            <div class="col-8">
                                <table class="w-100">
                                    <thead class="w-100">
                                        <th class="w-50">PHÂN LOẠI SẢN PHẨM</th>
                                        <th class="w-50">MỨC GIÁ</th>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <td>Cao cấp - Sang trọng</td>
                                            <td>Trên 20 triệu</td>
                                        </tr>
                                        <tr>
                                            <td>Đồ họa - Kĩ thuật</td>
                                            <td>Từ 12 đến 15 triệu</td>
                                        </tr>
                                        <tr>
                                            <td>Học tập - Văn phòng</td>
                                            <td>Từ 15 đến 20 triệu</td>
                                        </tr>
                                        <tr>
                                            <td>Laptop Gaming</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Mỏng nhẹ</td>
                                            <td></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- hover tablet -->
                    <div class="border border-1 hover_phone" id="hover_tablet_id">
                        <div class="p-3">
                            <table class="w-75">
                                <thead>
                                    <th class="w-25 pb-2">Hãng sản xuất</th>
                                    <th class="w-25"></th>
                                    <th class="w-25"></th>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <td>Lennovo</td>
                                        <td>Microsoft</td>
                                        <td>Nokia</td>
                                    </tr>
                                    <tr>
                                        <td>Ipad</td>
                                        <td>Sámung</td>
                                        <td>Xiaomi</td>
                                    </tr>
                                    <tr>
                                        <td>Huawei</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- hover headPhone -->
                    <div class="border border-1 hover_phone" id="hover_headPhone_id">
                        <div class="w-75 p-3">
                            <table class="w-100">
                                <thead>
                                    <th>LOA</th>
                                    <th></th>
                                    <th>TAI NGHE</th>
                                    <th></th>
                                    <th></th>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <td>Energizer</td>
                                        <td>Huawei</td>
                                        <td>Sony</td>
                                        <td>JBL</td>
                                        <td>Soundpeats</td>
                                    </tr>
                                    <tr>
                                        <td>LG</td>
                                        <td>Loa mic cầm tay</td>
                                        <td>Akg</td>
                                        <td>Apple AirPods</td>
                                        <td>Beats</td>
                                    </tr>
                                    <tr>
                                        <td>Marshall</td>
                                        <td>MONSTER</td>
                                        <td>Energizer</td>
                                        <td>Laylou</td>
                                        <td>Sony</td>
                                    </tr>
                                    <tr>
                                        <td>SoundPEATS</td>
                                        <td>Teakin</td>
                                        <td>iWalk</td>
                                        <td>LG</td>
                                        <td>MONSTER</td>
                                    </tr>
                                    <tr>
                                        <td>JBL</td>
                                        <td>Harman Kardon</td>
                                        <td>Motorola</td>
                                        <td>Nokia</td>
                                        <td>OPPO</td>
                                    </tr>
                                    <tr>
                                        <td>Samsung</td>
                                        <td>Sony</td>
                                        <td>PHILIPS</td>
                                        <td>Pioneer</td>
                                        <td>Pisen</td>
                                    </tr>
                                    <tr>
                                        <td>Apple</td>
                                        <td>Divoom</td>
                                        <td>Plantronios</td>
                                        <td>realme</td>
                                        <td>Samsung</td>
                                    </tr>
                                    <tr>
                                        <td>Anker</td>
                                        <td></td>
                                        <td>Sennheiser</td>
                                        <td>Xiaomi</td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- hover smartHome -->
                    <div class="border border-1 hover_phone" id="hover_smartHome_id">
                        <div class="p-3">
                            <p><strong>GIA DỤNG THÔNG MINH</strong></p>
                            <p>Máy lọc không khí</p>
                            <p>Robot hút bụi</p>
                            <p>Phụ kiện gia dụng</p>
                            <p>FPT Play box</p>
                            <p>Cân thông minh</p>
                            <p>DTH/Tivi box K+</p>
                            <p>Khuyến mại đồ gia dụng Xiaomi</p>
                            <p>Máy chiếu, ổ cắm điện</p>
                            <p>Thiết vị định vị thông minh</p>
                            <p>Camera thông minh</p>
                        </div>
                    </div>
                    <!-- phụ kiện -->
                    <div class="border border-1 hover_phone" id="hover_accessory_id">
                        <div class="row p-3">
                            <div class="col-3">
                                <p><strong>XẢ TỒN PHỤ KIỆN - GIÁ SỐC</strong></p>
                                <p><strong>PHỤ KIỆN APPLE</strong></p>
                                <p><strong>PHỤ KIỆN MÁY TÍNH</strong></p>
                                <p><strong>SẠC DỰ PHÒNG</strong></p>
                                <p><strong>CỦ SẠC, MÁY TÍNH</strong></p>
                                <p><strong>GÓI BẢO HÀNH VIPCARE</strong></p>
                            </div>
                            <div class="col-2">
                                <p><strong>ROBOT HÚT BỤI</strong></p>
                                <p><strong>MÁY LỌC KHÔNG KHÍ</strong></p>
                                <p><strong>TAY CẦM CHỐNG RUNG</strong></p>
                                <p><strong>CAMERA HÀNH TRÌNH</strong></p>
                            </div>
                            <div class="col-2">
                                <p><strong>TÚI XÁCH</strong></p>
                                <p><strong>LOA</strong></p>
                                <p><strong>BÚT CẢM ỨNG</strong></p>
                                <p><strong>TAI NGHE</strong></p>
                                <p><strong>PHỤ KIỆN HỌC SINH</strong></p>
                            </div>
                            <div class="col-2">
                                <p><strong>DÂY ĐEO ĐỒNG HỒ</strong></p>
                                <p><strong>MIẾNG DÁN MÀN HÌNH</strong></p>
                                <p><strong>CAMERA AN NINH</strong></p>
                                <p><strong>THIẾT BỊ MẠNG</strong></p>
                            </div>
                            <div class="col-3">
                                <p><strong>THẺ NHỚ - USB</strong></p>
                                <p><strong>BAO DA - ỐP LƯNG</strong></p>
                                <p><strong>THAY PIN, MÀN HÌNH CHÍNH HÃNG</strong></p>
                                <p>Màn hình Iphone</p>
                                <p>pin Iphone</p>
                            </div>
                        </div>
                    </div>
                    <!-- Đồ chơi công nghệ -->
                    <div class="border border-1 hover_phone" id="hover_playGame_id">
                        <div class="p-3">
                            <table>
                                <thead>
                                    <th class="pb-3">ĐỒ CHƠI CÔNG NGHỆ</th>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <td class="p-1">Quạt để bàn</td>
                                    </tr>
                                    <tr>
                                        <td class="p-1">Dây đo nhịp tim</td>
                                    </tr>
                                    <tr>
                                        <td class="p-1">Tay cầm chống rung</td>
                                    </tr>
                                    <tr>
                                        <td class="p-1">Camera hành trình</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- máy trôi -->
                    <div class="border border-1 hover_phone" id="hover_mayTroi_id">
                        <div class="p-3">
                            <table class="w-100">
                                <thead>
                                    <th class="w-25 pb-3">HÀNG CŨ GIÁ RẺ</th>
                                    <th class="w-25"></th>
                                    <th class="w-25"></th>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <td>Điện thoại thông minh</td>
                                        <td>Đồng hồ thông minh</td>
                                        <td>Máy tính bảng</td>
                                    </tr>
                                    <tr>
                                        <td>Laptop</td>
                                        <td>Loa</td>
                                        <td>Tai nghe</td>
                                    </tr>
                                    <tr>
                                        <td>Camera</td>
                                        <td>Củ sạc</td>
                                        <td>Dây cáp</td>
                                    </tr>
                                    <tr>
                                        <td>Máy lọc không khí</td>
                                        <td>Phụ kiện</td>
                                        <td>Sạc dự phòng</td>
                                    </tr>
                                    <tr>
                                        <td>Tay cầm chống rung</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- sửa chữa -->
                    <div class="border border-1 hover_phone" id="hover_repair_id">
                        <div class="p-3">
                            <div>
                                <table class="w-100">
                                    <thead>
                                        <th class="pb-3">ANDROID</th>
                                        <th></th>
                                        <th>IPHONE</th>
                                        <th></th>
                                        <th>APPLE IPHONE</th>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <td>Pin</td>
                                            <td>Camera</td>
                                            <td>Camera trước</td>
                                            <td>Loa trong - Loa ngoài</td>
                                            <td>Pin</td>
                                        </tr>
                                        <tr>
                                            <td>Màn hình</td>
                                            <td>Vỏ và mặt lưng</td>
                                            <td>Vỏ - kính lưng</td>
                                            <td>Camera sau</td>
                                            <td>Cảm ứng</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>Màn hình</td>
                                            <td>Các loại cáp</td>
                                            <td>Màn hình</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- sim thẻ -->
                    <div class="border border-1 hover_phone" id="hover_sim_id">
                        <div class="p-3">
                            <p><strong>Sản phẩm hót</strong></p>
                        </div>
                    </div>
                    <!-- tin tức -->
                    <div></div>
                    <!-- Ưu đãi hót -->
                    <div class="border border-1 hover_phone" id="hover_flashSale_id">
                        <div class="p-3">
                            <p><strong>ƯU ĐÃI HÓT</strong></p>
                            <p>Khuyến mãi apple</p>
                            <p>Khuyến mãi đồng hồ</p>
                            <p>Khuyến mãi JBL, Harman Kardon</p>
                            <p>Khuyễn mãi laptop</p>
                            <p>Khuyến mãi LG</p>
                            <p>Khuyến mãi phụ kiện</p>
                            <p>Khuyến mãi Sony</p>
                            <p>Khuyến mại thiết bị đeo Xiaomi</p>
                            <p>Sản phẩm độc quyền</p>
                            <p>Sản phẩm mới apple</p>
                            <p>Top 5 tai nghe Bluetooth</p>
                            <p>Khuyến mãi Samsung</p>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!--end header nav hover -->
    </header>

    <section>
        <div class="container mt-3" style="padding-left: 35px; padding-right:45px">
            <i class="fa fa-home"></i> >
            <strong>Trang chủ</strong> >
            <strong>Điện thoại</strong> >
            <strong>Xiaomi</strong> >
            <strong>Redmi Note 10</strong> >
            <strong style="color:#009981">{{ $manager[1]->name_shopping_phone }}</strong>
        </div>
    </section>
    <section>
        <div class="container mt-3 d-flex flash_phone">
            <i class="fa-solid fa-bolt-lightning" style="margin-right: 10px"></i>
            <strong>Điện thoại di động {{ $manager[1]->name_shopping_phone }}</strong>
            <div class="mb-3 hour_phone" style="margin-left:20px">
                <strong class="bg-black text-white" id="first-hour"></strong>
                <strong class="bg-black text-white" id="last-hour"></strong>
                <span>:</span>
                <strong class="bg-black text-white" id="first-minutes"></strong>
                <strong class="bg-black text-white" id="last-minutes"></strong>
                <span>:</span>
                <strong class="bg-black text-white" id="first-seconds"></strong>
                <strong class="bg-black text-white" id="last-seconds"></strong>
            </div>
        </div>
    </section>

    <section>
        @yield('phone0')
        <div class="container mt-3 d-flex" style="padding-left: 35px; padding-right:45px">

            <div style="display: flex; flex-direction: column; align-items: center; width: 35%; margin-right:20px">
                <img class="w-75"
                    src="{{ asset('images/phone_noibat/' . $manager[1]->image_shopping_phone) }}">
                <div class="mt-3 d-flex align-items-center w-100 border border-1 justify-content-center">
                    <div class="border borrder-1 m-2">
                        <img style="height: 85px;" class="p-2"
                            src="{{ asset('images/phone_noibat/image-removebg-preview-3.png') }}">
                    </div>
                    <div class="border border-1 m-2">
                        <img style="height: 85px;" class="p-2"
                            src="{{ asset('images/phone_noibat/image-removebg-preview-3.png') }}">
                    </div>
                    <div class="border border-1 m-2">
                        <img style="height: 85px;" class="p-2"
                            src="{{ asset('images/phone_noibat/image-removebg-preview-3.png') }}">
                    </div>
                </div>
            </div>

            <div style="width: 45%; margin-right:20px" class="mb-5">
                <div>
                    <h4 class="d-inline"><strong
                            style="color: #FD475A">{{ $manager[1]->price_shopping_phone }}
                            <u>đ</u></strong></h4>
                    <del
                        style="margin-left:10px; margin-right:5px; padding-right:10px; border-right: 2px solid #A7A9AC"><em>{{ $manager[1]->sale_shopping_phone }}
                            <u>đ</u></em></del>
                    <em>Giá đã bao gồm 10% VAT</em>
                </div>
                <div class="w-100 d-flex justify-content-center text-white align-item-center"
                    style="background-color:#00483D;border-radius: 5px">
                    <div class="mt-1 mb-1">
                        <i class="fa fa-car"></i>
                        <span class="mt-3">Miễn phí vận chuyển toàn quốc</span>
                    </div>
                </div>
                <p class="mt-3"><strong>KHUYẾN MÃI</strong></p>
                <div class="mt-3 discount">
                    <label>
                        <span>KM 1</span>
                        Thanh toán qua VNPAY giảm thêm tới 500.000đ -
                        <strong>(Xem chi tiết)</strong>
                    </label>
                </div>
                <div class="mt-3 discount">
                    <label>
                        <span>KM 1</span>
                        Sản phẩm đang thuộc chương trình Flash sale (Số lượng có hạn)
                    </label>
                </div>
                <div class="mt-3 discount">
                    <label>
                        <span>KM 3</span>
                        Giảm thêm 300.000đ khi tham gia Thu cũ - Lên đời điện thoại Android -
                        <strong>(Xem chi tiết)</strong>
                    </label>
                </div>
                <div class="mt-3 discount">
                    <label>
                        <span>KM 4</span>
                        Tặng sim data Mobifone Hera 5G (2.5GB/ngày) ( Chưa bao gồm tháng đầu tiên) - Lưu ý: chỉ mua trực
                        tiếp tại cửa hàng, không áp dụng shop SIS Hà Nội. -
                        <strong>(Xem chi tiết)</strong>
                    </label>
                </div>
                <div class="mt-3 discount">
                    <label>
                        <span>KM 5</span>
                        Tặng sim data HeraPlus ưu đãi 6GB/ngày (Chưa bao gồm tháng đầu tiên) - Áp dụng khi mua hàng
                        online
                    </label>
                </div>
                <div class="mt-3 discount">
                    <label>
                        <span>KM 6</span>
                        Tặng 01 tháng cước thuê bao K+ App khi mua 2 tháng (Giá chỉ từ 53.000đ) - (
                        <strong>(Xem chi tiết)</strong>
                    </label>
                </div>

                <div class="mt-3 w-100 discount d-flex">
                    <a class="btn-red pt-1 pb-1 btn"
                        onclick="document.getElementById('button_phone').style.display='block'">
                        <strong class="d-block">MUA NGAY</strong>
                        <span>Giao tận nhà (COD) hoặc nhận tại cửa hàng</span>
                    </a>

                    <a class="btn-orange" href="{{ route('shoppingCart') }}">
                        <i class="fa fa-cart-arrow-down text-white"></i>
                    </a>
                </div>

            </div>

            <div style="width: 20%">

            </div>
        </div>
    </section>

    <section>
        <div class="container mb-5" style="padding-left: 35px; padding-right:45px;">
            <div class="mt-4 bg-white comment">
                <div class="p-5">
                    <h5><strong>Bình luận về Xiaomi Redmi Note 10 Pro 8GB/128GB - Chính hãng</strong></h5>
                    <div class="mt-4">
                        <form action="">
                            <div class="d-flex justify-content-between">
                                <div style="width:30%">
                                    <input class="w-100 p-4" type="text" name="username" placeholder="Họ tên *">
                                </div>

                                <div style="width:30%">
                                    <input class="w-100 p-4" type="number" name="phone"
                                        placeholder="Điện thoại *">
                                </div>

                                <div style="width:30%">
                                    <input class="w-100 p-4" type="email" name="email" placeholder="Email *">
                                </div>
                            </div>

                            <div>
                                <textarea name="comment" class="w-100 mt-4 p-2" rows="4" placeholder="Nội dung. Tối thiểu 15 kí tự"></textarea>
                            </div>

                            <div class="mt-4 d-flex justify-content-between">
                                <span><i>Để gửi bình luận, bạn cần nhập tối thiểu trường họ tên và nội dung</i></span>
                                <button>
                                    <i class="fa fa-telegram"></i>
                                    <span><strong>Gửi bình luận</strong></span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="mt-4 show-comment">
                        <div class="d-flex">
                            <div>
                                <img src="{{ asset('images/phone_noibat/no-avt.png') }}" />
                            </div>
                            <div class="mt-2">
                                <span class="d-block">username</span>
                                <span class="d-block mt-1">time</span>
                                <p class="mt-4">username comment</p>
                            </div>
                        </div>
                    </div>
                    <div class="admin-comment">
                        <div class="d-flex content">
                            <div>
                                <img class="border border-1"
                                    src="{{ asset('images/phone_noibat/20191107041149_6354e7b4-7cb7-460c-ae42-dc74bfc5defb.png') }}" />
                            </div>
                            <div class="mt-2">
                                <span class="d-block">userAdmin <i class="fa fa-check"></i> <span
                                        class="office">Chức vụ admin</span></span>
                                <span class="d-block mt-1">time</span>
                                <p class="mt-4">Admin comment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end Thông tin, địa chỉ -->

    <script type="text/javascript" src="{{ URL::asset('assets/js/top_slide.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/hover_phone.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/flashSale_hour.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/hover.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/top_slide.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/phone.js') }}"></script>

</body>

</html>
