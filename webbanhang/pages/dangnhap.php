<?php
session_start();
include('../admincp/config/connect.php');
if(isset($_POST['dangnhapkh'])) {
    $email = $_POST['email'];
    $pass = md5($_POST['password']);
    $sql = "SELECT * FROM khachhang WHERE email='".$email."' AND matkhau='".$pass."' LIMIT 1";
    $row = mysqli_query($mysqli, $sql);
    $count = mysqli_num_rows($row);
    if ($count > 0) {
        $row_data = mysqli_fetch_array($row);
        $_SESSION['dangnhapkh'] = $row_data['tenkhachhang'];
        
        $_SESSION['id_khachhang'] = $row_data['id_khachhang'];
        header("Location: sanpham.php");
    } else {    
        echo '
        <div class="alert alert-danger">
        <strong>Thất bại!</strong> Kiểm tra lại Email hoặc Mật Khẩu!
        </div>'  ;
        header("Location: dangnhap.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"
        integrity="sha512-XWTTruHZEYJsxV3W/lSXG1n3Q39YIWOstqvmFsdNEEQfHoZ6vm6E9GK2OrF6DSJSpIbRbi+Nn0WDPID9O7xB2Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            
            <section class="pb-4">
                <div class="bg-white border rounded-5">
                    <h2 class="text-muted text-center py-2 my-2">ĐĂNG NHẬP</h2>

                    <section class="w-100 p-4 d-flex justify-content-center pb-4">
                        <form style="width: 35rem;" action="" method="POST">
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example1" style="margin-left: 0px;">Email</label>
                                <input type="email" autocomplete="off" id="form2Example1" class="form-control" name="email">
                                
                                <div class="form-notch">
                                    <div class="form-notch-leading" style="width: 9px;"></div>
                                    <div class="form-notch-middle" style="width: 88.8px;"></div>
                                    <div class="form-notch-trailing"></div>
                                </div>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example2" style="margin-left: 0px;">Mật khẩu</label>
                                <input type="password" autocomplete="off" id="form2Example2" class="form-control" name="password">
                                
                                <div class="form-notch">
                                    <div class="form-notch-leading" style="width: 9px;"></div>
                                    <div class="form-notch-middle" style="width: 64px;"></div>
                                    <div class="form-notch-trailing"></div>
                                </div>
                            </div>

                            <!-- 2 column grid layout for inline styling -->
                            <!-- <div class="row mb-4">
                                <div class="col d-flex justify-content-center"> -->
                                    <!-- Checkbox -->
                                    <!-- <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="form2Example31"
                                            checked="">
                                        <label class="form-check-label" for="form2Example31"> Ghi nhớ đăng nhập </label>
                                    </div>
                                </div> -->

                                <!-- <div class="col"> -->
                                    <!-- Simple link -->
                                    <!-- <a href="#!">Bạn quên mật khẩu?</a>
                                </div>
                            </div> -->

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4" name="dangnhapkh">Đăng nhập</button>

                            <!-- Register buttons -->
                            <div class="text-center">
                                <p>Chưa có tài khoản? <a href="dangky.php">Đăng ký</a></p>
                                <!-- <p>Đăng nhập với:</p>
                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-facebook-f"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-google"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-twitter"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-github"></i>
                                </button> -->
                            </div>
                        </form>
                    </section>
            </section>
        </div>
        <?php
        include("footer.php");
        ?>
    </div>
</body>

</html>