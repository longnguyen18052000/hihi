<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Phone_content phone 0</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/c93a607241.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="<?php echo asset('assets/css/phonecontent/shoppingCart.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('assets/css/phonecontent/phone0.css'); ?>" type="text/css">
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
                <span><a href="#">B???n mobile</a></span>
                <span><a href="#">Gi???i thi???u</a></span>
                <span><a href="#">S???n ph???m ???? xem</a></span>
                <span><a href="#">Trung t??m b???o h??nh</a></span>
                <span><a href="#">H??? th???ng 99 si??uu th???</a></span>
                <span><a href="#">Tuy???n d???ng</a></span>
                <span><a href="#">Tra c???u ????n h??ng</a></span>
                <span><a href="#" onclick="document.getElementById('login').style.display='block'">????ng nh???p</a></span>
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
                                placeholder="H??m nay b???n c???n t??m g???" />
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
                            <span>Ki???m tra ????n h??ng</span>
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
                            src="{{ asset('images/box-home/' . $apple[0]->image_product) }}" alt="apple">
                        <span><strong>{{ $apple[0]->name_product }}</strong></span>
                        <span style="color: #aaa;"><strong>??en</strong></span>
                        <div class="mt-2 mb-2">
                            <i class="fa-solid fa-bolt-lightning button_i"></i>
                            <strong class="button_price">{{ $apple[0]->price }}</strong>
                            <del>{{ $apple[0]->sale }}</del>
                        </div>

                        <div class="content mb-3">

                            <div class="sale mt-3">
                                <label>KM1</label>
                                <div class="border border-1 mt-2 p-2">
                                    <i class="fa-solid fa-circle-dot"></i>
                                    <span>T???ng sim data Mobifone Hera 5G (2.5GB/ng??y) ( Ch??a bao g???m th??ng ?????u ti??n) -
                                        L??u ??: ch??? mua tr???c ti???p t???i c???a h??ng, kh??ng ??p d???ng shop SIS H?? N???i.</span>
                                </div>
                            </div>

                            <div class="sale mt-3">
                                <label>KM2</label>
                                <div class="border border-1 mt-2 p-2">
                                    <i class="fa-solid fa-circle-dot"></i>
                                    <span>Thanh to??n qua VNPAY gi???m th??m t???i 500.000??</span>
                                </div>
                            </div>

                            <div class="sale mt-3">
                                <label>KM3</label>
                                <div class="border border-1 mt-2 p-2">
                                    <i class="fa-solid fa-circle-dot"></i>
                                    <span>S???n ph???m ??ang thu???c ch????ng tr??nh Flash sale (S??? l?????ng c?? h???n)</span>
                                </div>
                            </div>

                            <div class="sale mt-3">
                                <label>KM4</label>
                                <div class="border border-1 mt-2 p-2">
                                    <i class="fa-solid fa-circle-dot"></i>
                                    <span>Gi???m th??m 300.000?? khi tham gia Thu c?? - L??n ?????i ??i???n tho???i Android </span>
                                </div>
                            </div>

                            <div class="sale mt-3">
                                <label>KM5</label>
                                <div class="border border-1 mt-2 p-2">
                                    <i class="fa-solid fa-circle-dot"></i>
                                    <span>T???ng sim data HeraPlus ??u ????i 6GB/ng??y (Ch??a bao g???m th??ng ?????u ti??n) - ??p d???ng
                                        khi mua h??ng online</span>
                                </div>
                            </div>

                            <div class="sale mt-3">
                                <label>KM6</label>
                                <div class="border border-1 mt-2 p-2">
                                    <i class="fa-solid fa-circle-dot"></i>
                                    <span>T???ng 01 th??ng c?????c thu?? bao K+ App khi mua 2 th??ng (Gi?? ch??? t??? 53.000??)</span>
                                </div>
                            </div>

                            <div class="mt-3 text-center hotline">
                                <button class="w-25 p-2 mb-3 border border-none">
                                    <i class="fa-solid fa-headphones text-white"></i>
                                    <span>1900.2091</span>
                                </button>
                                <p><i>Ph??m 1 - Hotline b??n h??ng online</i></p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="product mt-4">
                    <h5><strong>?????t h??ng s???n ph???m</strong></h5>
                    <span class="mt-2"><strong>Ch???n m??u s???c</strong></span>
                    <div class="d-flex select_color mb-3">
                        <div class="border border-1">
                            <label class="p-2">
                                <i class="fa-solid fa-circle-check"></i>
                                <span><strong>??en</strong></span>
                                <span class="d-block"><strong>4,850,000 ???</strong></span>
                            </label>
                        </div>
                        <div class="border border-1 m-x-2" style="margin:0px 10px">
                            <label class="p-2">
                                <i class="fa-solid fa-circle-check"></i>
                                <span><strong>Xanh</strong></span>
                                <span class="d-block"><strong>4,850,000 ???</strong></span>
                            </label>
                        </div>
                        <div class="border border-1">
                            <div class="p-2">
                                <label>
                                    <i class="fa-solid fa-circle-check"></i>
                                    <span><strong>Cam</strong></span>
                                    <span class="d-block"><strong>4,850,000 ???</strong></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <span>S??? l?????ng</span>
                    <div class="mt-2 amount">
                        <button>-</button>
                        <input class="text-center" type="text" value="1">
                        <button>+</button>
                    </div>

                    <div class="mt-3 btn-submit">
                        <form
                        {{-- action="{{ route('phonecontent_product.phone0', ['id' => $manager[0]->id]) }}" --}}
                        enctype="multipart/form-data" method="post">
                            @csrf
                            <div>
                                <label><strong>H??? t??n</strong></label>
                                <input type="text" name="username" style="background: #e5e5e5; border-radius: 10px"
                                    class="w-100 border border-1 p-3" placeholder="Nh???p h??? v?? t??n*" required>
                            </div>

                            <div class="d-flex justify-content-between mt-3 mb-3">
                                <div style="width: 49%">
                                    <label class="d-block"><strong>S??? ??i???n tho???i</strong></label>
                                    <input type="number" class="w-100 p-3 border border-1" name="phone" style="background: #e5e5e5; border-radius: 10px"
                                        placeholder="s??? ??i???n tho???i*" required>
                                </div>

                                <div style="width: 49%">
                                    <label class="d-block"><strong>Email</strong></label>
                                    <input type="email" class="w-100 p-3 border border-1" name="email" style="background: #e5e5e5; border-radius: 10px"
                                        placeholder="Nh???p emai*" required>
                                </div>
                            </div>

                            <div>
                                <span><strong>H??nh th???c nh???n h??ng</strong></span>
                                <div class="d-flex justify-content-between w-100 nhanhang mb-3">
                                    <div class="d-flex align-items-center border border-1">
                                        <i id="nhanhang1" class="fa-solid fa-circle-dot"></i>
                                        <span><strong>Nh???n h??ng t???i nh??</strong></span>
                                    </div>
                                    <div class="f-flex align-items-center border border-1">
                                        <i id="nhanhang2" class="fa-solid fa-circle-dot"></i>
                                        <span><strong>Nh???n h??ng t???i c???a h??ng</strong></span>
                                    </div>
                                </div>
                            </div>

                            <div style="display: block">
                                <span><strong>?????a ch???</strong></span>
                                <div>
                                    <div class="d-flex justify-content-between">
                                        <select name="city" required style="width: 49%">
                                            <option>H?? n???i</option>
                                            <option>TP H??? Ch?? Minh</option>
                                            <option>Th??i B??nh</option>
                                            <option>Nam ?????nh</option>
                                        </select>
                                        <select name="district" required style="width: 49%">
                                            <option>Qu???n/Huy???n</option>
                                            <option>Ba ????nh</option>
                                            <option>Ho??n Ki???m</option>
                                            <option>T??y H???</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <input type="text" id="address" name="address" class="w-100 mt-2 p-3 border border-none" style="background: #e5e5e5; border-radius: 10px" placeholder="?????a ch??? nh???n h??ng">

                            <textarea class="w-100 p-3 mt-2 mb-3" rows="4" name="note" placeholder="Ghi ch??"></textarea>

                            <div class="w-100 text-center">
                                <p><i>B???ng c??ch ?????t h??ng b???n ???? ?????ng ?? v???i ??i???u kho???n s??? d???ng v?? ch??nh s??ch ?????i tr???</i>
                                </p>
                            </div>

                            <div class="mt-4 w-100 text-center">
                                <button class="text-white pt-3 pb-2">
                                    <h6><strong>TI???N H??NH ?????T H??NG</strong></h6>
                                </button>
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
                            <span>??I???N THO???I</span>
                            <label></label>
                        </a>
                        <a href="#" id="hover_watch">
                            <span><i class="fa-solid fa-clock"></i></span>
                            <span>?????NG H???</span>
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
                            <span>??M THANH</span>
                            <label></label>
                        </a>
                        <a href="#" id="hover_smartHome">
                            <span><i class="fa-solid fa-house"></i></span>
                            <span>SMART HOME</span>
                            <label></label>
                        </a>
                        <a href="#" id="hover_accessory">
                            <span><i class="fa-solid fa-charging-station"></i></span>
                            <span>PH??? KI???N</span>
                            <label></label>
                        </a>
                        <a href="#" id="hover_playGame">
                            <span><i class="fa-solid fa-gamepad"></i></span>
                            <span>????? CH??I C??NG NGH???</span>
                            <label></label>
                        </a>
                        <a href="#" id="hover_mayTroi">
                            <span><i class="fa-solid fa-phone"></i></span>
                            <span>M??Y TR??I</span>
                            <label></label>
                        </a>
                        <a href="#" id="hover_repair">
                            <span><i class="fa-solid fa-screwdriver-wrench"></i></span>
                            <span>S???A CH???A</span>
                            <label></label>
                        </a>
                        <a href="#" id="hover_sim">
                            <span><i class="fa-solid fa-sim-card"></i></span>
                            <span>SIM TH???</span>
                            <label></label>
                        </a>
                        <a href="#">
                            <span><i class="fa-solid fa-newspaper"></i></span>
                            <span>TIN T???C</span>
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
                                        <th>H??NG S???N XU???T</th>
                                        <th></th>
                                        <th></th>
                                        <th>M???C GI??</th>
                                        <th>QUAN T??M NH???T</th>
                                    </thead>

                                    <tfoot>
                                        <tr>
                                            <td>Iphone</td>
                                            <td>XOR</td>
                                            <td>Samsung</td>
                                            <td>Tr??n 100 tri???u</td>
                                            <td>H??m nay</td>
                                        </tr>
                                        <tr>
                                            <td>Xiaomi</td>
                                            <td>Reamle</td>
                                            <td>Nokia</td>
                                            <td>D?????i 100 tri???u</td>
                                            <td>Tu???n n??y</td>
                                        </tr>
                                        <tr>
                                            <td>OPPO</td>
                                            <td>Blackberry</td>
                                            <td>Vivo</td>
                                            <td>T??? 2 ?????n 3 tri???u</td>
                                            <td>Th??ng n??y</td>
                                        </tr>
                                        <tr>
                                            <td>Energizer</td>
                                            <td>Masstel</td>
                                            <td>Philips</td>
                                            <td>T??? 3 ?????n 4 tri???u</td>
                                            <td>Th??ng n??y</td>
                                        </tr>
                                        <tr>
                                            <td>Itel</td>
                                            <td>Bphone</td>
                                            <td>TECNO</td>
                                            <td>T??? 6 ?????n 8 tri???u</td>
                                            <td>N??m nay</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>T??? 15 ?????n 20 tri???u</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><b>??I???N THO???I CAO C???P</b></td>
                                            <td></td>
                                            <td></td>
                                            <td>T??? 20 ?????n 100 tri???u</td>
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
                                    <th>?????NG H???</th>
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
                                        <td>?????ng h??? tr??? em</td>
                                        <td>Huawei</td>
                                    </tr>
                                    <tr>
                                        <td>Masstel</td>
                                        <td>OPPO</td>
                                        <td>realme</td>
                                        <td>SoundPEATS</td>
                                    </tr>
                                    <tr>
                                        <td>Top ?????ng h??? th??ng minh</td>
                                        <td>Top v??ng ??eo tay</td>
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
                                        <th class="w-25">H??NG S???N XU???T</th>
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
                                        <th class="w-50">PH??N LO???I S???N PH???M</th>
                                        <th class="w-50">M???C GI??</th>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <td>Cao c???p - Sang tr???ng</td>
                                            <td>Tr??n 20 tri???u</td>
                                        </tr>
                                        <tr>
                                            <td>????? h???a - K?? thu???t</td>
                                            <td>T??? 12 ?????n 15 tri???u</td>
                                        </tr>
                                        <tr>
                                            <td>H???c t???p - V??n ph??ng</td>
                                            <td>T??? 15 ?????n 20 tri???u</td>
                                        </tr>
                                        <tr>
                                            <td>Laptop Gaming</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>M???ng nh???</td>
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
                                    <th class="w-25 pb-2">H??ng s???n xu???t</th>
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
                                        <td>S??mung</td>
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
                                        <td>Loa mic c???m tay</td>
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
                            <p><strong>GIA D???NG TH??NG MINH</strong></p>
                            <p>M??y l???c kh??ng kh??</p>
                            <p>Robot h??t b???i</p>
                            <p>Ph??? ki???n gia d???ng</p>
                            <p>FPT Play box</p>
                            <p>C??n th??ng minh</p>
                            <p>DTH/Tivi box K+</p>
                            <p>Khuy???n m???i ????? gia d???ng Xiaomi</p>
                            <p>M??y chi???u, ??? c???m ??i???n</p>
                            <p>Thi???t v??? ?????nh v??? th??ng minh</p>
                            <p>Camera th??ng minh</p>
                        </div>
                    </div>
                    <!-- ph??? ki???n -->
                    <div class="border border-1 hover_phone" id="hover_accessory_id">
                        <div class="row p-3">
                            <div class="col-3">
                                <p><strong>X??? T???N PH??? KI???N - GI?? S???C</strong></p>
                                <p><strong>PH??? KI???N APPLE</strong></p>
                                <p><strong>PH??? KI???N M??Y T??NH</strong></p>
                                <p><strong>S???C D??? PH??NG</strong></p>
                                <p><strong>C??? S???C, M??Y T??NH</strong></p>
                                <p><strong>G??I B???O H??NH VIPCARE</strong></p>
                            </div>
                            <div class="col-2">
                                <p><strong>ROBOT H??T B???I</strong></p>
                                <p><strong>M??Y L???C KH??NG KH??</strong></p>
                                <p><strong>TAY C???M CH???NG RUNG</strong></p>
                                <p><strong>CAMERA H??NH TR??NH</strong></p>
                            </div>
                            <div class="col-2">
                                <p><strong>T??I X??CH</strong></p>
                                <p><strong>LOA</strong></p>
                                <p><strong>B??T C???M ???NG</strong></p>
                                <p><strong>TAI NGHE</strong></p>
                                <p><strong>PH??? KI???N H???C SINH</strong></p>
                            </div>
                            <div class="col-2">
                                <p><strong>D??Y ??EO ?????NG H???</strong></p>
                                <p><strong>MI???NG D??N M??N H??NH</strong></p>
                                <p><strong>CAMERA AN NINH</strong></p>
                                <p><strong>THI???T B??? M???NG</strong></p>
                            </div>
                            <div class="col-3">
                                <p><strong>TH??? NH??? - USB</strong></p>
                                <p><strong>BAO DA - ???P L??NG</strong></p>
                                <p><strong>THAY PIN, M??N H??NH CH??NH H??NG</strong></p>
                                <p>M??n h??nh Iphone</p>
                                <p>pin Iphone</p>
                            </div>
                        </div>
                    </div>
                    <!-- ????? ch??i c??ng ngh??? -->
                    <div class="border border-1 hover_phone" id="hover_playGame_id">
                        <div class="p-3">
                            <table>
                                <thead>
                                    <th class="pb-3">????? CH??I C??NG NGH???</th>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <td class="p-1">Qu???t ????? b??n</td>
                                    </tr>
                                    <tr>
                                        <td class="p-1">D??y ??o nh???p tim</td>
                                    </tr>
                                    <tr>
                                        <td class="p-1">Tay c???m ch???ng rung</td>
                                    </tr>
                                    <tr>
                                        <td class="p-1">Camera h??nh tr??nh</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- m??y tr??i -->
                    <div class="border border-1 hover_phone" id="hover_mayTroi_id">
                        <div class="p-3">
                            <table class="w-100">
                                <thead>
                                    <th class="w-25 pb-3">H??NG C?? GI?? R???</th>
                                    <th class="w-25"></th>
                                    <th class="w-25"></th>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <td>??i???n tho???i th??ng minh</td>
                                        <td>?????ng h??? th??ng minh</td>
                                        <td>M??y t??nh b???ng</td>
                                    </tr>
                                    <tr>
                                        <td>Laptop</td>
                                        <td>Loa</td>
                                        <td>Tai nghe</td>
                                    </tr>
                                    <tr>
                                        <td>Camera</td>
                                        <td>C??? s???c</td>
                                        <td>D??y c??p</td>
                                    </tr>
                                    <tr>
                                        <td>M??y l???c kh??ng kh??</td>
                                        <td>Ph??? ki???n</td>
                                        <td>S???c d??? ph??ng</td>
                                    </tr>
                                    <tr>
                                        <td>Tay c???m ch???ng rung</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- s???a ch???a -->
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
                                            <td>Camera tr?????c</td>
                                            <td>Loa trong - Loa ngo??i</td>
                                            <td>Pin</td>
                                        </tr>
                                        <tr>
                                            <td>M??n h??nh</td>
                                            <td>V??? v?? m???t l??ng</td>
                                            <td>V??? - k??nh l??ng</td>
                                            <td>Camera sau</td>
                                            <td>C???m ???ng</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>M??n h??nh</td>
                                            <td>C??c lo???i c??p</td>
                                            <td>M??n h??nh</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- sim th??? -->
                    <div class="border border-1 hover_phone" id="hover_sim_id">
                        <div class="p-3">
                            <p><strong>S???n ph???m h??t</strong></p>
                        </div>
                    </div>
                    <!-- tin t???c -->
                    <div></div>
                    <!-- ??u ????i h??t -->
                    <div class="border border-1 hover_phone" id="hover_flashSale_id">
                        <div class="p-3">
                            <p><strong>??U ????I H??T</strong></p>
                            <p>Khuy???n m??i apple</p>
                            <p>Khuy???n m??i ?????ng h???</p>
                            <p>Khuy???n m??i JBL, Harman Kardon</p>
                            <p>Khuy???n m??i laptop</p>
                            <p>Khuy???n m??i LG</p>
                            <p>Khuy???n m??i ph??? ki???n</p>
                            <p>Khuy???n m??i Sony</p>
                            <p>Khuy???n m???i thi???t b??? ??eo Xiaomi</p>
                            <p>S???n ph???m ?????c quy???n</p>
                            <p>S???n ph???m m???i apple</p>
                            <p>Top 5 tai nghe Bluetooth</p>
                            <p>Khuy???n m??i Samsung</p>
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
            <strong>Trang ch???</strong> >
            <strong>??i???n tho???i</strong> >
            <strong>Xiaomi</strong> >
            <strong>Redmi Note 10</strong> >
            <strong style="color:#009981">{{ $apple[0]->name_product }}</strong>
        </div>
    </section>

    <section>
        <div class="container mt-3 d-flex flash_phone">
            <i class="fa-solid fa-bolt-lightning" style="margin-right: 10px"></i>
            <strong>??i???n tho???i di ?????ng {{ $apple[0]->name_product }}</strong>
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
        <div class="container mt-3 d-flex" style="padding-left: 35px; padding-right:45px">
            <div style="display: flex; flex-direction: column; align-items: center; width: 35%; margin-right:20px">
                <img class="w-75"
                    src="{{ asset('images/box-home/' . $apple[0]->image_product) }}" alt="apple">
                <div class="mt-3 d-flex align-items-center w-100 border border-1 justify-content-center">
                    <div class="border borrder-1 m-2">
                        <img style="height: 85px;" class="p-2"
                        src="{{ asset('images/box-home/' . $apple[0]->image_product) }}" alt="apple">
                    </div>
                    <div class="border border-1 m-2">
                        <img style="height: 85px;" class="p-2"
                        src="{{ asset('images/box-home/' . $apple[0]->image_product) }}" alt="apple">
                    </div>
                    <div class="border border-1 m-2">
                        <img style="height: 85px;" class="p-2"
                        src="{{ asset('images/box-home/' . $apple[0]->image_product) }}" alt="apple">
                    </div>
                </div>
            </div>

            <div style="width: 45%; margin-right:20px" class="mb-5">
                <div>
                    <h4 class="d-inline"><strong style="color: #FD475A">
                            {{ $apple[0]->price }}
                            <u>??</u></strong></h4>
                    <del
                        style="margin-left:10px; margin-right:5px; padding-right:10px; border-right: 2px solid #A7A9AC"><em>{{ $apple[0]->sale }}
                            <u>??</u></em></del>
                    <em>Gi?? ???? bao g???m 10% VAT</em>
                </div>
                <div class="w-100 d-flex justify-content-center text-white align-item-center"
                    style="background-color:#00483D;border-radius: 5px">
                    <div class="mt-1 mb-1">
                        <i class="fa fa-car"></i>
                        <span class="mt-3">Mi???n ph?? v???n chuy???n to??n qu???c</span>
                    </div>
                </div>
                <p class="mt-3"><strong>KHUY???N M??I</strong></p>
                <div class="mt-3 discount">
                    <label>
                        <span>KM 1</span>
                        Thanh to??n qua VNPAY gi???m th??m t???i 500.000?? -
                        <strong>(Xem chi ti???t)</strong>
                    </label>
                </div>
                <div class="mt-3 discount">
                    <label>
                        <span>KM 1</span>
                        S???n ph???m ??ang thu???c ch????ng tr??nh Flash sale (S??? l?????ng c?? h???n)
                    </label>
                </div>
                <div class="mt-3 discount">
                    <label>
                        <span>KM 3</span>
                        Gi???m th??m 300.000?? khi tham gia Thu c?? - L??n ?????i ??i???n tho???i Android -
                        <strong>(Xem chi ti???t)</strong>
                    </label>
                </div>
                <div class="mt-3 discount">
                    <label>
                        <span>KM 4</span>
                        T???ng sim data Mobifone Hera 5G (2.5GB/ng??y) ( Ch??a bao g???m th??ng ?????u ti??n) - L??u ??: ch??? mua tr???c
                        ti???p t???i c???a h??ng, kh??ng ??p d???ng shop SIS H?? N???i. -
                        <strong>(Xem chi ti???t)</strong>
                    </label>
                </div>
                <div class="mt-3 discount">
                    <label>
                        <span>KM 5</span>
                        T???ng sim data HeraPlus ??u ????i 6GB/ng??y (Ch??a bao g???m th??ng ?????u ti??n) - ??p d???ng khi mua h??ng
                        online
                    </label>
                </div>
                <div class="mt-3 discount">
                    <label>
                        <span>KM 6</span>
                        T???ng 01 th??ng c?????c thu?? bao K+ App khi mua 2 th??ng (Gi?? ch??? t??? 53.000??) -
                        <strong>(Xem chi ti???t)</strong>
                    </label>
                </div>

                <div class="mt-3 w-100 discount d-flex justify-content-between">
                    <a class="btn-red pt-1 pb-1 btn"
                        onclick="document.getElementById('button_phone').style.display='block'">
                        <strong class="d-block">MUA NGAY</strong>
                        <span>Giao t???n nh?? (COD) ho???c nh???n t???i c???a h??ng</span>
                    </a>

                    <form class="btn-orange"
                        action="{{ route('shoppingApple.apple0', ['home_product_id' => $apple[0]->home_product_id]) }}"
                        method="post">
                        @csrf
                        <button>
                            <i class="fa fa-cart-arrow-down text-white"></i>
                        </button>
                    </form>

                </div>
                {{-- @if(session('success'))
                <p class="alert alert-info">{{session('success')}}</p>
                @endif --}}
            </div>

            <div style="width: 20%">
            </div>
        </div>
    </section>

    <section>
        <div class="container mb-5" style="padding-left: 35px; padding-right:45px;">
            <div class="mt-4 bg-white comment">
                <div class="p-5">
                    <h5><strong>B??nh lu???n v??? Xiaomi Redmi Note 10 Pro 8GB/128GB - Ch??nh h??ng</strong></h5>
                    <div class="mt-4">
                        <form action="">
                            <div class="d-flex justify-content-between">
                                <div style="width:30%">
                                    <input class="w-100 p-4" type="text" name="username" placeholder="H??? t??n *">
                                </div>

                                <div style="width:30%">
                                    <input class="w-100 p-4" type="number" name="phone"
                                        placeholder="??i???n tho???i *">
                                </div>

                                <div style="width:30%">
                                    <input class="w-100 p-4" type="email" name="email" placeholder="Email *">
                                </div>
                            </div>

                            <div>
                                <textarea name="comment" class="w-100 mt-4 p-4" rows="3" style="font-size: 13px" placeholder="N???i dung. T???i thi???u 15 k?? t???"></textarea>
                            </div>

                            <div class="mt-4 d-flex justify-content-between">
                                <span><i>????? g???i b??nh lu???n, b???n c???n nh???p t???i thi???u tr?????ng h??? t??n v?? n???i dung</i></span>
                                <button>
                                    <i class="fa fa-telegram"></i>
                                    <span><strong>G???i b??nh lu???n</strong></span>
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
                                        class="office">Ch???c v??? admin</span></span>
                                <span class="d-block mt-1">time</span>
                                <p class="mt-4">Admin comment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end Th??ng tin, ?????a ch??? -->
    <script type="text/javascript" src="{{ URL::asset('assets/js/flashSale_hour.js') }}"></script>

    <script type="text/javascript">
        let address = document.getElementById('address');
        let nhanhang1 = document.getElementById('nhanhang1');
        let nhanhang2 = document.getElementById('nhanhang2');

        nhanhang1.addEventListener('click', function(){
            address.style.display = 'block';
            nhanhang1.style.color = '#009981';
            nhanhang2.style.color = 'black';
        });

        nhanhang2.addEventListener('click', function(){
            address.style.display = 'none';
            nhanhang1.style.color = 'black';
            nhanhang2.style.color = '#009981';
        });
    </script>
</body>

</html>
