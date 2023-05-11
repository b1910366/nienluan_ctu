<?php
$sql_listed_danhmucsp = "SELECT * FROM danhmucsp ORDER BY thutu DESC";
$query_listed_danhmucsp = mysqli_query($mysqli, $sql_listed_danhmucsp);
?>
<div class="container mt-1">
    <h2>Danh sách Danh Mục</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên Danh Mục</th>
                <th>Thao tác</th>
            </tr>
        </thead>

        <tbody>
            <?php
                $i = 0;
                while($row = mysqli_fetch_array($query_listed_danhmucsp)) {
                    $i++;
            ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['tendmsp'] ?></td>
                <td>
                <a role="button" class="btn btn-outline-primary" href="?action=quanlydanhmucsanpham&query=sua&id_dmsp=<?php echo $row['id_dmsp'] ?>">
                    Sửa
                </a>
                <a role="button" class="btn btn-danger" href="modules/quanlydanhmucsp/process.php?id_dmsp=<?php echo $row['id_dmsp'] ?>" value="Xóa">
                    Xóa
                </a>
                </td>
            </tr>
            <?php
                }
            ?>

    </table>
</div>