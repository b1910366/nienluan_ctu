<?php
$sql_listed_ctdh = "SELECT * FROM chitiet_giohang, sanpham, khachhang, giohang
                    WHERE chitiet_giohang.id_sp=sanpham.id_sp 
                    AND chitiet_giohang.ma_giohang='$_GET[ma_donhang]' 
                    AND khachhang.id_khachhang=giohang.id_khachhang 
                    AND chitiet_giohang.ma_giohang=giohang.ma_giohang 
                    ORDER BY chitiet_giohang.id_ctgiohang ASC";
$query_listed_ctdh = mysqli_query($mysqli, $sql_listed_ctdh);


$sql_listed_tendh = "SELECT * FROM khachhang, giohang
                    WHERE giohang.ma_giohang='$_GET[ma_donhang]' 
                    AND khachhang.id_khachhang=giohang.id_khachhang";
$query_listed_tendh = mysqli_query($mysqli, $sql_listed_tendh);

$sql_listed_tongtien = "SELECT * FROM chitiet_giohang, sanpham
                    WHERE chitiet_giohang.id_sp=sanpham.id_sp 
                    AND chitiet_giohang.ma_giohang='$_GET[ma_donhang]'
                    ORDER BY chitiet_giohang.id_ctgiohang ASC";
$query_listed_tongtien = mysqli_query($mysqli, $sql_listed_tongtien);

?>

<div class="container mt-1">
    <p>Đơn hàng: <strong><?php $row_tendh = mysqli_fetch_array($query_listed_tendh);
                    echo $row_tendh['ma_giohang'] ?></strong> - <?php echo $row_tendh['tenkhachhang'] ?></p>
    <h5>Thành tiền:
        <?php
        $i = 0;
        $thanhtien = 0;
        while ($row_tongtien = mysqli_fetch_array($query_listed_tongtien)) {
            $i++;
            $tongtien = $row_tongtien['gia'] * $row_tongtien['soluongmua'];
            $thanhtien += $tongtien;
        }
        echo number_format($thanhtien + 30000); echo ' VND'; 
    ?>
     (đã gồm 30,000 Shipping)</h5>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã Sản Phẩm</th>
                <th>Tên Sản Phẩm</th>
                <th>Số Lượng Mua</th>
                <th>Đơn giá</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($query_listed_ctdh)) {
                $i++;
            ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row['id_sp'] ?></td>
                    <td><?php echo $row['tensp'] ?></td>
                    <td><?php echo $row['soluongmua'] ?></td>
                    <td><?php echo number_format($row['gia']) ?></td>
                    
                </tr>
            <?php
            }
            ?>
        </tbody>

    </table>
</div>