<section class="w-100 p-4 d-flex justify-content-center pb-4">

    <div class="container">

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Thêm Sản Phẩm
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title" id="exampleModalLabel">Thêm Sản Phẩm</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form style="width: fit;" method="POST" action="modules/quanlysp/process.php" enctype="multipart/form-data">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example1" style="margin-left: 0px;">Mã Sản Phẩm</label>
                                <input type="text" name="masp" id="form2Example1" class="form-control">
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example2" style="margin-left: 0px;">Tên Sản Phẩm</label>
                                <input type="text" name="tensp" id="form2Example2" class="form-control">
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-outline mb-4" style="width: fit;">
                                        <label class="form-label" for="form2Example2" style="margin-left: 0px;">Giá</label>
                                        <input type="text" name="gia" id="form2Example2" class="form-control">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline mb-4" style="width: 5rem;">
                                        <label class="form-label" for="form2Example2" style="margin-left: 0px;">Số Lượng</label>
                                        <input type="text" name="soluong" id="form2Example2" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example2" style="margin-left: 0px;">Hình Ảnh</label>
                                <input type="file" name="hinhanh" id="form2Example2" class="form-control">
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example2" style="margin-left: 0px;">Nội Dung</label>
                                <textarea name="noidung" rows="10" id="form2Example2" class="form-control"></textarea>
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example2" style="margin-left: 0px;">Danh Mục</label>
                                <select name="id_dmsp">
                                    <?php
                                    $sql_danhmuc = "SELECT * FROM danhmucsp ORDER BY id_dmsp ASC";
                                    $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                                    while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                                    ?>
                                        <option value="<?php echo $row_danhmuc['id_dmsp'] ?>"><?php echo $row_danhmuc['tendmsp'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example2" style="margin-left: 0px;">Tình trạng</label>
                                <select name="tinhtrang">
                                    <option value="1">Mở Bán</option>
                                    <option value="0">Ẩn</option>
                                </select>
                            </div>
                            <!-- Submit button -->
                            <button type="submit" name="themsp" class="btn btn-success btn-block mb-4">Thêm</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>