<section class="w-100 p-4 d-flex justify-content-center pb-4">
    <?php
    $sql_edit_danhmucsp = "SELECT * FROM danhmucsp WHERE id_dmsp='$_GET[id_dmsp]' LIMIT 1";
    $query_edit_danhmucsp = mysqli_query($mysqli, $sql_edit_danhmucsp);
    ?>
    <div class="container">
        <h2>Sửa Danh Mục</h2>
        <form style="width: 35rem;" method="POST" action="modules/quanlydanhmucsp/process.php?id_dmsp=<?php echo $_GET['id_dmsp'] ?>">
            <?php
            while ($dong = mysqli_fetch_array($query_edit_danhmucsp)) {
            ?>
                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example1" style="margin-left: 0px;">Tên Danh Mục</label>
                    <input type="text" value="<?php echo $dong['tendmsp'] ?>" name="tendmsp" id="form2Example1" class="form-control">

                    <div class="form-notch">
                        <div class="form-notch-leading" style="width: 9px;"></div>
                        <div class="form-notch-middle" style="width: 88.8px;"></div>
                        <div class="form-notch-trailing"></div>
                    </div>
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example2" style="margin-left: 0px;">Thứ Tự</label>
                    <input type="text" value="<?php echo $dong['thutu'] ?>" name="thutu" id="form2Example2" class="form-control">

                    <div class="form-notch">
                        <div class="form-notch-leading" style="width: 9px;"></div>
                        <div class="form-notch-middle" style="width: 64px;"></div>
                        <div class="form-notch-trailing"></div>
                    </div>
                </div>
                <!-- Submit button -->
                <button type="submit" name="suadanhmuc" class="btn btn-success btn-block mb-4">Lưu</button>
            <?php
            }
            ?>
        </form>
    </div>
</section>