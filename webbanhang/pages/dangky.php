<?php
include("../admincp/config/connect.php");
session_start();
if (isset($_POST['dangky'])) {
    $tenkhachhang = $_POST['hovaten'];
    $email = $_POST['email'];
    $dienthoai = $_POST['dienthoai'];
    $matkhau = md5($_POST['matkhau']);
    $diachi = $_POST['diachi'];
    $sql_dangky = mysqli_query($mysqli, "INSERT INTO khachhang (tenkhachhang, email, diachi, dienthoai, matkhau)
        VALUE ('" . $tenkhachhang . "', '" . $email . "', '" . $diachi . "', '" . $dienthoai . "', '" . $matkhau . "')");
    if ($sql_dangky) {
        echo
        '<div class="alert alert-success text-center">
            <strong>Thành Công!</strong> Lần tới dùng tài khoản này để Đăng nhập nhé.
        </div>';
        $_SESSION['dangky'] = $tenkhachhang;
        $_SESSION['diachi'] = $diachi;

        $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);


        header("Location: giohang.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" integrity="sha512-XWTTruHZEYJsxV3W/lSXG1n3Q39YIWOstqvmFsdNEEQfHoZ6vm6E9GK2OrF6DSJSpIbRbi+Nn0WDPID9O7xB2Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>

<body class="container-fluid">
    <div class="wrapper">
        <div class="header py-1 my-2">
            <div class="container-fluid text-center">
                <a class="navbar-brand" href="sanpham.php" alt="logo_andoquin"><img src="img/logo_andoquin.png"></a>
            </div>
        </div>
        <div class="main">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-9 col-xl-9">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center text-muted">ĐĂNG KÝ</h3>
                            
                            <!-- Form Đăng kí -->
                            <form action="" method="POST">
                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <label class="form-label" style="margin-left: 0px;">Họ và Tên</label>
                                            <input type="text" name="hovaten" class="form-control form-control-lg">
                                            <div class="form-notch">
                                                <div class="form-notch-leading" style="width: 9px;"></div>
                                                <div class="form-notch-middle" style="width: 70.4px;"></div>
                                                <div class="form-notch-trailing"></div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <label class="form-label" style="margin-left: 0px;">Di động</label>
                                            <input type="tel" name="dienthoai" class="form-control form-control-lg">
                                            <div class="form-notch">
                                                <div class="form-notch-leading" style="width: 9px;"></div>
                                                <div class="form-notch-middle" style="width: 69.6px;"></div>
                                                <div class="form-notch-trailing"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 mb-4 pb-2">

                                        <div class="form-outline">
                                            <label class="form-label" style="margin-left: 0px;">Địa chỉ</label>
                                            <input type="text" name="diachi" class="form-control form-control-lg">
                                            <div class="form-notch">
                                                <div class="form-notch-leading" style="width: 9px;"></div>
                                                <div class="form-notch-middle" style="width: 92.8px;"></div>
                                                <div class="form-notch-trailing"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!-- <div class="row">
                                    <div class="col-md-6 mb-4 d-flex align-items-center">

                                        <div class="form-outline datepicker w-100">
                                            <label for="birthdayDate" class="form-label" style="margin-left: 0px;">Ngày sinh</label>
                                            <input type="text" class="form-control form-control-lg" id="birthdayDate">
                                            <div class="form-notch">
                                                <div class="form-notch-leading" style="width: 9px;"></div>
                                                <div class="form-notch-middle" style="width: 55.2px;"></div>
                                                <div class="form-notch-trailing"></div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <h6 class="mb-2 pb-1">Giới tính: </h6>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="femaleGender" value="option1" checked="">
                                            <label class="form-check-label" for="femaleGender">Nữ</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="maleGender" value="option2">
                                            <label class="form-check-label" for="maleGender">Nam</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="otherGender" value="option3">
                                            <label class="form-check-label" for="otherGender">Khác</label>
                                        </div>

                                    </div>
                                </div> -->

                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <label class="form-label" style="margin-left: 0px;">Email</label>
                                            <input type="email" name="email" class="form-control form-control-lg">
                                            <div class="form-notch">
                                                <div class="form-notch-leading" style="width: 9px;"></div>
                                                <div class="form-notch-middle" style="width: 40px;"></div>
                                                <div class="form-notch-trailing"></div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <label class="form-label" style="margin-left: 0px;">Mật Khẩu</label>
                                            <input type="password" name="matkhau" class="form-control form-control-lg">
                                            <div class="form-notch">
                                                <div class="form-notch-leading" style="width: 9px;"></div>
                                                <div class="form-notch-middle" style="width: 92.8px;"></div>
                                                <div class="form-notch-trailing"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <p>Đã có tài khoản? <a href="dangnhap.php">Đăng nhập</a></p>
                                </div>

                                <div class="mt-4 pt-2">
                                    <input class="btn btn-primary btn-lg" name="dangky" type="submit" value="Đăng Ký">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include("footer.php");
        ?>
    </div>
</body>

</html>