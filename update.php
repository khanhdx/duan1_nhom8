<?php
if (is_array($products)) {
    extract($products);
}
$hinhpath = "../../upload/" . $img;
if (is_file($hinhpath)) {
    $hinh = '<img width="100px" src="' . $hinhpath . '" alt="">';
} else {
    $hinh = "No image";
}

?>


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
                                    <h3> Thêm Mới Loại Áo</h3>
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
                                        <h5 class="modal-title text_white">Loại áo</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
                                            <div class="mb_10">

                                                Group product:
                                                <select name="id_groupproduct" id="">
                                                    <option value="0" selected>All</option>

                                                    <?php foreach ($listgroupproduct as $groupproduct) {
                                                        extract($groupproduct);
                                                        if ($id_groupproduct === $id) $s = "selected";
                                                        else $s = "";
                                                        echo '<option value="' . $id . '" ' . $s . '>' . $name . '</option>';
                                                    }

                                                    ?>
                                                </select>
                                            </div>

                                            <div class="mb_10">
                                                <label for="">
                                                    <div class="main-title">
                                                        <h5 class="mb-0">Tên áo:</h5>
                                                    </div>
                                                </label>
                                                <input type="text" class="form-control" name="name" value="<?= $products['name'] ?>">
                                            </div>
                                            <div class="mb_10">
                                                <label for="">
                                                    <div class="main-title">
                                                        <h5 class="mb-0">Image:</h5>
                                                    </div>
                                                </label>
                                                <input type="file" class="form-control" name="hinh" ><br>
                                                <a style="width: 100px;" href=""><?= $hinh ?></a>
                                            </div>
                                            <div class="mb_10">
                                                <label for="">
                                                    <div class="main-title">
                                                        <h5 class="mb-0">Giá:</h5>
                                                    </div>
                                                </label>
                                                <input type="text" class="form-control" name="price" value="<?= $products['price'] ?>">
                                            </div>
                                          

                                            <div class>
                                                <div class="add_button">
                                                    <input type="hidden" name="id" value="<?= $products['id'] ?>">
                                                    <input type="submit" name="capnhat" class="btn_1" value="Cap Nhat">
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