<?php
    $sql_chitiet = "SELECT * FROM sanpham WHERE sanpham.id_sp='$_GET[id]' AND sanpham.tinhtrang='1'";
    $query_chitiet = mysqli_query($mysqli, $sql_chitiet);
    while ($row_chitiet = mysqli_fetch_array($query_chitiet)) {
?>

<div class="container">
    <form method="POST" action="sanpham/themgiohang.php?idsp=<?php echo $row_chitiet['id_sp'] ?>">
    <div class="row">
                <div class="row">
                    <div class="col">
                        <div class="p-6">
                            <div class="text-center p-4"> <img src="../admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>" width="400px" /> </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product p-4">
                            <div class="mt-4 mb-3">
                                <h2 class="text-uppercase text-secondary"><?php echo $row_chitiet['tensp'] ?></h2>
                            </div>

                            <div class="mt-4 mb-3">
                                <h3 class="text"><?php echo number_format($row_chitiet['gia']) ?> VND</h3>
                            </div>

                            <div class="mt-4 mb-3">
                                <p class="text"><?php echo substr_replace($row_chitiet['noidung'], "...", 200) ?></p>
                            </div>
                            
                            <div class="cart mt-4 align-items-center">
                                <button class="btn btn-danger text-uppercase mr-2 px-4" name="themgiohang">Thêm Giỏ Hàng</button> 
                                <i class="fa fa-heart text-muted"></i> <i class="fa fa-share-alt text-muted"></i> 
                                Còn lại: <?php echo number_format($row_chitiet['soluong']) ?>
                            </div>      
                            
                        </div>
                    </div>
                </div>
                <hr class="my-4" />
                <div class="row">
                <div class="col-md-12 p-5 d-flex justify-content-center">
                    <h1 class="text-secondary">Chi tiết Sản Phẩm</h1>
                </div>
                </div>
                <p class="about"><?php echo $row_chitiet['noidung'] ?></p>
        
    </div>
    </form>
</div>
<?php
    }
?>