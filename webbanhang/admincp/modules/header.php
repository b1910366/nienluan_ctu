<?php
//session_start();
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
    unset($_SESSION['dangnhap']);
    header("Location: dangnhap.php");
}
?>
<div class="admincp_list">
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <?php
                    if (isset($_SESSION['dangnhap'])) {
                    ?>
                        <div class="dropdown">
                            <a role="button" class="btn btn-outline-primary dropdown-toggle me-2" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php
                                echo $_SESSION['dangnhap'];
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
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Thống Kê</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=quanlydonhang&query=them">Quản lý Đơn hàng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=quanlydanhmucsanpham&query=them">Quản lý Danh mục Sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=quanlysanpham&query=them">Quản lý Sản phẩm</a>
                    </li>
                    <div>

                    </div>
                </ul>
            </div>
        </div>
    </nav>
</div>