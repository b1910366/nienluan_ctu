<?php
$sql_sp = "SELECT * FROM sanpham WHERE sanpham.id_dmsp='$_GET[id]' AND sanpham.tinhtrang='1' ORDER BY id_sp ASC";
$query_sp = mysqli_query($mysqli, $sql_sp);
//Lấy tên DMSP
$sql_title = "SELECT * FROM danhmucsp WHERE danhmucsp.id_dmsp='$_GET[id]' LIMIT 1";
$query_title = mysqli_query($mysqli, $sql_title);
$row_title = mysqli_fetch_array($query_title);
?>
<h1 class="h2 text-start"><?php echo $row_title['tendmsp'] ?></h1>
<div class="ds-sanpham row">
    <?php
    while ($row_sp = mysqli_fetch_array($query_sp)) {
    ?>
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="../admincp/modules/quanlysp/uploads/<?php echo $row_sp['hinhanh'] ?>" style="height: 100%; width: 100%; display: block;">
                <div class="card-body">

                    <h3><?php echo $row_sp['tensp'] ?></h3>

                    <div class="d-flex justify-content-between align-items-center">
                        <small class="gia text-muted"><?php echo number_format($row_sp['gia']) ?> VND</small>
                        <div class="btn-group">
                            <a role="button" class="btn btn-sm btn-outline-secondary" href="sanpham.php?quanly=chitietsp&id=<?php echo $row_sp['id_sp'] ?>">Xem</a>
                        </div>
                        <!-- <div class="btn-group">
                            <a role="button" class="btn btn-sm btn-secondary" href="sanpham.php?quanly=themgiohang&idsp=<?php echo $row_sp['id_sp'] ?>" name="themgiohang">Thêm Giỏ Hàng</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>