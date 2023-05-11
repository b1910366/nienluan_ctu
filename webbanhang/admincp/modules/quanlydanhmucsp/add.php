<section class="w-100 p-4 d-flex justify-content-center pb-4">

    <div class="container">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Thêm Danh Mục Sản Phẩm
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title" id="exampleModalLabel">Thêm Danh Mục Sản Phẩm</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form style="width: 28rem;" method="POST" action="modules/quanlydanhmucsp/process.php">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example1" style="margin-left: 0px;">Tên Danh Mục</label>
                                <input type="text" name="tendmsp" id="form2Example1" class="form-control">
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example2" style="margin-left: 0px;">Thứ Tự</label>
                                <input type="text" name="thutu" id="form2Example2" class="form-control">
                            </div>
                            <!-- Submit button -->
                            <button type="submit" name="themdanhmuc" class="btn btn-success btn-block mb-4">Thêm</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>