<section class="w-100 p-4 d-flex justify-content-center pb-4">
    <?php
    $sql_edit_sp = "SELECT * FROM sanpham WHERE id_sp='$_GET[id_sp]' LIMIT 1";
    $query_edit_sp = mysqli_query($mysqli, $sql_edit_sp);
    ?>
    <div class="container">

        <h2>Sửa Sản Phẩm</h2>
        <form style="width: fit;" method="POST" action="modules/quanlysp/process.php?id_sp=<?php echo $_GET['id_sp'] ?>" enctype="multipart/form-data">
            <?php
            while ($row = mysqli_fetch_array($query_edit_sp)) {
            ?>
                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example1" style="margin-left: 0px;">Mã Sản Phẩm</label>
                    <input type="text" value="<?php echo $row['masp'] ?>" name="masp" id="form2Example1" class="form-control">
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example2" style="margin-left: 0px;">Tên Sản Phẩm</label>
                    <input type="text" value="<?php echo $row['tensp'] ?>" name="tensp" id="form2Example2" class="form-control">
                </div>

                <div class="row">
                    <div class="col">
                    <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example2" style="margin-left: 0px;">Giá</label>
                    <input type="text" value="<?php echo $row['gia'] ?>" name="gia" id="form2Example2" class="form-control">
                </div>
                    </div>
                    <div class="col">
                    <div class="form-outline mb-4" style="width: 5rem";>
                    <label class="form-label" for="form2Example2" style="margin-left: 0px;">Số Lượng</label>
                    <input type="text" value="<?php echo $row['soluong'] ?>" name="soluong" id="form2Example2" class="form-control">
                </div>
                    </div>
                </div>

                

                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example2" style="margin-left: 0px;">Hình Ảnh</label>
                    <input type="file" name="hinhanh" id="form2Example2" class="form-control">
                    <img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="150px">
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example2" style="margin-left: 0px;">Nội Dung</label>
                    <textarea name="noidung" rows="10" id="form2Example2" class="form-control"><?php echo $row['noidung'] ?></textarea>
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example2" style="margin-left: 0px;">Danh Mục</label>
                    <select name="id_dmsp">
                        <?php
                        $sql_danhmuc = "SELECT * FROM danhmucsp ORDER BY id_dmsp ASC";
                        $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                        while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                            if ($row_danhmuc['id_dmsp'] == $row['id_dmsp']) {
                        ?>
                                <option selected value="<?php echo $row_danhmuc['id_dmsp'] ?>"><?php echo $row_danhmuc['tendmsp'] ?></option>
                            <?php
                            } else {
                            ?>
                                <option value="<?php echo $row_danhmuc['id_dmsp'] ?>"><?php echo $row_danhmuc['tendmsp'] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example2" style="margin-left: 0px;">Tình trạng</label>
                    <select name="tinhtrang">
                        <?php
                        if ($row['tinhtrang'] == 1) {
                        ?>
                            <option value="1" selected>Mở Bán</option>
                            <option value="0">Ẩn</option>
                        <?php
                        } else {
                        ?>
                            <option value="1">Mở Bán</option>
                            <option value="0" selected>Ẩn</option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <!-- Submit button -->
                <button type="submit" name="suasp" class="btn btn-success btn-block mb-4">Lưu</button>
            <?php
            }
            ?>
        </form>
    </div>
</section>