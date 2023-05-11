<?php
$sql_listed_sp = "SELECT * FROM sanpham, danhmucsp WHERE sanpham.id_dmsp=danhmucsp.id_dmsp ORDER BY id_sp DESC";
$query_listed_sp = mysqli_query($mysqli, $sql_listed_sp);
?>

<div class="container mt-1">
    <h2>Danh sách Sản Phẩm</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên Sản Phẩm</th>
                <th>Hình Ảnh</th>
                <th>Giá</th>
                <th>Số Lượng</th>
                <th>Danh Mục</th>
                <th>Tình Trạng</th>
                <th>Thao tác</th>
            </tr>
        </thead>

        <tbody>
            <?php
                $i = 0;
                while($row = mysqli_fetch_array($query_listed_sp)) {
                    $i++;
            ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['tensp'] ?></td>
                <td><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="150px"></td>
                <td><?php echo $row['gia'] ?></td>
                <td><?php echo $row['soluong'] ?></td>
                <td><?php echo $row['tendmsp'] ?></td>
                <td><?php if ($row['tinhtrang']==1){
                    echo 'Đang mở bán';
                } else{
                    echo 'Đã ẩn';
                } ?></td>

                <td>
                <a role="button" class="btn btn-outline-primary mb-2" href="?action=quanlysanpham&query=sua&id_sp=<?php echo $row['id_sp'] ?>">
                Sửa
                </a>
                <a role="button" class="btn btn-danger mt-2" href="modules/quanlysp/process.php?id_sp=<?php echo $row['id_sp'] ?>">
                    Xóa
                </a>
                </td>
            </tr>
            <?php
                }
            ?>

    </table>
</div>