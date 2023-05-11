<?php
session_start();

if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
    if (isset($_GET['dangxuat'])) {
        unset($_SESSION['dangkykh']);
        unset($_SESSION['dangnhapkh']);
        header("Location: dangky.php");
    }
}
?>

<header class="py border-bottom">
    <div class="container d-flex flex-wrap justify-content-center">
        <a href="sanpham.php" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
            <span class="fe-4">
                <img src="img/logo_andoquin.png">
            </span>
        </a>

        <form class="d-flex py-3" action="sanpham.php?quanly=timkiem" width="40" height="32" method="POST">
            <input class="form-control me-2" type="text" name="tukhoa" placeholder="Nhập tên sản phẩm...">
            <input role="button" class="btn btn-primary" type="submit" value="Tìm" name="timkiem"></input>
        </form>
        <a class="btn btn-warning ms-2 mb-3 mt-3" href="giohang.php" role="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
            </svg>
        </a>
    </div>
</header>
<nav class="py-2 bg-light border-bottom">
    <div class="container d-flex flex-wrap justify-content-center">
        <?php
        if (isset($_SESSION['dangnhapkh'])) {
        ?>
            <div class="dropdown mb-2 mt-2 d-flex flex-wrap justify-content-end">
                <a role="button" class="btn btn-outline-primary dropdown-toggle me-2" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php
                    echo $_SESSION['dangnhapkh'];
                    //echo $_SESSION['id_khachhang'];
                    ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <!-- <div class="dropdown-divider"></div> -->
                    <a class="dropdown-item text-danger" href="index.php?dangxuat=1">Đăng Xuất</a>
                </div>

            </div>
        <?php
        } elseif (isset($_SESSION['dangky'])) {
        ?>
            <div class="dropdown mb-2 mt-2">
                <a role="button" class="btn btn-outline-primary dropdown-toggle me-2" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php
                    echo $_SESSION['dangky'];
                    ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <!-- <div class="dropdown-divider"></div> -->
                    <a class="dropdown-item text-danger" href="index.php?dangxuat=1">Đăng Xuất</a>
                </div>
            </div>
        <?php
        } else {
        ?>
            <a role="button" class="btn btn-outline-primary me-2 text-center" href="dangnhap.php">Tài khoản</a>
        <?php
        }
        ?>
    </div>
</nav>
