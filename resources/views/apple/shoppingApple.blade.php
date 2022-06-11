<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shopping Cart</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://kit.fontawesome.com/c93a607241.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo asset('assets/css/phonecontent/shoppingCart.css'); ?>" type="text/css">
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
    @php
    $value = session()->get('apple');

    @endphp
    <header>
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
    </header>
    <section>
        <div class="container shopping_product d-flex">
            <div class="product">
                <div class="mt-5 back d-flex align-items-center">
                    <i class="fa-solid fa-angle-left"></i>
                    <span><strong>Quay lại</strong></span>
                </div>
                <div class="check mt-4 d-flex flex-column align-items-center">
                    <i class="fa-solid fa-circle-check"></i>
                    <p class="mt-3"><strong>Giỏ hàng</strong></p>
                </div>

                @foreach ($value as $valuess)
                    <div class="d-flex w-100 bg-white mb-3" style="border-radius: 10px;">
                        <div class="image mt-3 mb-3" style="display: flex; flex-direction: column">
                            <div>
                                <img src="{{ asset('images/box-home/' . $valuess->image_product) }}" alt="apple">
                            </div>
                            <span
                                style="padding-left: 20px;padding-right:20px"><strong>{{ $valuess->name_product }}</strong></span>
                            <div>
                                <strong class="price"> {{ $valuess->price }} <u>đ</u></strong>
                                <del>{{ $valuess->sale }} <u>đ</u></del>
                            </div>
                            <span class="d-block mt-1 mb-1">Số lượng</span>
                            <div class="w-100 d-flex justify-content-center">
                                <div class="mt-1 bt text-center">
                                    <form action="{{route('increment', $valuess->home_product_id)}}" method="post">
                                        @csrf
                                        <button>-</button>
                                    </form>

                                    <input type="text" value="{{ $valuess->total }}">

                                    <form action="{{route('decrement', $valuess->home_product_id)}}" method="post">
                                        @csrf
                                        <button>+</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="content mb-3">
                            <div class="sale mt-3">
                                <label>KM1</label>
                                <div class="border border-1 mt-2 p-2">
                                    <i class="fa-solid fa-circle-dot"></i>
                                    <span>Tặng sim data Mobifone Hera 5G (2.5GB/ngày) ( Chưa bao gồm tháng đầu tiên) -
                                        Lưu
                                        ý: chỉ mua trực tiếp tại cửa hàng, không áp dụng shop SIS Hà Nội.</span>
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
                                        khi
                                        mua hàng online</span>
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
                        <div class="shoppingCart_delete">
                            <form action="{{ route('shoppingApple.delete', $valuess->home_product_id) }}"
                                method="post">
                                @csrf
                                <button><strong>x</strong></button>
                            </form>
                        </div>
                    </div>
                @endforeach

                <div class="mt-3 w-100 bg-white mb-5 p-2 money" style="border-radius: 10px; font-size: 13px;">

                    <span><strong style="color: red">Tổng giá trị: <u> đ</u></strong></span>
                    <span><strong>Giảm giá: -00đ</strong></span>
                    <span><strong>Tổng thanh toán: 9,700,000 <u>đ</u></strong></span>
                    <span><i>Chín triệu bảy trăm nghìn đồng chẵn.</i></span>
                </div>

            </div>

            <div class="info">
                <h5 class="mb-4"><strong>Thông tin đặt hàng</strong></h5>
                <span><i>Bạn cần nhập đầy đủ các trường thông tin có dấu *</i></span>

                <form
                action="{{ route('button_shoppingApple') }}"
                class="buton_form" enctype="multipart/form-data"
                    method="post" class="mt-3">
                    @csrf
                    <div>
                        <input type="text" name="username" class="w-100 p-4" placeholder="Họ và tên *" required>
                    </div>

                    <div>
                        <input type="text" name="phone" class="w-100 p-4 mb-3 mt-3" placeholder="Số điện thoại *"
                            required>
                    </div>

                    <div class="d-flex justify-content-between">
                        <select name="city" class="p-3" required>
                            <option>Thành phố</option>
                            <option>Hà Nội</option>
                            <option>Hồ Chí Minh</option>
                        </select>
                        <select name="district" class="p-3" required>
                            <option value="">Quận/Huyện</option>
                            <option>Ba Đình</option>
                            <option>Thanh Xuân</option>
                        </select>
                    </div>

                    <div>
                        <input type="text" name="address" class="w-100 p-4 mb-3 mt-3" placeholder="Địa chỉ *" required>
                    </div>

                    <div>
                        <input type="email" name="email" class="w-100 p-4 mb-3" placeholder="Email *" required>
                    </div>

                    <div>
                        <textarea class="w-100 p-4" rows="3" name="note" placeholder="Ghi chú *"></textarea>
                    </div>

                    {{-- <div class="w-100 d-flex justify-content-center code_sale">
                        <input type="text" class="p-4 mb-3 mt-2" placeholder="Mã giảm giá nếu có">
                    </div> --}}

                    <div class="mt-4 w-100 d-flex justify-content-center confirm">
                        <button>Xác nhận đặt hàng</button>
                    </div>
                </form>
            </div>
    </section>
</body>

</html>
