<?php
$sql_danhmuc = "SELECT * FROM danhmucsp ORDER BY id_dmsp ASC";
$query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);

?>
<div class=" sidebar col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 250px;">
        <a href="../pages/sanpham.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
                <use xlink:href="#bootstrap"></use>
            </svg>
            <span class="fs-4">Sản phẩm</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <?php
            while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
            ?>
                <li class="nav-item">
                    <a href="sanpham.php?quanly=hienthisp&id=<?php echo $row_danhmuc['id_dmsp'] ?>" class="nav-link link-dark" aria-current="page">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#"></use>
                        </svg>
                        <?php echo $row_danhmuc['tendmsp'] ?>
                    </a>
                </li>
            <?php
            }
            ?>
        </ul>
        <hr>
        <!-- <div class="dropdown">
            <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>mdo</strong>
            </a>
            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
        </div> -->
    </div>
</div>