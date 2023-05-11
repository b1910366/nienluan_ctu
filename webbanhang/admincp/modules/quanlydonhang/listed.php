<?php

$sql_listed_dh = "SELECT * FROM giohang, khachhang WHERE giohang.id_khachhang=khachhang.id_khachhang ORDER BY giohang.id_giohang DESC";
$query_listed_dh = mysqli_query($mysqli, $sql_listed_dh);
?>

<div class="container mt-1">
    <h2>Danh sách Đơn Hàng</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Mã Đơn Hàng</th>
                <th>Tên Khách</th>
                <th>Địa chỉ</th>
                <th>Điện Thoại</th>
                <th>Ngày đặt</th>
                <th>Ngày Xử Lý</th>
                <th>Tình trạng</th>
                
            </tr>
        </thead>

        <tbody>
            <?php
                $i = 0;
                while($row = mysqli_fetch_array($query_listed_dh)) {
                    $i++;
            ?>
            <tr>
                <td><?php echo $row['id_giohang'] ?></td>
                <td><?php echo $row['ma_giohang'] ?></td>
                <td><?php echo $row['tenkhachhang'] ?></td>
                <td><?php echo $row['diachi'] ?></td>
                <td><?php echo $row['dienthoai'] ?></td>
                <td><?php echo $row['ngay_giohang'] ?></td>
                <td><?php echo $row['ngay_xuly'] ?></td>
                <td>
                    <?php 
                    if ($row['tinhtrang_giohang'] == 1 ) {
                        echo '<a role="button" href="modules/quanlydonhang/process.php?ma_donhang='.$row['ma_giohang'].'&tinhtrang_giohang='.$row['tinhtrang_giohang'].'" class="btn btn-danger">Chưa xử lý</a>';
                    } else {
                        echo '<a role="button" href="modules/quanlydonhang/process.php?ma_donhang='.$row['ma_giohang'].'&tinhtrang_giohang='.$row['tinhtrang_giohang'].'&ngay_xuly='.$row['ngay_xuly'].'" class="btn btn-success">Đã xử lý</a>';
                    }
                    ?>
                </td>
                <td>
                <a role="button" class="btn btn-primary" href="index.php?action=donhang&query=xemdonhang&ma_donhang=<?php echo $row['ma_giohang'] ?>">
                    Xem
                </a>
                </td>
            </tr>
            <?php
                }
            ?>

    </table>
</div>
