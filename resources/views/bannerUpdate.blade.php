<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Product</title>

    <link rel="stylesheet" href="<?php echo asset('assets/css/login.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('assets/bootstrap/css/bootstrap.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('assets/bootstrap/css/bootstrap.min.css') ?>" type="text/css">
    <script type="text/javascript" src="{{URL::asset('assets/bootstrap/js/bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Content Wrapper. Contains page content -->
        <div style="margin-left: 100px;">
            <!-- Update icon -->
            <div id="icon" class="resgiter">
                <div class="item mb-5">
                    <div class="row">
                        <div class="col-10 content mt-5 mb-5">
                            <h2><strong>Update icon</strong></h2>
                            <form class="w-100" action="{{ route('banner.update', $banner[0]->id)}}">
                                @method('GET')
                                <div>
                                    <label><strong>name icon</strong></label>
                                    <input type="file" name="banner_image_file" value="{{ $banner[0]->banner_image_file }}">
                                </div>

                                <div class="mt-5 d-flex justify-content-center align-items-center">
                                    <button type="submit" class="btn">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- ./wrapper -->
</body>

</html>

