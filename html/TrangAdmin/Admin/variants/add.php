<section class="main_content dashboard_part large_header_bg">
    <div class="container-fluid g-0">
    </div>
    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="dashboard_header mb_50">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="dashboard_header_title">
                                    <h3></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="white_box mb_30">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">

                                <div class="modal-content cs_modal">
                                    <div class="modal-header justify-content-center theme_bg_1">
                                        <h5 class="modal-title text_white">Add Shirt</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form action="index.php?act=addvariants" method="POST" enctype="multipart/form-data">


                                            <div class="mb_10">
                                                <label for="">
                                                    <div class="main-title">
                                                        <h5 class="mb-0">ID Varliants</h5>
                                                    </div>
                                                </label>
                                                <input type="text" class="form-control" name="id_variants" disabled placeholder="Auto...">
                                            </div>
                                            <div class="mb_10">
                                                <label for="">
                                                    <div class="main-title">
                                                        <h5 class="mb-0">IDProduct:</h5>
                                                    </div>
                                                </label>
                                                <input type="text" class="form-control" name="id">
                                            </div>
                                            <div class="mb_10">
                                                <label for="">
                                                    <div class="main-title">
                                                        <h5 class="mb-0">Quanity:</h5>
                                                    </div>
                                                </label>
                                                <input type="text" class="form-control" name="quantity">
                                            </div>
                                            <div class="mb_10">

                                                <h5 class="mb-0">Size:</h5>
                                                <select name="size">
                                                    <?php
                                                    foreach ($listsizes as $sizes) {
                                                        extract($sizes); ?>
                                                        <option value="<?= $id_size ?> " selected>
                                                            <?= $size ?>
                                                        </option>;
                                                    <?php   }
                                                    ?>
                                                </select>
                                                <hr>
                                                <h5 class="mb-0">Color:</h5>
                                                <select name="color">
                                                    <?php
                                                    foreach ($listcolors as $colors) {
                                                        extract($colors); ?>
                                                        <option value="<?= $id_color ?>" selected>
                                                            <?= $color ?>
                                                        </option>;
                                                    <?php   }
                                                    ?>
                                                </select>


                                            </div>

                                            <div class>
                                                <div class="add_button">
                                                    <input type="submit" name="themmoi" class="btn_1" value="Thêm Mới">
                                                    <input type="reset" class="btn_1" value="Nhập Lại">
                                                </div>
                                            </div>
                                        </form>
                                        <?php
                                        if (isset($thongBao) && ($thongBao != "")) {
                                            echo $thongBao;
                                        }

                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>