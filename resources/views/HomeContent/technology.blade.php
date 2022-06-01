<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home content telephone</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="<?php echo asset('assets/bootstrap/css/bootstrap.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('assets/bootstrap/css/bootstrap.min.css') ?>" type="text/css">
    <script type="text/javascript" src="{{URL::asset('assets/bootstrap/js/bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>

    <link rel="stylesheet" href="<?php echo asset('assets/css/login.css') ?>" type="text/css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Content Wrapper. Contains page content -->
        <div style="margin-left: 50px;">

        <p class="mt-5"><strong>Tin công nghệ</strong></p>
            <div id="technology" class="w3-modal resgiter">
                <div class="item mb-5">
                    <div class="row">
                        <div class="img col-4 d-flex justify-content-center align-items-center">
                            <img src="{{ asset('images/login-bg.png') }}" alt="logo" />
                        </div>
                        <div class="col-1"></div>
                        <div class="col-6 content mt-5 mb-5">
                            <h2><strong>Thêm sản phẩm</strong></h2>
                            <span>Chú ý các nội dung có dấu * bạn cần phải nhập</span>

                            <form class="w-100" action="{{ route('technology.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div>
                                    <label><strong>name technology</strong></label>
                                    <input type="file" name="name_technology_file">
                                </div>

                                <div>
                                    <label><strong>name technology product</strong></label>
                                    <input type="text" name="name_technology_product">
                                </div>

                                <div class="mt-5 d-flex justify-content-center align-items-center">
                                    <button type="submit" class="btn">Add</button>
                                </div>
                            </form>

                        </div>
                        <div class="col-1">
                            <button class="w-100 border border-0 mt-3 bg-white" style="color:red" onclick="document.getElementById('technology').style.display='none'"><strong>X</strong></button>
                        </div>
                    </div>
                </div>
            </div>
            <form class="d-flex align-item-center mt-3 mb-3">
                <input class="w-25 border border-none outline-none" type="text" name="q" style="margin-right: 10px;">
                <button class="btn btn-info border border-0 p-2" style="margin-right: 10px;">Search</button>
                <a class="btn btn-success" onclick="document.getElementById('technology').style.display='block'">Add technology</a>
            </form>
            <table class="table table-bodered table-hover table-striped mt-3 mb-5">
                <thead>
                    <th>#</th>
                    <th>name technology</th>
                    <th>name technology product</th>
                    <th>Edit/Delete</th>
                </thead>
                <?php $no = 0 ?>

                @foreach($technology as $technologys)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td><img src="{{ asset('images/phukien/'.$technologys->name_technology) }}" style="height: 70px; width: 100px;"></td>
                    <td>{{ $technologys->name_technology_product }}</td>
                    <td>
                        <a class="btn btn-info">Edit</a>
                        <form class="d-inline" action="{{ route('technology.delete', $technologys->id) }}" method="POST" onsubmit="return confirm('Delete?')">
                            @csrf
                            @method("DELETE")
                            <button class="btn btn-success">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>

</html>
