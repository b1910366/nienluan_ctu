<?php
include('../admincp/config/connect.php');
//session_start();
//unset($_SESSION['dangky']);
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
        <?php
        include("header.php");
        ?>
        <div class="main">
            <section class="h-100 gradient-custom">
                <div class="container py-5" style="width: fit";>
                    <div class="row d-flex justify-content-center my-4">
                        <div class="col-md-8">
                            <div class="card mb-4">
                                <div class="card-header py-3">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="mb-0">Giỏ hàng - Mã Khách:
                                                <?php
                                                if (isset($_SESSION['dangky']) || isset($_SESSION['dangnhapkh'])) {
                                                    echo $_SESSION['id_khachhang'];
                                                ?>
                                            </h5>
                                        </div>
                                        <div class="col d-flex flex-row-reverse">
                                            <a role="button" class="btn btn-danger btn-sm-4 me-1 mb-2" title="Remove item" href="sanpham/themgiohang.php?xoatatca=1">
                                                Xóa Tất Cả
                                            </a>
                                            <a role="button" class="btn btn-primary btn-sm-4 me-1 mb-2" title="Back" href="sanpham.php">
                                                <<< Tiếp tục mua sắm
                                            </a>
                                        </div>

                                    </div>

                                </div>
                                <div class="card-body">
                                    <div class="row">
                                    <h5>Giao hàng tới: </h5>
                                    <?php
                                                    $sql_giaohang = "SELECT * FROM khachhang WHERE id_khachhang = '" . $_SESSION['id_khachhang'] . "' LIMIT 1";
                                                    $query_giaohang = mysqli_query($mysqli, $sql_giaohang);
                                                    $row_giaohang = mysqli_fetch_array($query_giaohang);
                                    ?>
                                    <p><?php echo $row_giaohang['tenkhachhang']; ?>, <?php echo $row_giaohang['dienthoai']; ?>, <?php echo $row_giaohang['diachi']; ?></p>
                                    <a role="button" class="btn btn-warning btn-sm hover-shadow" href="edit.php?id_kh=<?php echo $row_giaohang['id_khachhang']?>">Thay đổi thông tin nhận hàng?</a>
                                    </div>
                                    
                                <?php
                                                }
                                ?>
                                <hr class="my-4" />
                                <?php
                                if (isset($_SESSION['cart'])) {
                                    $i = 0;
                                    $sum = 0;

                                    foreach ($_SESSION['cart'] as $cart_item) {
                                        $sum_single =  $cart_item['soluong'] * $cart_item['giasp'];
                                        $sum = $sum + $sum_single;
                                        $i++;
                                ?>
                                        <!-- Single item -->
                                        <div class="row">
                                            <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                                <!-- Image -->
                                                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                                                    <img src="../admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh'] ?>" class="w-100" alt="">
                                                    <a href="#!">
                                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                                    </a>
                                                </div>
                                                <!-- Image -->
                                            </div>

                                            <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                                                <!-- Data -->
                                                <p><strong><?php echo $cart_item['tensp'] ?></strong> - Còn:
                                                    <?php
                                                    $sql = "SELECT * FROM sanpham WHERE id_sp = '" . $cart_item['id_sp'] . "' LIMIT 1";
                                                    $query = mysqli_query($mysqli, $sql);
                                                    $row = mysqli_fetch_array($query);
                                                    echo $row['soluong'];
                                                    ?>
                                                </p>

                                                <a role="button" class="btn btn-danger btn-sm me-1 mb-2" title="Remove item" href="sanpham/themgiohang.php?xoa=<?php echo $cart_item['id_sp'] ?>">
                                                    Xóa
                                                </a>
                                                <!-- Data -->
                                            </div>

                                            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                                <!-- Quantity -->
                                                <div class="d-flex mb-4" style="max-width: 300px">
                                                    <a role="button" class="btn btn-primary px-3 me-2" href="sanpham/themgiohang.php?tru=<?php echo $cart_item['id_sp'] ?>">
                                                        -
                                                    </a>

                                                    <button type="button" class="btn btn-outline-dark"><?php echo $cart_item['soluong'] ?> </button>
                                                    <?php
                                                    if ($row['soluong'] > $cart_item['soluong']) {
                                                    ?>
                                                        <a role="button" class="btn btn-primary px-3 ms-2" href="sanpham/themgiohang.php?cong=<?php echo $cart_item['id_sp'] ?>">
                                                            +
                                                        </a>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                                <!-- Quantity -->

                                                <!-- Price -->
                                                <p class="text-start">
                                                    <strong><?php echo number_format($cart_item['giasp']) ?> VND </strong>
                                                </p>
                                                <!-- Price -->
                                            </div>
                                        </div>
                                        <!-- Single item -->

                                        <hr class="my-4" />
                                <?php
                                    }
                                } else {
                                    echo ("Không có gì trong giỏ");
                                }
                                ?>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-header py-3">
                                    <h5 class="mb-0">Tổng Tiền</h5>
                                </div>
                                <div class="card-body">

                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                            Sản Phẩm
                                            <span><?php if (isset($sum)) {
                                                        echo number_format($sum);
                                                    } else {
                                                        echo 0;
                                                    }  ?>
                                            </span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                            Shipping
                                            <span><?php if (isset($sum)) {
                                                        echo ("30,000");
                                                    } else {
                                                        echo 0;
                                                    }  ?>
                                            </span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                            <div>
                                                <strong>Thành Tiền</strong>
                                                <strong>
                                                    <p class="mb-0">(đã gồm VAT)</p>
                                                </strong>
                                            </div>
                                            <span>
                                                <strong>
                                                    <?php 
                                                    if (isset($sum)) {
                                                        echo number_format($sum + 30000);
                                                    } else {
                                                        echo 0;
                                                    }
                                                    ?> VND
                                                </strong>
                                            </span>
                                        </li>
                                    </ul>
                                    <?php
                                    if (isset($_SESSION['dangky']) || isset($_SESSION['dangnhapkh'])) {
                                    ?>
                                        <a role="button" href="sanpham/thanhtoan.php" class="btn btn-primary btn-lg btn-block">
                                            Đặt Hàng
                                        </a>
                                    <?php
                                    } else {
                                    ?>
                                        <a role="button" href="dangky.php" class="btn btn-primary btn-lg btn-block">
                                            Điền địa chỉ
                                        </a>
                                    <?php
                                    }
                                    ?>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="footer">
            <footer class="py-3 my-4">
                <p class="text-center text-muted">© Bản quyền thuộc về ANDO QUIN</p>
            </footer>
        </div>
    </div>

</body>

</html>