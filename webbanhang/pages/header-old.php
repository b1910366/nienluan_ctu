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
<div class="header">
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container-fluid">
            <div class="container justify-content-center">
                <div class="row justify-content-between"> 
                    <div class="col justify-content-end">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse " id="collapsibleNavbar">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="sanpham.php">Sản phẩm</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="hoatchat.php">Hoạt chất</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="vechungtoi.html">Về chúng tôi</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col">
                        <a class="navbar-brand " href="sanpham.php"><img src="img/logo_andoquin.png"></a>
                    </div>
                </div>


            </div>

            <?php
            if (isset($_SESSION['dangnhapkh'])) {
            ?>
                <div class="dropdown mb-2 mt-2">
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
                <a role="button" class="btn btn-outline-primary me-2 text-center" href="dangky.php">Tài khoản</a>
            <?php
            }
            ?>
            <form class="d-flex" action="sanpham.php?quanly=timkiem" method="POST">
                <input class="form-control me-2" type="text" name="tukhoa" placeholder="Nhập tên sản phẩm...">
                <input role="button" class="btn btn-primary" type="submit" value="Tìm" name="timkiem"></input>
            </form>
            <a class="btn btn-warning ms-2" href="giohang.php" role="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                </svg>
            </a>

            <!-- <a class="dropdown-item text-secondary" href="giohang.php" role="button">Giỏ Hàng</a> -->
        </div>
    </nav>
</div>